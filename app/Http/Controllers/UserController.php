<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DataValidationRequest;

class UserController extends Controller
{
    public function index() {

        return view('index');

    }

    public function login() {

        return view('login');

    }

    public function info(DataValidationRequest $request) {

        $userData = $request->all();
        $data = $request->validated();
        session()->put('name',$data['name']);
        session()->put('lastName',$data['lastName']);
        return view('info',compact('userData'));

    }

    public function logout() {

        session()->flush();
        return redirect()->route('login');

    }
}

