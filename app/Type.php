<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

	public $table = 'type';
	public $timestamps = false;

    public function addType($name, $cat_id){
    	$this->name = $name;
    	$this->cat_id = $cat_id;
    	if($this->save()){
    		return true;
    	}
    }

    public function getAllType(){
    	$data = Type::all()->toArray();
    	return $data;
    }

    public function deleteType($id)
    {
    	$type = Type::find($id);
    	if($type->delete()){
    		return true;
    	}
    }

    public function getOneType($id)
    {
      $data = Type::find($id)->toArray();
      return $data;
    }

    public function editType($id, $name, $cat_id){
    	$type = Type::find($id);
    	$type->name = $name;
    	$type->cat_id = $cat_id;
    	if($type->save()){
    		return true;
    	}
    }

    public function getLimitType($total){
    	$data = Type::paginate($total);
    	return $data;
    }

    public function searchType($r){
    	$data = Type::where('name','like','%'.$r.'%')->get();
    	return $data;
    }

}
