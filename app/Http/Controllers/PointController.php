<?php

namespace App\Http\Controllers;

use App\Models\Auth\User\User;
use App\Models\Point\Point;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class PointController extends Controller
{
    public function get_point(Request $request, $token) {
        //$user = $request->user();
        return Point::where('user_token', $token)->first();
        //return $user->id; 
    }

    public function user_update(Request $request, $token) {
        $user = $request->user();
        $user->user_token = $token;
        $user->save();
        return 'success';
    }

    public function update_point(Request $request, $token) {
        $point = Point::where('user_token', $token)->first();
        
        
        if (!$point) {
            $point = new Point();
            $point->user_token = $token;
            $point->point = 0;
            $point->save();
        }
        Point::where('user_token', $token)->increment('point', 1);
        return Point::where('user_token', $token)->first();
    }
}
