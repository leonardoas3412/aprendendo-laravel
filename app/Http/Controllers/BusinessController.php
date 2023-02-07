<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\business;

class BusinessController extends Controller
{
   public function index(){
        $business = business::create([
            'title'=>'jon snow',
            'body'=>'jon@snow.com',
        ]);
        dd($business);
   }
}
