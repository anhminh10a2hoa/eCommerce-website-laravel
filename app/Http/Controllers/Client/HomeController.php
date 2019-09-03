<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    const PER_PAGE = 6;
    public function index()
    {
        $products = Product::latest()->with('category')->paginate(self::PER_PAGE);
        $products_feature = Product::where('is_highlight', '>', 0)->paginate(self::PER_PAGE);
        return view('client.index', compact('products','products_feature'));
    }

    public function about()
    {
        return view('client.about');
    }

    public function contact()
    {
        return view('client.contact');
    }
}
