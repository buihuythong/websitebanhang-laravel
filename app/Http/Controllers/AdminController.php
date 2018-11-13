<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;

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

   
}