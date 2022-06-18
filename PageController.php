<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    Public function index(){
        echo "Hi! Welcome To Laravel";
    }

    Public function about(){
        echo "Abdulilah Ali AL-shabany>"; 
        echo "2041720203";
    }

    Public function articles($id){
        echo "This is Article Pages with ID: " .$id;
    }
}
