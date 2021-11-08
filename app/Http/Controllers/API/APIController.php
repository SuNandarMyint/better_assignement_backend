<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class APIController extends Controller
{
    // Get Employee List
	public function getEmployeeList(Request $request)
	{
		try {
			return response()->json([
				'status' => 'success',
				'data' => $this->employee_service->getEmployeeList($request),
			], 200);
		} catch (Exception $e) {
			Log::error($e->getMessage());
			abort(500);
		}
	}
	// Employee Detail
	public function detailEmployee(Request $request)
	{
		try {
			return response()->json([
				'status' => 'success',
				'data' => $this->employee_service->detailEmployee($request),
			], 200);
		} catch (Exception $e) {
			Log::error($e->getMessage());
			abort(500);
		}
	}
}
