<?php

use Illuminate\Database\Seeder;

use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['tech', 'sport', 'health', 'food', 'gossip', 'lifestyle'];

        foreach ($tags as $tag){
            $tagDB = new Tag();
            $tagDB->name = $tag;
            $tagDB->save();
        }
    }
}
