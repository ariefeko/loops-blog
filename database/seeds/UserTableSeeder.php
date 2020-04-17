<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create()->each(function($u) {
            $u->posts()
                ->saveMany(factory(Post::class, rand(1,3))->make())
                ->each(function($p){
                    $p->comments()->saveMany(factory(Comment::class, rand(1,3))->make());
                });
        });
    }
}
