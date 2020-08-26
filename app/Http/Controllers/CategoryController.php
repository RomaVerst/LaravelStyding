<?php

namespace App\Http\Controllers;
use App\News;
use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    function category($slug){
        $category =  Category::query()->where('slug', $slug)->get();
        return view('news.category', [
            'category' => $category->first(),
            'news' => News::query()
                ->where('category_id', $category->first()->id)
                ->get()
        ]);
    }
    function category_list(){
        return view('news.category_list')->with('category', Category::query()->get());
    }
}
