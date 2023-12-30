<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function createProduct()
    {
        return view('product.create');
    }

    public function storeProduct(CreateProductRequest $request)
    {
        Product::create([
            'title' => $request->title,
            'price' => $request->price,
            'total_count' => $request->total_count,
            'category' => $request->category,
            'description' => $request->description,
        ]);

//        $product = new Product();
//        $product->title = $request->title;
//        $product->price = $request->price;
//        $product->total_count = $request->total_count;
//        $product->category = $request->category;
//        $product->description = $request->description;
//
//        $product->save();


        return redirect()->route('product.index');
    }

    public function productList()
    {
        $products = Product::
            select('id','title','price','total_count','is_active','category','created_at')
            ->where('is_active',1)
            ->get();

        return view('product.index',compact('products'));
    }

    public function productShow($id)
    {
        $product = Product::find($id);
        return view('product.show',compact('product'));
    }
}