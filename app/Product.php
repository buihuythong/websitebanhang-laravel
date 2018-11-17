<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'product';
    public $timestamps = false;

    public function getAllProduct(){
    	$data =	Product::paginate(20);
    	return $data;
    }

    public function searchProduct($sr){
    	 $data = Product::where('name','like','%'.$sr.'%')->get();
        return $data;
    }

    public function selectProduct($total){
        $data = Product::paginate($total);
        return $data;
    }

    public function deleteProduct($id){
        $product = Product::find($id);
        if($product->delete()){
            return true;
        }
    }
}
