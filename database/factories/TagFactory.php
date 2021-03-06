<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tag;
use Illuminate\Support\Str;

class TagFactory extends Factory
{
    protected $model = Tag::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name =  $this->faker->name();
        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
        ];
    }
}
