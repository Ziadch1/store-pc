<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Panier;
use App\Models\Product;
use Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageControll extends Controller
{
    public function home()
    {
        $allproducts = Product::get();
    
        if (Auth::check() && Auth()->user()->type === 'admin') {
            $pcgamers = Product::where('type', 'pcgamer')->get();
            $pcportables = Product::where('type', 'pcportable')->get();
            $monitors = Product::where('type', 'monitors')->get();
            $accessoires = Product::where('type', 'accessoires')->get();
    
            $productsByType = [
                'pcgamer' => $pcgamers,
                'Monitors' => $monitors,
                'pcportable' => $pcportables,
                'accessoire' => $accessoires,
                // Add more product types and their corresponding variables here if needed
            ];
    
            return view('admin.home', compact('productsByType'));
        }
    
        return view('pages.home');
    }
    
    
    public function messages(){
        $allcontacts = Contact::get();
        if (Auth::id()) {
            $usertype = Auth()->user()->type;
    
            if ($usertype === 'user') {
                return redirect()->route('home');
            } else if ($usertype === 'admin') {
                
                return view("admin.messages",compact('allcontacts',));
            }
        }
    return view('pages.home');
    }
    public function orders(){
        $allproducts = "orders";
        if (Auth::id()) {
            $usertype = Auth()->user()->type;
    
            if ($usertype === 'user') {
                return redirect()->route('home');
            } else if ($usertype === 'admin') {
                
                return view("admin.orders",compact('allproducts',));
            }
        }
    return view('pages.home');
    }
    public function checkout(){
    
        $username = Auth()->user()->name;
        $cart_products = Panier::where('type', $username)->get();
        $total_price = 0;

        foreach ($cart_products as $cart_product) {
            $total_price += $cart_product->prix;
        }

        return view('pages.checkout', compact('cart_products', 'total_price'));
    }
    public function myname(){
        $username = Auth()->user()->name;
        return $username;
    }
    public function contact(){
        return view('pages.contact');
    }
    public function pcgamer()
    {
        // $username = Auth()->user()->name;
        $pcgamers = Product::where('type', 'pcgamer')->get();
        return view('pages.categories.pcGamer', compact('pcgamers'));
    }
    
    public function pcportable(){
        $pcportables = Product::where('type', 'pcportable')->get();
        return view('pages.categories.pcPortable',compact('pcportables'));
    }
    public function monitors(){
        $monitors = Product::where('type', 'monitors')->get();
        return view('pages.categories.monitors',compact('monitors'));
    }
    public function accessoire(){
        $accessoires = Product::where('type', 'accessoires')->get();
        return view('pages.categories.accessoires',compact('accessoires'));
    }
    public function shope(){
        $pcgamers = Product::where('type', 'pcgamer')->inRandomOrder()->get();
        $pcportables = Product::where('type', 'pcportable')->inRandomOrder()->get();
        $monitors = Product::where('type', 'monitors')->inRandomOrder()->get();
        $accessoires = Product::where('type', 'accessoires')->inRandomOrder()->get();
        return view('pages.categories.shope', compact('pcgamers', 'pcportables', 'monitors', 'accessoires'));
    }
    
}
