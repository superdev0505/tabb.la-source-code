<?php

namespace App\Http\Controllers\Admin;

use App\Models\Auth\Role\Role;
use App\Models\Auth\User\User;
use App\Models\Point\Point;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class PointsController extends Controller
{
	public function index(Request $request)
    {
    	$result = Point::leftJoin('users', 'users.user_token', '=', 'points.user_token')->get();
    	// var_dump($result);
    	// exit();
        return view('admin.points.index', ['points'=>$result]);
    }
}