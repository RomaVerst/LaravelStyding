<?php

namespace App;
use App\Category;

class News 
{
   private static $news = [
       1 => [
           'id' => 1,
           'title' => 'Новость 1',
           'text' => 'Текст новости 1',
           'category_id' => 1,
           'isprivate' => false
       ],
       2 => [
            'id' => 2,
            'title' => 'Новость 2',
            'text' => 'Текст новости 2',
            'category_id' => 2,
            'isprivate' => false
       ],
        3 => [
            'id' => 3,
            'title' => 'Новость 3',
            'text' => 'Текст новости 3',
            'category_id' => 1,
            'isprivate' => true
        ]
    ];
    public static function getNews(){
        return static::$news;
    }
    public static function getNewsId($id){
        if(isset(static::$news[$id])){
            return static::$news[$id];
        }
        else{
            return null;
        }
    }
    public static function getNewsByCategory($slug){
        $category = [];
        $category = Category::getCategoryBySlug($slug);
        $news_list = [];
        foreach(static::getNews() as $news){
            if($news['category_id'] == $category['id']){
                $news_list[] = $news;
            }
        }
        return $news_list;
    }
}
