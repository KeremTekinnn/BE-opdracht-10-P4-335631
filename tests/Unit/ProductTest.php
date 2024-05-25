<?php

namespace Tests\Unit;

use Tests\TestCase; // Bu satırı düzeltin
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\Product;
use Carbon\Carbon;
class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        // Örnek bir kullanıcı oluştur
        $user = User::factory()->create();

        // Örnek bir ürün oluştur
        $product = Product::factory()->create();

        // Kullanıcıyı ürüne atayın
        $user->products()->attach($product->id);

        // Test edilecek tarih aralığını belirle
        $startDate = '2021-01-01';
        $endDate = '2021-12-31';

        // Kullanıcıyı oturum açmış gibi yap
        $this->actingAs($user);

        // index rotasına bir get isteği yap
        $response = $this->get('/products?start_date=' . $startDate . '&end_date=' . $endDate);

        // Yanıtın başarılı olduğunu kontrol et
        $response->assertStatus(200);

        // Yanıtın beklenen ürünleri içerdiğini kontrol et
        $response->assertViewHas('products');

        // Ürünlerin doğru sıralamada olduğunu kontrol et
        $viewProducts = $response->viewData('products');
        $this->assertEquals($product->id, $viewProducts->first()->id);
    }

    public function testShow()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();
        $user->products()->attach($product->id);

        $this->actingAs($user);

        $response = $this->get('/products/' . $product->id);

        $response->assertStatus(200);
        $response->assertViewHas('product');
        $response->assertViewHas('allergies');
    }

    public function testDestroy()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create([
            'end_date_delivery' => Carbon::now()->addDays(10)
        ]);
        $user->products()->attach($product->id);

        $this->actingAs($user);

        $response = $this->delete('/products/' . $product->id);

        $response->assertRedirect('/products');
        $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }
}
