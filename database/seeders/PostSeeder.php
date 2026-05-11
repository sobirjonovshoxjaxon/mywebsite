<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory()->count(15)->create();

        // Post::create([

        //     'title' => 'This is our title part',
        //     'image' => 'post-photos/spark.jpg',
        //     'short_content' => 'Hello my name is Sobirjonov Shoxjaxon',

        //     'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat mollitia consequatur excepturi sunt adipisci quasi ipsam ut blanditiis sit. Nobis, aperiam ducimus quibusdam, inventore atque cumque iusto magni error molestias deleniti fugiat! Dignissimos quidem facilis commodi possimus, laudantium suscipit consectetur rerum voluptates mollitia, ipsam ullam accusantium. Quae consequatur assumenda hic.',

        //     'user_type' => 'admin',
        //     'user_id' => 1,
        // ]);
    }
}
