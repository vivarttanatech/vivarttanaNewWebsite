<?php 

namespace App\Repository\Eloquent;

use App\Models\User;
use App\Repository\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface{
    public function __contruct(User $users){
        $this->users = $users;
    }

    public function all(){
        $UserData = User::all();
        return $UserData;
    }
}