<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Author;
use App\AuthorDetail;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 20; $i++){
            $author = new Author();
            $author->name = $faker->firstName();
            $author->lastname = $faker->lastName();
            $author->email = $faker->email();
            $author->save();

            $authorDetail = new AuthorDetail();
            $authorDetail->bio = $faker->text();
            $authorDetail->website = $faker->url();
            $authorDetail->pic = 'http://picsum.photos/seed/' . rand(0, 1000) . '/200/300';
            $author->detail()->save($authorDetail);

            for($x=0; $x < rand(2,5); $x++){
                $post = new Post();
                $post->title = $faker->text(30);
                $post->body = $faker->text(2000);
                $author->posts()->save($post);
            }
        }
    }
}
