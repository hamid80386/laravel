<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
	public function index()
	{
		return view('task.index');
	}

	public function create( Request $request )
	{

	}

	public function delete( Task $task )
	{

	}
}
