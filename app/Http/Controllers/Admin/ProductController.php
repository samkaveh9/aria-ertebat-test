<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('Admin.Products.index', ['products' => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
           'title' => 'required',
           'description' => 'required',
           'image' => 'required',
           'content' => 'required',
           'price' => 'required',
       ]);

        if ($request->hasFile("image")) {
            $file = $request->file("image");
            $fileExtension = strtolower($file->getClientOriginalExtension());
            $fileName = date('Ymdhis') . '.' . $fileExtension;
            $file->move(storage_path('app/public/'), $fileName);
           Product::create(array_merge($request->only('title', 'description', 'content', 'price'),['image' => $fileName]));
           return redirect(route('products.all'));
        }
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
        $product = Product::findOrFail($id);
        return view('Admin.Products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'content' => 'required',
            'price' => 'required',
        ]);
        $product = Product::findOrFail($id);

        if ($request->hasFile("image")) {
            $file = $request->file("image");
            $fileExtension = strtolower($file->getClientOriginalExtension());
            $fileName = date('Ymdhis') . '.' . $fileExtension;
            $file->move(storage_path('app/public/'), $fileName);
            $product->update(array_merge($request->only('title', 'description', 'content', 'price'),['image' => $fileName]));
            return redirect(route('products.all'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::query()->find($id)->delete();
        return redirect(route('products.all'));
    }
}
