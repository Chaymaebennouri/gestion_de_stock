<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;
class articleController extends Controller
{
    public function index()
    {
        $articles=article::orderby('id','DESC')->get();
        return view('articles.index',compact('tasks'));
    }
}
