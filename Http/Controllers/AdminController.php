<?php

namespace App\Http\Controllers;

use App\models\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
    	return view ('layouts.master');
    }
}
