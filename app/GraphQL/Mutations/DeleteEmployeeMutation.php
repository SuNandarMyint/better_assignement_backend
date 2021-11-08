<?php

namespace App\GraphQL\Mutations;

use App\Models\Employee;

class DeleteEmployeeMutation
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $employee = Employee::where('id', $args['employee_id'])->first();
        if($employee) {
            $delete_success=$employee->delete();
            if($delete_success){
                return "Employee Deleted Successfully.";
            }else{
                return "Failure";
            }
        }else {
            return "There is no data with the given employee ID.";
        }
    }
}
