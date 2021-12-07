<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    protected $model = Article::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->text($maxNbChars = 60) ;
        return [
            'title' => $title,
            'text' => $this->faker->text(10000),
            'slug' => Str::slug($title, '-'),
            'photo_location' => '600',
            'min_photo_location' => '150',
            'created_at' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
        ];
    }
}
