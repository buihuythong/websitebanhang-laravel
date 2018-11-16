<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    public $table = 'slide';

    public $timestamps = false;

    public function add($name, $link, $image, $descripton, $display){
    	$this->name = $name;
    	$this->link = $link;
    	$this->image = $image;
    	$this->descripton = $descripton;
    	$this->display = $display;
    	if($this->save()){
    		return true;
    	}
    }

    public function getAllSlide(){
        $data = Slide::all()->toArray();
        return $data;
    }

    public function deleteSlide($id){
        $slide = Slide::find($id);
        if($slide->delete()){
            return true;
        }
    }
}
