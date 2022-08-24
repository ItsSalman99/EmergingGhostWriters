<?php

namespace Database\Seeders;

use App\Models\GhostWritingServices;
use Illuminate\Database\Seeder;

class GhostWritingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (GhostWritingServices::count() == 0) {
            GhostWritingServices::create([
                'name' => 'Fiction'
            ]);
            GhostWritingServices::create([
                'name' => 'Beauty GhostWriting'
            ]);
            GhostWritingServices::create([
                'name' => 'Business GhostWriting'
            ]);
            GhostWritingServices::create([
                'name' => 'Fantasy GhostWriting'
            ]);
            GhostWritingServices::create([
                'name' => 'Medical GhostWriting'
            ]);
            GhostWritingServices::create([
                'name' => 'ScreenPlay GhostWriting'
            ]);
            GhostWritingServices::create([
                'name' => 'NonFiction GhostWriting'
            ]);
            GhostWritingServices::create([
                'name' => 'Blog GhostWriting'
            ]);
        }
    }
}
