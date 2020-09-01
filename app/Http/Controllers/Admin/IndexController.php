<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\News;
use App\User;
use DB, Storage;
use Auth;


class IndexController extends Controller
{
    function index(){
        $news = News::query()->paginate(5);
        return view('admin.index')->with('news',$news);
    }

    function users(Request $request, User $user){
        if($request->isMethod('post')){
            dd($request);
        }
        $usersList = $user->all()->whereNotIn('id', [Auth::user()->id]); 
        return view('admin.users_list')->with('usersList', $usersList);
    }

    private function saveNews($request, $news){
        $url = null;
        if ($request->file('image')) {
            $path = Storage::putFile('public/images', $request->file('image'));
            $url = Storage::url($path);
        }
        $news->image = $url;
        $this->validate($request,News::rules(), [], News::attrName());
        $news->fill($request->all());
        $news->save();
    }

    function create(Request $request, Category $category, News $news){
        if($request->isMethod('post')){
            $this->saveNews($request, $news);
            return redirect()->route('admin.index')->with('success', 'Новость успешно добавлена!');
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
    function destroyUser(User $user){
        $user->delete();
        return redirect()->route('admin.users')->with('success', 'Пользователь уничтожен!');
    }
    function delete(News $news){
        $news->delete();
        return redirect()->route('admin.index')->with('success', 'Новость успешно удалена!');
    }

    function update(Request $request, News $news){  
        $this->saveNews($request, $news);
        return redirect()->route('admin.index')->with('success', 'Новость успешно изменена!');        
    }
}
