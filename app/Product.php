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

    public function addProduct($name, $old_price, $new_price, $title, $cat_id , $type_id, $warranty, $description, $status, $image, $hot ){
        $this->name = $name;
        $this->old_price = $old_price;
        $this->new_price = $new_price;
        $this->title = $title;
        $this->cat_id = $cat_id;
        $this->type_id = $type_id;
        $this->warranty = $warranty;
        $this->description = $description;
        $this->status = $status;
        $this->image = $image;
        $this->hot = $hot;
        if($this->save()){
            return true;
        }
    }

}
