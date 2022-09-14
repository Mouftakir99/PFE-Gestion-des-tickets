<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            'Open', 'Closed'
        ];

        Status::query()->updateOrCreate([ 'name'  => 'Open'],[  'color' => '#02ea2a' ]);
        Status::query()->updateOrCreate([ 'name'  => 'Closed'],['color' => '#db0b0b']);

    }
}
