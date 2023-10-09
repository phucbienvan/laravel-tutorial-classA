<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 
    {
        return 'xin chao';
    }

    public function show($id) 
    {
        return $id;
    }

    // public function create(Request $request)
    // {
    //     $request->image = 
    // }
}
