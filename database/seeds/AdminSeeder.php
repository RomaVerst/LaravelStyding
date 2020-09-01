<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert($this->getData());
    }
    private function getData(){
        return [
            'name' => 'admin',
            'is_admin' => true,
            'email' => 'admin@admin.ru',
            'email_verified_at' => now(),
            'password' =>   Hash::make('123'),
            'remember_token' => Str::random(10)
        ];
    }
}
