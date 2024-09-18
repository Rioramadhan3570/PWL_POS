<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {

        $user = UserModel::create([
            'username' => 'manager15',
            'nama' => 'Manager15',
            'password' => hash::make('12345'),
            'level_id' => 2,
        ],
    );
    $user->username = 'manager16';

    $user->save();

    $user->wasChanged();
    $user->wasChanged('username');
    $user->wasChanged(['username', 'level_id']);
    $user->wasChanged(['nama']);
    dd($user->wasChanged(['nama', 'username']));
    }
}