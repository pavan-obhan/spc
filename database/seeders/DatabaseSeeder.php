<?php

namespace Database\Seeders;

use App\Models\Inspection;
use App\Models\InspectionItem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        InspectionItem::factory(20)->create();
        Inspection::factory(20)->create();
    }
}
