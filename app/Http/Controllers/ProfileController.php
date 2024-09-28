<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index(Request $request, $id){
        $result = array(
            "id" => "$id",
            "name"=> "Donal Trump",
            "age"=> "75"
        );

        $cookie_name = 'access_token';
        $value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        return response($result)->cookie($cookie_name, $value, $minutes, $path, $domain, $secure, $httpOnly);

    }
}
