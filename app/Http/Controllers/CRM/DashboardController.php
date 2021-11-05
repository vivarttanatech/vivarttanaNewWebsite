<?php

namespace App\Http\Controllers\CRM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function studentDashboardIndex(){
        return view('crm.student.dashboard.home');
    }

    public function adminDashboardIndex(){
        return view('crm.admin.dashboard.home');
    }

    public function ClassListing(){
        return view('crm.admin.classes.ClassListingView');
    }
    public function ClassAdd(){}
    public function ClassSave(){}
    public function ClassEdit(){}
    public function ClassUpdate(){}
    public function ClassDelete(){}
    public function ClassHistory(){}
    
    public function CourseListing(){}
    public function CourseAdd(){}
    public function CourseSave(){}
    public function CourseEdit(){}
    public function CourseUpdate(){}
    public function CourseDelete(){}

    public function CurriculumListing(){}
    public function CurriculumAdd(){}
    public function CurriculumSave(){}
    public function CurriculumEdit(){}
    public function CurriculumUpdate(){}
    public function CurriculumDelete(){}

    public function CollegeListing(){}
    public function CollegeAdd(){}
    public function CollegeSave(){}
    public function CollegeEdit(){}
    public function CollegeUpdate(){}
    public function CollegeDelete(){}

    public function Settings(){}
    public function SettingsSave(){}

    
}
