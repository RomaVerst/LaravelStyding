<?php

namespace App;
use App\Category;
use File;

class News 
{
    public static function getNews(){
        return json_decode(File::get('News.json'), true);
    }
    public static function getNewsId($id){
        foreach(static::getNews() as $news){
            if($news['id'] == $id){
                return $news;
            }
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
