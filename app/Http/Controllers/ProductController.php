<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use \Cache;


class ProductController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {   
        if(!Cache::has('products')){
            

            Cache::remember('products', 3600, function() use ($products){
                return $products;
             });
        }
        $products = Cache::get('products');
    
        return view('product.index', compact('products'));
    }
        
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success','Product has been deleted successfully');
    }
       
    public function show(Product $product)
    {
        return view('product.show',compact('product'));
    }
}
