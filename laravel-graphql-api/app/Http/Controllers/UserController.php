<?php

namespace App\Http\Controllers;


use App\User;

class UserController extends Controller
{
    function create() {
        $user = new User();
        $user->name = 'hoge';
        $user->email = 'hoge@email.com';
        $user->password = 'password';
        $result = $user->save();
        if ($result){
            return 'success';
        } else {
            return 'failure';
        }
    }
}