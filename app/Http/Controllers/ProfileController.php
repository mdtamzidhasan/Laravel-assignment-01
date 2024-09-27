<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProfileController extends Controller
{
    function index(Request $request)
    {
        $name="Donal Trump";
        $age="75";
        $id=$request->id;

        $data=[
            'id'=>$id,
            'name'=>$name,
            'age'=>$age
        ];

        $cookie_name = 'access_token';
        $cookie_value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        return response()->json($data,200)
            ->Cookie($cookie_name, $cookie_value, $minutes, $path, $domain, $secure, $httpOnly);
    }
}
