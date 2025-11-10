<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServicePage;

class ServicePageSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'SEO Agency NJ',
                'description' => 'Expertos en posicionamiento web local e internacional. 
                Optimizamos tu presencia digital para atraer más clientes y aumentar tus conversiones.',

                'hero_title' => 'ARE YOU SPENDING TOO MUCH ON DIGITAL',
                'hero_highlight_text' => 'ADVERTISING AND STILL NOT SEEING RESULTS?',
                'hero_subtitle' => 'Each Click Costs A Fortune; You Can Pay Between $15 And $250 Per Click, And They Don\'t Even Convert Into Sales.',
                'hero_button_text' => '👉 GET A FREE AUDIT',
                'hero_button_link' => '#free-consultation',
                'hero_video_url' => 'https://digitalmarketingnewjersey.us/movie/digital-marketing-new-jersey-seo-agency-nj-movie-ceo--romulo-vargas-betancourt-NewJerseySEO.webm',
                'hero_image' => '/storage/hero-images/hero-bg.svg',

                'cards_title' => "We've experienced that pain. And that's why we chose the organic and sustainable path: SEO.",
                'cards_subtitle' => 'There\'s another way to grow without relying on ads',
                'cards_description' => 'At Digital Marketing New Jersey, we help you:',
                'card1_image' => 'https://digitalmarketingnewjersey.us/images/digital-marketing-new-jersey-seo-agency-nj-appear-on-google-click.png',
                'card1_title' => 'Appear on Google without paying per click',
                'card1_highlight' => 'paying per click',
                'card2_image' => 'https://digitalmarketingnewjersey.us/images/digital-marketing-new-jersey-seo-agency-nj-generta-traffic-leads-every-day-naturally.png',
                'card2_title' => 'Generate traffic and leads every day naturally',
                'card2_highlight' => 'leads every day naturally',
                'card3_image' => 'https://digitalmarketingnewjersey.us/images/digital-marketing-new-jersey-seo-agency-nj-gain-real-long-term-visibility.png',
                'card3_title' => 'Gain real, long-term visibility',
                'card3_highlight' => 'long-term visibility',

                'is_active' => true,
            ],
            [
                'title' => 'Social Media Marketing',
                'description' => 'Gestionamos tus redes sociales para aumentar tu alcance.',
            ],
            [
                'title' => 'Content Creation',
                'description' => 'Creamos contenido profesional y atractivo para tu marca.',
            ],
        ];

        foreach ($services as $service) {
            $sp = new ServicePage($service);
            $sp->save();
        }
    }
}
