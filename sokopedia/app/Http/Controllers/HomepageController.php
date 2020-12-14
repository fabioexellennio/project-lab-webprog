<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomepageController extends Controller
{
    public function homepage()
    {
        $user = Auth::user();
        if (!empty($user)) {
            $data = [
                'role' => $user->role,
            ];
            return view('homepage')->with($data);
        }
        return view('homepage');
    }
}
