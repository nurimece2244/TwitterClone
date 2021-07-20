<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tweets;
use Illuminate\Database\Eloquent\Model;


class TweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(tweets::class, 15)->make();

        

    }
}