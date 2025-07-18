<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product =Product::Product()->first();
         return $product;

        // to get the data of soft delete
        // $product =Product::onlyTrashed()->get();
        // return $product ;
// return view('product.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          $products = Product::all();
        return view('product.create',['products' => $products]);

        // return view('product.index',compact('products'));
        // return view('product.index')->with('products',$products);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //create

    // $product=new Product() ;
    // $product->name = $request->name;
    // $product->discraption = $request->discraption;
    // $product->save();

    // return $request;
        // another soulation
    Product::create([
        "name"=>$request->name,
        "discraption"=>$request->discraption,
    ]);
  return redirect()->route('product.create');

// return redirect()->route('product.index');
    //     Product::create(
    // $request->all()
    // );
    //select
    // $select = post::all();
    // return $select ;
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // return "wlcome" ;
        $products = Product::onlyTrashed()->get();
        // return $product ;
        return view('product.index',['products'=>$products]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
            // //select
    // return post::find(1);
    // return post::findOrFail(1);
    // return post::all();
        $product = Product::findOrFail($id); // not support condation if you want make condation use down
        // $product = Product::where('id',$id)->first();//another solution
        return view('product.edit',['product'=>$product]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

    // $request->validate([
    //     'name' => 'required|string|max:255',
    //     'discraption' => 'nullable|string',
    // ]);
    $product->update([
        'name' => $request->name,
        'discraption' => $request->discraption,
    ]);


    return redirect()->route('product.create');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product )
    {

        // Product::destroy($id);
        $product->delete();
    return redirect()->route('product.create');
    }

    public function trashed()
{
     $product =Product::product()->first();
        return $product;
    // $products = Product::onlyTrashed()->get();
    // return view('product.trashed', ['products' => $products]);
}
    public function restore($id){
        // return $id ;
        Product::withTrashed()->where('id',$id)->restore();
        return redirect()->back();
    }

    public function forceDelete($id){
            Product::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->back();
    }
}
