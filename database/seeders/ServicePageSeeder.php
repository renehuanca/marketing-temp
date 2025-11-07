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
                'description' => 'Expertos en posicionamiento web local e internacional.',
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
