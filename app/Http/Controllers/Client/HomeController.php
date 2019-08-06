<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
        public function index()
        {
            // $products = Product::whereBetween('price', [300000, 399000])->get();

            // return view('client.index', ['products' => $products]);
            return view('client.index');
        }
        public function contact()
    {
        return view('client.contact');
    }

    public function about()
    {
        return view('client.about');
    }
}
