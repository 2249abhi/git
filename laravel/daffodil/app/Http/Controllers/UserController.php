<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\User\UserFacade as User;

class UserController extends Controller
{
    //
    public function getUserDetails($userId)
    {
        $userName = User::getUser($userId);
        echo $userName;
    }
}
