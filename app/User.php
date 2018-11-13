<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function addUser($name, $email, $password, $avatar, $level, $active){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->avatar = $avatar;
        $this->level = $level;
        $this->active = $active;
        if($this->save()){
            return true;
        }
    }

    public function getAllUser(){
        $data = User::paginate(10);
        return $data;
    }

    public function deleteUser($id){
        $user = User::find($id);
        if($user->delete()){
            return true;
        }
    }

    public function getOneUser($id){
        $data = User::find($id)->toArray();
        return $data;
    }

    public function getUser($total){
        $data = User::paginate($total);
        return $data;
    }

    public function research($sr){
        $data = User::where('name','like','%'.$sr.'%')->get();
        return $data;
    }

}
