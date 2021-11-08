<?php

namespace App\Services;

use App\Models\Employee;

class EmployeeService
{
    //Get Employee List
	public function getEmployeeList($request) {
		$employees = Employee::leftJoin('departments', 'departments.id', '=', 'employees.department_id')
				->leftJoin('designations','designations.id','=','employees.designation_id')
				->select('employees.id','employees.name','phone_no','email','departments.name as department_name', 'designations.name as designation_name')
				->get();
		return $employees;
	}

	// Employee Detial
	public function detailEmployee($request)
	{
		$employee=Employee::where('id',$request->id)
				->with('department:id,name')
				->with('designation:id,name')
				->first();
		return $employee;
	}
}
