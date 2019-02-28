<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrangAdminController extends Controller
{
    //
    function view(){
        return view('admin.master');
    }

    function viewGioiThieu(){
        return view('admin.GioiThieu');

    }
}
