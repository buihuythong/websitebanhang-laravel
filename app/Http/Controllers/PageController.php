<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Type;
use App\Product;
use App\Slide;
use App\Cart;
use Session;

class PageController extends Controller
{
    public function __construct()
    {
       $cat=Category::all();
       $type=Type::all();
      
       view()->share('cat',$cat);
       view()->share('type',$type);
       
      
    }
    public function getindex()
    {
         $product=Product::all();
        $slide=Slide::all();
        /*foreach($product as $pr)
        {
            echo $pr->image;
        }*/
        return view('users.index',compact('cat','type','slide','product'));
    }
    public function getlist()
    {
        return view('users.list');
    }
    public function checkout()
    {
        return view('users.checkout');
    }
    public function productdetail()
    {
        return view('users.product-detail');
    }
    public function quickview($id)
    {

        $product=Product::find($id);
        return view('users.quickview',compact('product'));
    }
    public function addtoCart($id,Request $req)
    {
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart',$cart);
        dd($cart);
       

    }
}
