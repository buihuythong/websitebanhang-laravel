<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Slide;
use App\Http\Requests\UserRequest;
use App\Http\Requests\SlideRequest;

class AdminController extends Controller
{
    
    public function index(){
    	return view('admin/index');
    }

    public function getAddUser(){
    	return view('admin/users/add');
    }

    public function setAddUser(UserRequest $request){

    	$name = $request->name;
    	$email = $request->email;
    	$password = $request->password;
    	$repassword = $request->repassword;
    	$level = $request->level;
    	$active = $request->active;

    	if($password != $repassword){
    		session(['errorPassword' => true]);
    		return redirect()->back();
    	}

    	if($request->hasFile('avatar')){
    		$images = $request->avatar;

    		$fileImages = time(). $images->getClientOriginalName();

    		$avatar = $images->move('images',$fileImages);
    	}else{
    		$avatar = '';
    	}
    	
    	$user = new User;
    	$result = $user->addUser($name, $email, bcrypt($password), $avatar, $level, $active);
        if($result == true){
            return redirect()->route('getListUser');
        }

    }

    public function getListUser(){
        $user = new User;
        $data = $user->getAllUser();
        return view('admin/users/index',compact('data'));
    }

    public function deleteUser($id){
        $user = new User;
        $result =  $user->deleteUser($id);

        if($result == true){
            return redirect()->route('getListUser');
        }
    }

    public function editUser($id){
        $user = new User;
        $data = $user->getOneUser($id);


        return view('admin/users/edit',compact('data'));
    }

    public function setEditUser(Request $rq){
       $id = $rq->id;
       $name = $rq->name;
       $email = $rq->email;
       $level = $rq->level;
       $active = $rq->active;

       $user = User::find($id);
       $user->name = $name;
       $user->email = $email;
       $user->level = $level;
       $user->active = $active;
       if($rq->hasFile('avatar')){

            $images = $request->avatar;

            $fileImages = time(). $images->getClientOriginalName();

            $avatar = $images->move('images',$fileImages);

            $user->avatar = $avatar;
       }

       if($user->save()){
        return redirect()->route('getListUser');
       }
    }

    public function selectData(){
        $user = new User;
        $data = $user->getUser($_GET['t']);
       return view('admin/users/data',compact('data'));
    }

    public function searchData(){
        $user = new User;
        $data = $user->research($_GET['t']);
       return view('admin/users/data',compact('data'));


    }

    public function getAddSlide(){
      return view('admin/slide/add');
    }

    public function setAddSlide(SlideRequest $request){
      $name = $request->name;
      $link = $request->link;
      $image = $request->image;
      $descripton = $request->descripton;
      $display = $request->display;

      $display = ($display == 1) ? '1' : '0';
      if($request->hasFile('image')){

        $avatar = time().$image->getClientOriginalName();
        $avatar = $image->move('images',$avatar);
      }

      $slide = new Slide;
      $result =  $slide->add($name, $link, $avatar, $descripton, $display);
      if($result == 1){
        return redirect()->route('getListSlide');
      }

    }

    public function getListSlide(){
      $slide = new Slide;
      $data = $slide->getAllSlide();
      return view('admin/slide/index',compact('data'));
    }

    public function deleteSlide($id){
      $slide = new Slide;
      if($slide->deleteSlide($id)){
        return redirect()->route('getListSlide');
      }
    }

    public function getEditSlide($id){
      $slide = new Slide;
      $data = $slide->getOneSlide($id);
      return view('admin/slide/edit',compact('data'));
    }

    public function setEditSlide(Request $request){
      $id = $request->id;
      $name = $request->name;
      $link = $request->link;
      
      $display = $request->display;
      $descripton = $request->descripton;
      $image = '';
      if($request->hasFile('image')){
        $image = $request->image;
        $nameimage = time().$image->getClientOriginalName();

        $image = $image->move('images',$nameimage);
      }

       $display = ($display == 1) ? '1' : '0';

      $slide = new Slide;
      $result = $slide->editSlide($id, $name, $link, $image, $display, $descripton);

      if($result == true){
        return redirect()->route('getListSlide');
      }
    }

    public function selectSlide(){
      $slide = new Slide;
      $data = $slide->getLimitSlide($_GET['t']);

      return view('admin/slide/data',compact('data'));

      //return $data;
    }

    public function searchSlide(){
      $slide = new Slide;
      $data = $slide->searchSlide($_GET['t']);
      return view('admin/slide/data',compact('data'));
    }

   
}
