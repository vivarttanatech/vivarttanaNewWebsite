<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function TrainerListing(){
        $TrainerData = User::paginate(10);
        //dd($StudentData);
        return view('crm.admin.users.trainers.TrainerListingView',compact('TrainerData'));
    }
    public function TrainerAdd(){
        return view('crm.admin.users.trainers.TrainerManageView');
    }
    public function TrainerSave(){}
    public function TrainerEdit($trainer_id){
        $TrainerData = User::where('id',$trainer_id)->first();
        //dd($StudentData);
        return view('crm.admin.users.students.StudentManageView',$TrainerData);
    }
    public function TrainerUpdate(){}
    public function TrainerDelete(){}
}
