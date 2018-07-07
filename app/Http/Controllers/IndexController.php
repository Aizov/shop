<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Ad;

class IndexController extends Controller
{
    protected $message;
    public function __construct()
    {
        $this->message  = "Объявление о работе";
    }
    public function show()
    {
        $products = Product::all();

        return view('index', compact('products')); //->with('products', $products)
    }
    public function product($id){
        $product = Product::find($id);
        //$product = Product::select(['img_url', 'cost','description'])->where('id',$id)->first();
        return view('product')->with([
                                        'product'=>$product,
                                        'message'=>$this->message,
                                            ]);
    }
    public function ad(){
        $ads = Ad::all();


        return view('ads',compact('ads',$ads));
    }
}
