<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function index()
    {
        $username = Auth()->user()->name;
        $cart_products = Panier::where('type', $username)->get();
        $total_price = 0;

        foreach ($cart_products as $cart_product) {
            $total_price += $cart_product->prix;
        }

        return view('pages.cart', compact('cart_products', 'total_price'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Panier $panier)
    {
        //
    }

    public function edit(Panier $panier)
    {
        //
    }

    public function update(Request $request, Panier $panier)
    {
        //
    }
//     public function getCartCount()
// {
//     $cartCount = 5;

//     return response()->json(['count' => $cartCount]);
// }

    public function destroy($id)
    {
        $panier = Panier::findOrFail($id);
        $panier->delete();

        return redirect()->back();
    }
}
