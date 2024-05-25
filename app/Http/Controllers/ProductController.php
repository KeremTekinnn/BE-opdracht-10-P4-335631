<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $query = DB::table('users')
            ->join('contacts', 'users.contact_id', '=', 'contacts.id')
            ->join('product_users', 'users.id', '=', 'product_users.user_id')
            ->join('products', 'product_users.product_id', '=', 'products.id')
            ->join('product_end_date_deliveries', 'products.id', '=', 'product_end_date_deliveries.product_id')
            ->select('products.id', 'users.name as user_name', 'users.contact_person', 'contacts.city as city', 'products.name as product_name', 'product_end_date_deliveries.end_date_delivery')
            ->orderBy('product_end_date_deliveries.end_date_delivery', 'asc');

        if ($startDate && $endDate) {
            $query->whereBetween('product_end_date_deliveries.end_date_delivery', [$startDate, $endDate]);
        }

        $products = $query->get();

        return view("product.index", compact("products"));
    }

    public function show($id)
    {
        $product = DB::table('products')
            ->where('products.id', $id)
            ->first();

        $allergies = DB::table('product_allergies')
            ->join('allergies', 'product_allergies.allergy_id', '=', 'allergies.id')
            ->where('product_allergies.product_id', $id)
            ->pluck('allergies.name');

        return view('product.show', compact('product', 'allergies'));
    }

    public function destroy($id)
    {
        $product = DB::table('products')
            ->join('product_end_date_deliveries', 'products.id', '=', 'product_end_date_deliveries.product_id')
            ->select('products.*', 'product_end_date_deliveries.end_date_delivery as end_date')
            ->where('products.id', $id)
            ->first();

        if (Carbon::now()->lessThan($product->end_date)) {
            return redirect()->route('products')->with('error', 'Product kan niet worden verwijdert, datum van vandaag ligt voor einddatum levering');
        }

        DB::table('products')->where('id', $id)->delete();

        return redirect()->route('products')->with('success', 'Product successfully deleted');
    }

}
