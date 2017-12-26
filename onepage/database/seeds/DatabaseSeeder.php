<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //faker使う。普通に使う場合と同じ
     /* $this->call(UsersTableSeeder::class); */
     $this->call(NovelsTableSeeder::class);
    }
}
