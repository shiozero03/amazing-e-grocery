<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gender;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Gender::create(
            [
                'gender_id' => 1,
                'gender_desc' => 'Male'
            ]
        );
        Gender::create(
            [
                'gender_id' => 2,
                'gender_desc' => 'Female'
            ]
        );
    }
}
