<?php

namespace App\Http\Controllers;
use App\News;
use App\Category;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index(){
        return view('news_list')->with('news', News::getNews());
    }
    function category($slug){
        return view('category', [
            'category' => Category::getCategoryBySlug($slug),
            'news' => News::getNewsByCategory($slug)
        ]);
    }
    function category_list(){
        return view('category_list')->with('category', Category::getCategories());
    }
    function show($id){
        return view('news_item')->with('news', News::getNewsId($id));
    }
}
