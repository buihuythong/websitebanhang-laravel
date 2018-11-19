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

    public function getOneSlide($id){
        $slide = Slide::find($id)->toArray();
        return $slide;
    }
    public function editSlide($id, $name, $link, $image='', $display, $descripton){
        $slide = Slide::find($id);
        $slide->name = $name;
        $slide->link = $link;

        if($image != ''){
            $slide->image = $image;
        }

        $slide->display = $display;
        $slide->descripton = $descripton;

        if($slide->save()){
            return true;
        }
    }

    public function getLimitSlide($total){
        $data = Slide::paginate($total);
        return $data;
    }

    public function searchSlide($dk){
        $slide = Slide::where('name','like','%'.$dk.'%')->get();
        return $slide;
    }
}
