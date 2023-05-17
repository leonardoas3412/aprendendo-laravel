<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
class UserController extends Controller
{
    public function show($user){
     //   return 'Usuario '.$user; 
    $users = User::find(1);

   // $users->load('team');
     $users->team()->detach([3]);
     $users->load('team');
   
    dd($users);
    //  dd($users);
    // $user = User::find($user);
    //  $users =  $user->posts()->create([
    //     'title'=>'terceiro post','cover'=>'letter','body'=>'isso é um post','tag'=>'bicho doido','author'=>'Leonardo'
    //    ]);
    //    dd($users);
    }
}
