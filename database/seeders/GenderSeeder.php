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
                'gender_desc' => 'Male'
            ]
        );
        Gender::create(
            [
                'gender_desc' => 'Female'
            ]
        );
    }
}
