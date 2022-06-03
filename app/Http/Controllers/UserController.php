<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController
{
    public function index()
    {
        return 'index';
    }

    public function show(User $user)
    {
        return 'user name : ' . $user->name;
    }

    public function change()
    {
        return 'change';
    }
}
