<?php

namespace App;


class Category 
{
    private static $category = [
        1 => [
            'id'=> 1,
            'title' => 'Спорт',
            'slug' => 'sport'
        ],
        2 => [
            'id'=> 2,
            'title' => 'Политика',
            'slug' => 'politic'
        ],
        3=> [
            'id'=> 3,
            'title' => 'Экономика',
            'slug' => 'economic'
        ]
    ];
    public static function getCategories(){
        return static::$category;
    }
    public static function getCategoryBySlug($slug){
        foreach(static::getCategories() as $category){
            if ($category['slug'] == $slug){
                return $category;
            }
        }
    }
}
