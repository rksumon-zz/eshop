<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCollection;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function index(){
        //return new ProductCollection(Product::orderBy('name','ASC')->where('user_id', '=', Auth::id())->paginate(10));
        return new ProductCollection(Product::orderBy('name','ASC')->where('uid', '=', 1)->paginate(10));
    }
}
