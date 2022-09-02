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
                'name' => 'Book Writing',
                'description' => "Do you find it tough to express yourself? Do you struggle to understand a book's plot now that you have one? You have a long-overdue unfinished novel; are you too busy to finish it and publish it? We'll take care of the lot while providing you with our excellent book writing services."
            ]);
            Service::create([
                'name' => 'Book Publishing',
                'description' => "A manuscript may have taken hundreds of thousands of writer’s years to complete, but for some strange reason, book publishing houses reject them. At Emerging Ghostwriter, we offer solutions for all aspiring writers to deal with the many facets of the". '"weird reasons"'. "holding them back from realizing their goals. As experienced book publishers, we assist aspiring authors in establishing themselves and gaining their merit recognition."
            ]);
            Service::create([
                'name' => 'Book Marketing',
                'description' => "An online presence is crucial in the current era of digitization. The Emerging Ghostwriter assists you in going big in the digital arena for yourself and your brand by utilizing the talents of top marketing gurus in the field. Effective and tried-and-true methods for guaranteeing outcomes are provided with the aid of the most practical book marketing strategy strategies."
            ]);
            Service::create([
                'name' => 'Book Formating',
                'description' => "Have you become bored of staring at your word processor's white screen when formatting novels for Kindle? To finish writing your book has a peculiarly satisfying feeling. By being preoccupied with formatting, you risk ruining the high. Let's deal with the fright. We can complete it expertly and much more quickly than you can."
            ]);
            Service::create([
                'name' => 'Video Book Trailers',
                'description' => "We wisely use our priceless resource of talented writers to apply such ideas in book video trailers that heighten suspense and create a climax, leaving the audience hanging and forced to read the book to quench their thirst. Do you also want that for your book? Call us right away!"
            ]);
            Service::create([
                'name' => 'Social Media Marketing',
                'description' => "Are you looking for a successful plan to boost website traffic, attract new customers, and increase brand recognition for your business? Then you ought to utilize social media! View our social media marketing offerings to create a solid online presence. Contact us to get started."
            ]);
            Service::create([
                'name' => 'Interactive E-Books',
                'description' => "Emerging Ghostwriter is pleased to boast that it has more content than any other publisher, with more than 5,500 Interactive eBooks! Emerging Ghostwriter's Interactive eBooks contain many distinctive features that give students the access they desire and content that educators can rely on."
            ]);
            Service::create([
                'name' => 'Creative Writing',
                'description' => "To attract more customers to your internet business, we write everything we publish online to educate and educate audiences. However, it won't be achievable if your content isn't optimized and doesn't provide value to your audience. "
            ]);
            Service::create([
                'name' => 'Press Release Writing',
                'description' => "The possibilities are truly endless! If you have something chief to say, a press release can get you in front of broad distribution networks with captivating content, qualified authors, and fast delivery."
            ]);
            Service::create([
                'name' => 'Editing & ProofReading',
                'description' => "There is always room for improvement. However, you need a second view of your content before you can call it flawless to make it audience-focused, error-free, and almost perfect. Is it not?"
            ]);
            Service::create([
                'name' => 'Book Cover Design',
                'description' => "You'll need a book cover that persuades people to add your book to their shopping carts and proceed to the checkout. Fortunately, we can assist you there. Emerging Ghostwriter provides all cover designs."
            ]);
            Service::create([
                'name' => 'Amazon Marketing',
                'description' => "To put it bluntly, the Amazon Sponsored Products market is filled mainly by novices and weekend warriors. Vendors and experienced major Sellers play on AMS (Amazon Marketing Services)."
            ]);
            Service::create([
                'name' => 'SEO Writing',
                'description' => "Our expert SEO writers will help you outrank the competition and give your website the high rating it requires to attract more people with keyword-rich content!"
            ]);
            Service::create([
                'name' => 'Audio Books',
                'description' => "Are you prepared to convert your printed book into an audiobook? Emerging Ghostwriter is one of the top audiobook production companies offering audiobooks on demand. Our group of well-known voiceover professionals does an excellent job."
            ]);
        }
    }
}
