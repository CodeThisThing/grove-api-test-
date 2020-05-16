<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Api\Main;

class MainController extends Controller
{
    private $main;

    public function __construct(Main $main)
    {
        $this->main = $main;
    }

    public function index()
    {
    $articles=$this->main->getArticles('/articles');
        //return view('welcome',compact('articles'));
        return view('Main/main',compact('articles'));
    }
    public function createArticle(){

    }
}
