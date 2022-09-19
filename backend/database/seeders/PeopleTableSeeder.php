<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' => 1,
            'name' => 'test',
            'mail' => 'test',
            'age' => 20,
        ];
        DB::table('people')->insert($param);

        $param = [
            'id' => 2,
            'name' => '佐藤　太郎',
            'mail' => 'sato@gmail.com',
            'age' => 33,
        ];
        DB::table('people')->insert($param);

        $param = [
            'id' => 3,
            'name' => '中山　ナナミ',
            'mail' => 'nanana@gmail.com',
            'age' => 28,
        ];
        DB::table('people')->insert($param);
    }

}
