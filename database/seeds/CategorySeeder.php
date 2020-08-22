<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insertGetId(
            [
                [
                    "title" => "Спорт",
                    "slug" => "sport"
                ],
                [
                    "title" => "Политика",
                    "slug" => "politic"
                ],
                [
                    "title" => "Экономика",
                    "slug" => "economic"
                ]
            ]
        );
    }
}
