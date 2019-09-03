<?php
namespace App\Http\Controllers\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use App\Models\Product;
use App\Models\Order;
class CartController extends Controller
{
    public function cart()
    {
        return view('client.cart');
    }
    public function checkout()
    {
        return view('client.checkout');
    }
    public function complete()
    {
        return view('client.complete');
    }
    public function add(Request $request)
    {
        $product = Product::findOrFail($request->id);
        Cart::add(array(
            'id' => $request->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->quantity,
            'attributes' => array(
            'avatar' => $product->avatar
            )
        ));
        return response()->json(['quantity' => Cart::getTotalQuantity()>9?'9+':Cart::getTotalQuantity()], 200);
    }
    public function update(Request $request)
    {
        Cart::update($request->id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity
            ),
        ));
        $summedPrice = Cart::get($request->id)->getPriceSum();
        return response()->json([
            'summedPrice' => number_format($summedPrice),
            'subTotal' => number_format(Cart::getSubTotal())
        ], 200);
    }
    public function destroy(Request $request)
    {
        Cart::remove($request->id);
        return response()->json([], 204);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required'
        ]);
        $attributes = $request->only([
            'name', 'email', 'address', 'phone'
        ]);
        $attributes['status'] = 'process';
        $order = Order::create($attributes);
        foreach (Cart::getContent() as $item) {
            $order->orderDetails()->create([
                'product_id' => $item->id,
                'price' => $item->price,
                'quantity' => $item->quantity
            ]);
        }
        Cart::clear();
        
        return redirect('/gio-hang/hoan-thanh');
    }
}