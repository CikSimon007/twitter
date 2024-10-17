<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index() {

       /*  $post = new Post([
            'content' => 'test Lorem ipsum',
            'likes' => 15,
        ]);
        $post -> save(); */

        // toto je krajsi zapis toho hore:

       /*  Post::create([
            'content' => 'test Lorem ipsum',
            'likes' => 15,
        ]); */
       

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


        return view(
            'dashboard',
            [
                "users" => $users,
                "posts" => Post::orderBy('created_at', 'DESC')->get(),
            ]);
    }
}
