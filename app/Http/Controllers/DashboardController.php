<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $users = [
            [
                "name" => "Mario",
                "age" => "25"
            ],
            [
                "name" => "Lugi",
                "age" => "22"
            ],
            [
                "name" => "Igor",
                "age" => "17"
            ],
        ];


        return view('dashboard',["users" => $users,]);
    }
}
