<?php

namespace Database\Factories;

use App\Models\Designation;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

class DesignationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Designation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $designation_name =[
            'Web Developer',
            'Android Developer',
            'Software Engineer',
            'Clerk',
            'Data Entry Clerk',
            'Sales Manager',
            'Marketing Manager',
            'Digital Marketing Manager'
        ];
        return [
            'name'=>Arr::random($designation_name)
        ];
    }
}
