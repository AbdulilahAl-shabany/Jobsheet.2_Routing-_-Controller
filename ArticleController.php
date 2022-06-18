<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    Public function articles($id){
        echo "This is Article Pages with ID: " .$id;
    }
}