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
        $news = News::query()->paginate(5);
        return view('admin.index')->with('news',$news);
    }
    function test1(){
        return view('admin.test1');
    }
    function test2(){
        return view('admin.test2');
    }
    function create(Request $request, Category $category, News $news){
        if($request->isMethod('post')){
            $url = null;
            if ($request->file('image')) {
                $path = Storage::putFile('public/images', $request->file('image'));
                $url = Storage::url($path);
            }
            $news->image = $url;

            $this->validate($request,News::rules(), [], News::attrName());
            $news->fill($request->all());
            $news->save();
            return redirect()->route('Admin.Index')->with('success', 'Новость успешно добавлена!');
        }

        return view('admin.addNews', [
            'categories' => $category->all(),
            'news' => $news
        ]);
    }
    function edit(Category $category, News $news){
        return view('admin.addNews', [
            'categories' => $category->all(),
            'news' => $news
        ]);
    }
    function delete(News $news){
        $news->delete();
        return redirect()->route('Admin.Index')->with('success', 'Новость успешно удалена!');
    }
    function update(Request $request, News $news){  
        $url = null;
        if ($request->file('image')) {
            $path = Storage::putFile('public/images', $request->file('image'));
            $url = Storage::url($path);
        }
        $news->image = $url;
        $this->validate($request,News::rules(), [], News::attrName());
        $news->fill($request->all());
        $news->save();
        return redirect()->route('Admin.Index')->with('success', 'Новость успешно изменена!');        
    }
}
