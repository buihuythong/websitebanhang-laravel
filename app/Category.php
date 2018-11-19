<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	public $table = 'category';
	public $timestamps = false;

    public function addCategory($name, $description, $image){
    	$this->name = $name;
    	$this->description = $description;
    	$this->image = $image;
    	if($this->save()){
    		return true;
    	}
    }

    public function getAllCategory(){
    	$data = Category::all()->toArray();
    	return $data;
    }

    public function deleteCategory($id){
    	$category = Category::find($id);
    	if($category->delete()){
    		return true;
    	}
    }

    public function getOneCategory($id){
    	$data = Category::find($id)->toArray();
    	return $data;
    }

    public function editCategory($id, $name, $image='', $description){
    	$category = Category::find($id);
    	$category->name = $name;
    	$category->description = $description;
    	if($image != ''){
    		$category->image = $image;
    	}

    	if($category->save()){
    		return true;
    	}
    }

    public function getLimitCategory($total){
    	$data = Category::paginate($total);
    	return $data;
    }

    public function searchCategory($r){
    	$data = Category::where('name','like','%'.$r.'%')->get();
    	return $data;
    }

}
