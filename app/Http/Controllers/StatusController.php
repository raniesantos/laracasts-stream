<?php

namespace App\Http\Controllers;

use App\Status;
use App\User;
use Illuminate\Http\Request;

class StatusController extends Controller
{
	public function index()
	{
		return Status::with('user')->latest()->get();
	}

	public function store(Request $request)
	{
		// middleware

		// validation
		$this->validate(request(), [
			'body' => 'required',
		]);

		// create status
		$status = User::find(1)
			->statuses()
			->create($request->only(['body']));

		// return with user
		return $status->load('user');
	}
}
