<?php

namespace App\Http\Controllers;
use App\News;
use App\Category;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index(){
        return view('news.news_list')->with('news',News::all());
    }

    function show(News $news){
        return view('news.news_item')->with('news',$news);
    }
}
