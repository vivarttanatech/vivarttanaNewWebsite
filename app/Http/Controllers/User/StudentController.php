<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\StudentUsers;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function StudentListing(){
        $StudentData = User::paginate(10);
        //dd($StudentData);
        return view('crm.admin.users.students.StudentListingView',compact('StudentData'));
    }
    public function StudentAdd(){
        return view('crm.admin.users.students.StudentManageView');
    }
    public function StudentSave(){}
    public function StudentEdit($student_id){
        $StudentData = User::where('id',$student_id)->first();
        //dd($StudentData);
        return view('crm.admin.users.students.StudentManageView',$StudentData);
    }
    public function StudentUpdate(){}
    public function StudentDelete(){}
}
