<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(string $id){
        $name = "Donal Trump";
        $age = "75";

        $data=array(
           "id"=>$id,
           "Name"=>$name,
           "Age"=>$age
        );

        $cookie=cookie(
            $name="access_token",
            $value="123-XYZ",
            $minutes=1,
            $path="/",
            $domain=$_SERVER["SERVER_NAME"],
            $secure=false,
            $httpOnly=true
        );
        

        return response()->json($data,200)->cookie($cookie);
    }
}
