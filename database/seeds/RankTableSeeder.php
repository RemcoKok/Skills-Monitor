<?php

use Illuminate\Database\Seeder;
use App\Rank;

class RankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rank::create(['rankName' =>'student']); 
        Rank::create(['rankName' =>'admin']); 
        Rank::create(['rankName' =>'gast']); 
        Rank::create(['rankName' =>'docent']); 
    }
}
