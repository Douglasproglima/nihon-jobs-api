<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
	public function index()
	{
		$jobs = Job::with('company')->get();
		return response()->json($jobs);
	}
}
