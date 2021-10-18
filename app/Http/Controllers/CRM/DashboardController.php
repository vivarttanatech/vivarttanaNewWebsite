<?php

namespace App\Http\Controllers\CRM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function studentDashboardIndex(){
        return view('crm.student.dashboard.home');
    }
}
