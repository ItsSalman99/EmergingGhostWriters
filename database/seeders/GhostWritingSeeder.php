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
                'name' => 'Fiction',
                'description' => 'Our fiction writers will polish your book and find the best words to convey your thoughts and imagination.'
            ]);
            GhostWritingServices::create([
                'name' => 'Beauty GhostWriting',
                'description' => 'Will you soon introduce a new beauty product? It is a comparison of ten accessories that help with beauty. It is challenging to stay knowledgeable, given the growth of this business and the monthly introduction of new items. But not for our ghostwriters for beauty. The team at Emerging Ghostwriter includes writers for beauty blogs and magazines that have a thorough understanding of hair, makeup, skincare, and fashion.'
            ]);
            GhostWritingServices::create([
                'name' => 'Business GhostWriting',
                'description' => 'Writing a book may not be your cup of tea if you run a business. However, if you want to write a book using your ideas, our business ghostwriter services can assist you. Allow us to elevate your book project and have one of our expert ghostwriters produce a book that stands out among the best business books currently available.'
            ]);
            GhostWritingServices::create([
                'name' => 'Fantasy GhostWriting',
                'description' => 'A perfectionist is always meticulous, and a fantasy fiction writer should share this trait. A variety of skilled fantasy ghostwriters with a strong command of language and grammar are available from Emerging Ghostwriter. They are quite knowledgeable in writing fantasy fiction and conducting research. They consequently interpret and offer tales that reflect the message and information ingrained in its core.'
            ]);
            GhostWritingServices::create([
                'name' => 'Medical GhostWriting',
                'description' => 'The subject is difficult, just like the field of work. So, what to do when you want to acquire dependable and modern medical information? The solution is as easy as hiring Emerging Ghostwriter. We collaborate with some incredible content writers and ex-medical consultants to support research-based medical ghostwriting.'
            ]);
            GhostWritingServices::create([
                'name' => 'ScreenPlay GhostWriting',
                'description' => 'There are some components that are necessary when developing a screenplay. However, only industry professionals are aware of that. A superb mix of seasoned and up-and-coming screenplay ghostwriters may be found at Emerging Ghostwriter. They collaborate to offer clients outstanding screenplay ghostwriter services. They are aware of all the components that go into the best screenplays.'
            ]);
            GhostWritingServices::create([
                'name' => 'NonFiction GhostWriting',
                'description' => "For more than ten years, we have offered nonfiction copywriting services. As a result, our writers are seasoned professionals. We fully admit that our ghostwriting services are remarkable and make this claim with full confidence. You won't need to stress about it, thanks to our nonfiction ghostwriter. Your core idea is all that our ghostwriters need. We'll make it into a book that can be published."
            ]);
            GhostWritingServices::create([
                'name' => 'Blog GhostWriting',
                'description' => 'Ghostwriters Avenue provides expert blog post writing services with a staff that understands how to raise brand awareness, generate leads, boost sales, and engage customers. We take pride in providing the greatest level of ability and expertise while performing ghost blogging services. Since many websites and businesses are unable to manage blogs on their own, our ghostwriters help them with their writing assignments.'
            ]);
        }
    }
}
