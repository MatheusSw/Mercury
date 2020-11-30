<?php

namespace Database\Factories;

use App\Models\Server;
use App\Models\ServerType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Server::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'identifier' => $this->faker->lexify(str_repeat('?', 20)),
            'description' => $this->faker->text,
            'type' => ServerType::all(),
        ];
    }
}
