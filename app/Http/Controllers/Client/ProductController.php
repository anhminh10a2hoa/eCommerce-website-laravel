<?php
namespace App\Http\Controllers\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
class ProductController extends Controller
{
    const PER_PAGE = 6;
    public function shop(Request $request)
    {
        $conditions = [];
        $start = null;
        $end = null;
        if ($request->start) {
            $conditions[] = ['price', '>=', $request->start];
            $start = (int)$request->start;
        }
        if ($request->end) {
            $conditions[] = ['price', '<=', $request->end];
            $end = $request->end;
        }
        $products = Product::where($conditions)->latest()->paginate(self::PER_PAGE);
        return view('client.shop', compact('products', 'start', 'end'));
    }

    public function detail(Request $request)
    {
        $products = Product::where('id', $request->id)->first();
        $products_feature = Product::where('is_highlight', '>', 0)->paginate(self::PER_PAGE);
        return view('client.detail', compact('products','products_feature'));
    }
}