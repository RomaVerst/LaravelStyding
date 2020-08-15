<?php

namespace App\Http\Controllers;
use App\News;
use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function category($slug){
        return view('news.category', [
            'category' => Category::getCategoryBySlug($slug),
            'news' => News::getNewsByCategory($slug)
        ]);
    }
    function category_list(){
        return view('news.category_list')->with('category', Category::getCategories());
    }
}
