<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function device()
    {
        return view('device');
    }

    public function product()
    {
        $products = Product::paginate(5);
        return view('product', compact('products'));
    }

    public function search(Request $request)
    {
        if($request ->isMethod('post')){
            $search = $request->get('search');
            $products = Product::where('name','like','%'.$search.'%')->orWhere('code','like','%'.$search.'%')->paginate(5);
        }else{
            $products = Product::paginate(5);
        }

        return view('product', compact('products'));
    }
}
