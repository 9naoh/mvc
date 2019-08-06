<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    const PER_PAGE=6;
    public function detail($id)
    {

        return view('client.detail');
    }

    public function shop(Request $request)
    {
        $start = null;
        $end = null;
        $conditions = [];
        if ($request->start) {
            $conditions[] = ['price', '>=', $request->start];
            $start = (int)$request->start;
        }
        if ($request->end) {
            $conditions[] = ['price', '<=', $request->end];
            $end = (int)$request->end;
        }
        $products = Product::where($conditions)->latest()->paginate(self::PER_PAGE);
        return view('client.shop', compact('products', 'start', 'end'));
    }
}
