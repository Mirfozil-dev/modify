<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Category;
use App\Models\Template;

class TemplateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Template::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'category_id' => Category::factory(),
            'link' => $this->faker->word,
            'img_preview' => $this->faker->word,
            'img_full' => $this->faker->word,
        ];
    }
}
