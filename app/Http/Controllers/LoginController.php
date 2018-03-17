<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Service\UserService;

class LoginController extends Controller
{

//    /**
//     * @var UserService
//     */
//    protected $userService;
//
//    /**
//     * LoginController constructor.
//     * @param UserService $userService
//     */
//    public function __construct(UserService $userService)
//    {
//        $this->userService = $userService;
//    }
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }


    public function saveRegister(Request $request)
    {
        $userData = [
            'name' => $request->get('email'),
            'password' => MD5($request->get('password')),
        ];

        echo '<pre>';
        print_r($userData);
//
//        $this->userService->createUser($userData);
    }


    public function verifyUser(Request $request)
    {
        echo '<pre>';
        print_r($request->all());
    }
}