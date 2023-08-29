<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
class AdminPage extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $allproducts = Product::get();
        if (Auth::id()) {
            $usertype = Auth()->user()->type;

            if ($usertype === 'user') {
                return redirect()->route('home');
            } else if ($usertype === 'admin') {
                return view('admin.create');
            }
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $product=Product::find($id);
        return view('admin.edite', compact('product'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            // Product not found
            return redirect()->route('home')->with('message', 'Product not found')->with('message_type', 'error');
        }

        $prix = $request->input('prix');

        if (is_null($prix)) {
            // Null input value
            return redirect()->route('home')->with('message', 'Input value cannot be null')->with('message_type', 'error');
        }

        $product->update([
            'prix' => $prix,
        ]);

        if ($product->wasChanged()) {
            // Update successful
            return redirect()->route('home')->with('message', 'Update successfully')->with('message_type', 'success');
        } else {
            // Update not working
            return redirect()->route('home')->with('message', 'Update not working')->with('message_type', 'error');
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        Session::flash('message', $product->title . ' has been deleted successfully.');
        Session::flash('message_type', 'success');

        return redirect()->back();
    }
}
