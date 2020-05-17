<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use App\Models\ProductTypes;
use Illuminate\Http\Request;
use view;

class ViewController extends Controller
{
    //
    public function __construct()
    {
        $category     = Categories::where('status', 1)->get();
        $product_type = ProductTypes::where('status', 1)->get();
        view()->share(['category' => $category, 'product_type' => $product_type]);
    }
    //
    public function index()
    {
        //
        $product = Product::paginate(10);
        //        dd($product);die;
        return view('client.layouts.view', compact('view'));
    }
}
