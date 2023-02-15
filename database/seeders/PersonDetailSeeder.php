<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\PersonDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Person::all()->each(function ($person) {

            $personDetail = PersonDetail::factory()->make();
            $personDetail->person()->associate($person);
            $personDetail->save();
            
        });
    }
}
