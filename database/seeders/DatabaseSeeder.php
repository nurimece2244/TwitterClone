<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Database\seeders\TweetsSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        $this->call([TweetsSeeder::class]);
      
    }
}
