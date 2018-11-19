<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Type;
use App\Product;
use App\Slide;
use App\Cart;
use Session;
use App\Bill;
use App\billdetail;
use App\customer;


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
        return redirect('index.html');
        
    }
    public function delCart($id)
    {
        $oldCart=Session('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->reduceByOne($id);
        Session::put('cart',$cart);
        return redirect()->back();
    }
    public function compare($id,Request $req)
    {
        $product=Product::find($id);
        $oldCart = Session('cartcp')?Session::get('cartcp'):null;
        $cartcp=new Cart($oldCart);
        $cartcp->add($product,$id);
        $req->session()->put('cartcp',$cartcp);
        return view('users.compare');
        /*dd($cartcp);*/
    }
    public function shopping()
    {
        $product=Product::all();
        return view('users.shopping-cart',compact('product'));
    }
    public function checkouta(Request $req)
    {
        $cart=Session::get('cart');

        $customer= new customer;
        $customer->name=$req->name;
        $customer->gender=$req->gioitinh;
        $customer->address=$req->dc;
        $customer->phone=$req->sdt;
        $customer->note=$req->note;
        $customer->save();

        $bill= new Bill;
        $bill->customer_id=$customer->id;
        $bill->date=date('Y-m-d');
        $bill->total=$cart->totalPrice;
        $bill->note=$req->note;
        $bill->save();

        foreach ($cart->items as $key => $value) {
            $bill_detail=new billdetail;
            $bill_detail->id_bill=$bill->id;
            $bill_detail->id_product=$key;
            $bill_detail->quantity=$value['qty'];
            $bill_detail->old_price=($value['price']/$value['qty']);
            $bill_detail->save();
        }
        Session::forget('cart');
        return redirect('index.html');
    }
    public function share(Request $req)
    {
        $product=Product::where('name','like','%'.$req->search.'%')->orwhere('old_price',$req->search)->get();
        return view('users.share',compact('product'));
    }
    public function list($id)
    {
        $product=Product::where('type_id','=',$id)->get();
        return view('users.list',compact('product'));
    }
}
