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
        DB::table('category')->insert(
            [
                [
                    "id" => 1,
                    "title" => "Спорт",
                    "slug" => "sport"
                ],
                [
                    "id" => 2,
                    "title" => "Политика",
                    "slug" => "politic"
                ],
                [
                    "id" => 3,
                    "title" => "Экономика",
                    "slug" => "economic"
                ]
            ]
        );
    }
}
