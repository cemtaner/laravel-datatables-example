<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('products');
    }

    public function getProducts(){
        $products = Product::select(['id','name','description','price'])->get();

        return datatables()->of($products)
            ->addColumn('action', function($product) {
                return '<a href="#" class="btn btn-primary">Edit</a>&nbsp;<a href="#" class="btn btn-danger">Delete</a>';
            })
        ->toJson();

    }
    
}
