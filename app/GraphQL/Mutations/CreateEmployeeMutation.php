<?php

namespace App\GraphQL\Mutations;

use App\Models\Employee;

class CreateEmployeeMutation
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {   
        $employee=new Employee();
        $employee->name=$args['name'];
        $employee->phone_no=$args['phone_no'];
        $employee->email=$args['email'];
        $employee->designation_id=$args['designation_id'];
        $employee->department_id=$args['department_id'];
        $save_success=$employee->save();
        if($save_success){
            return "Employee Created Successfully.";
        }else{
            return "Failure";
        }
    }
}
