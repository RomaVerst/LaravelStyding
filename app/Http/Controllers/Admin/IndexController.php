<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\News;
use File;


class IndexController extends Controller
{
    function index(){
        return view('admin.index');
    }
    function test1(){
        return view('admin.test1');
    }
    function test2(){
        return view('admin.test2');
    }
    function create(Request $request){
        if($request->isMethod('post')){
            if((!empty($request->title)) && (!empty($request->text))){
                $request->flash();
                $news = News::getNews();
                $id_added_News = count($news) + 1;
                $addedNews = $request->all();
                $addedNews = ["id" => $id_added_News] + $addedNews;
                if(!array_key_exists('isprivate', $addedNews)){
                    $addedNews += ['isprivate' => false];
                } else{
                    $addedNews['isprivate'] = true;
                }
                unset($addedNews["_token"]);
                $news[] = $addedNews;
                File::put('News.json', json_encode($news, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
                return redirect()->route('Admin.Create')->with('status', 'success');;
            } else{
                $request->flash();
            
                return redirect()->route('Admin.Create')->with('status', 'error');
            }
        }
        return view('admin.addNews')->with('categories', Category::getCategories());
    }
}
