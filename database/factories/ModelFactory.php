<?php

namespace zoparga\ModelStatus\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use zoparga\ModelStatus\ModelStatus;

class ModelFactory extends Factory
{
    protected $model = ModelStatus::class;


    public function definition()
    {
        return [
            'model_statuseable_id' => 1,
            'model_statuseable_type' => 'App\Models\User',
            'type' => 'main address',
            'country' => 'Hungary',
            'zip' => '1010',
            'city' => 'Budapest',
            'street' => 'Fő utca 1.',
            'address_longitude' => '40.0000',
            'address_latitude' => '40.0000',
        ];
    }
}
