<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       
        $products = Product::all();
        return view('Products')->with('products', $products);
    }

    public function indexStore()
    {
        return view('ProductsConfig');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new Product;
        $products->name = $request->get('name');
        $products->description = $request->get('description');
        $products->price = $request->get('price');
        $products->stock = $request->get('stock');
        $products -> content = $request->get('content');
        
        if($request->hasFile('content')){
            $archivo = $request->file('content');
            $archivo->move(public_path().'/products/', $archivo->getClientOriginalName());
            $products->content =$archivo->getClientOriginalName();
        }

        $products->save();

        return redirect(route('productos'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function card($id){
        $product = Product::findOrFail($id);

        $cart = session()->get('cart',[]);

    if(isset($cart[$id])){
        $cart[$id]['quantity']++;

    }else{
        $cart[$id] = [
            "name" => $product->name,
            "content" => $product->content,
            "price" => $product->price,
            "quantity" => 1,
            ];
    }

    
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }
}
