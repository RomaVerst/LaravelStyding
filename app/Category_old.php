<?php

namespace App;
use File;


class Category 
{
    public static function getCategories(){
        return json_decode(File::get('Categories.json'), true);
    }
    public static function getCategoryBySlug($slug){
        foreach(static::getCategories() as $category){
            if ($category['slug'] == $slug){
                return $category;
            }
        }
    }
}
