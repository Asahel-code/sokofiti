<?php

namespace Database\Factories;

use App\Models\Ads;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ads::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ad_name = $this->faker->unique()->words($nb = 2, $asText = true);
        $slug = Str::slug($ad_name);
        return [
            'name' => $ad_name,
            'slug' => $slug,
            'description' => $this->faker->text(500),
            'ad_type' => $this->faker->text(5),
            'location' => $this->faker->text(10),
            'price' => $this->faker->numberBetween(10, 500),
            'Ad_image_0' => 'img' . $this->faker->unique()->numberBetween(1, 14) . '.jpg',
            'Ad_image_1' => 'img' . $this->faker->numberBetween(1, 7) . '.jpg',
            'contactname' => $this->faker->text(10),
            'contactemail' => $this->faker->safeEmail,
            'contactnumber' => '0763513633',
            'count' => 0,
            'category_id' => $this->faker->numberBetween(1, 8),
            'price_id' => $this->faker->numberBetween(1, 2)
        ];
    }
}
