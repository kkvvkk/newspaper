<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($a = 0; $a < 20; $a++) {
            $ids = array();
            $count = rand(1,5);
            if ($count == 5) {
                $ids = [1, 2, 3, 4, 5];
            } else {
                for ($i = 0; $i < $count; $i++) {
                    $number = 1;
                    while (in_array($number, $ids)) {
                        $number = rand(2,5);
                    }
                    array_push($ids, $number);
                }
            }
            $tags = Tag::WhereIn('id', $ids)->get();
            Article::factory()
                ->hasAttached($tags)
                ->create();
        }
        
    }
}
