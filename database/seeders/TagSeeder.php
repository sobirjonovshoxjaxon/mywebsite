<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $tags = [

           [ 'tag' => 'HOUSE'],
           [ 'tag' => 'OFFICE'],
           [ 'tag' => 'BUILDING'],
           ['tag' => 'LAND'],
            ['tag' => 'TABLE'],
            ['tag' => 'INTERIOR'],
           ['tag' => 'EXTERIOR'],
            ['tag' => 'INDUSTRIAL'],
       ];



        foreach($tags as $tag){

            Tag::create($tag);
        }
    }
}
