<?php

namespace App\GraphQL\Mutations;

use App\Models\Employee;

class UpdateEmployeeMutation
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $employee = Employee::where('id', $args['employee_id'])->first();
        if($employee) {
            $employee->name=isset($args['name'])?$args['name']:$employee->name;
            $employee->phone_no=isset($args['phone_no'])?$args['phone_no']:$employee->phone_no;
            $employee->email=isset($args['email'])?$args['email']:$employee->email;
            $employee->designation_id=isset($args['designation_id'])?$args['designation_id']:$employee->designation_id;
            $employee->department_id=isset($args['department_id'])?$args['department_id']:$employee->department_id;
            $update_success=$employee->update();
            if($update_success){
                return "Employee Updated Successfully.";
            }else{
                return "Failure";
            }
        } else {
            return "There is no data with the given employee ID.";
        }
    }
}
