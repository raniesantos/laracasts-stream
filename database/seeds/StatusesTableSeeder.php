<?php

use Illuminate\Database\Seeder;
use App\Status;
use Carbon\Carbon;

class StatusesTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('statuses')->truncate();

		$statuses = [
			'We are good.',
			'How about another.',
			'Add a new status.',
			'asdfasd.',
			'Add a new status.',
			'As I type.',
		];

		foreach($statuses as $key => $statusBody){
			$timePosted = Carbon::now()->subDays(count($statuses) - 1 - $key);

			Status::create([
				'user_id' => 1,
				'body' => $statusBody,
				'created_at' => $timePosted,
				'updated_at' => $timePosted,
			]);
		}

	}
}
