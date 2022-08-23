<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Service::count() == 0) {
            Service::create([
                'name' => 'Book Writing'
            ]);
            Service::create([
                'name' => 'Book Publishing'
            ]);
            Service::create([
                'name' => 'Book Marketing'
            ]);
            Service::create([
                'name' => 'Book Formating'
            ]);
            Service::create([
                'name' => 'Video Book Trailers'
            ]);
            Service::create([
                'name' => 'Social Media Marketing'
            ]);
            Service::create([
                'name' => 'Interactive E-Books'
            ]);
            Service::create([
                'name' => 'Creative Writing'
            ]);
            Service::create([
                'name' => 'Press Release Writing'
            ]);
            Service::create([
                'name' => 'Editing & ProofReading'
            ]);
            Service::create([
                'name' => 'Book Cover Design'
            ]);
            Service::create([
                'name' => 'Amazon Marketing'
            ]);
            Service::create([
                'name' => 'SEO Writing'
            ]);
            Service::create([
                'name' => 'Audio Books'
            ]);
        }
    }
}
