<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class DepartmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Department::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $department_name =[
            'Software',
            'Accounting',
            'Research',
            'Sales',
            'Operation',
            'HR',
            'Hardware',
            'Management'
        ];
        return [
            'name'=>Arr::random($department_name)
        ];
    }
}
