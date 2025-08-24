<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class addtocartcontroller extends Controller
{
    function addtocart($id)
    {

        $product = product::with('images')->find($id);
        $allcate = category::all();
        $var = [
            'allcate' => $allcate,
            'product' => $product,
        ];
        return view("cart", $var);
    }





    function storesession(Request $req, $id)
    {

        $data = product::findOrFail($id);
        $req->validate([
            'quantity' => ['required', 'integer', 'min:1'],
        ]);

        // Get the current cart
        $cart = session()->get('cart', []);

        // If product already exists in cart, update quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $req->quantity;
        } else {
            $cart[$id] = [
                'product' => $data,
                'quantity' => $req->quantity
            ];
        }
        $productcount = count($cart);
        session()->put('countpro', $productcount);
        // Save back to session
        session()->put('cart', $cart);

        return redirect()->back()->with('message', 'Product add successfully into the cart');
    }







    public function removesession($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        $productcount = count($cart);
        session()->put('countpro', $productcount);

        return redirect()->back();
    }
}
