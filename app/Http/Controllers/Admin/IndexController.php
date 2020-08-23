<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\News;
use DB, Storage;


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
                $url = null;
                if ($request->file('image')) {
                    $path = Storage::putFile('public/images', $request->file('image'));
                    $url = Storage::url($path);
                }
                DB::table('news')->insert([
                    'title' => $request->title,
                    'category_id' => $request->category_id,
                    'text' => $request->text,
                    'image' => $url,
                    'isprivate' => isset($request->isprivate)
                ]);
                return redirect()->route('Admin.Create')->with('status', 'success');;
            } else{
                $request->flash();
            
                return redirect()->route('Admin.Create')->with('status', 'error');
            }
        }
        return view('admin.addNews')->with('categories', Category::getCategories());
    }
}
