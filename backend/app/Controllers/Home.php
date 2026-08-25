<?php

namespace App\Controllers;

use function view;

class Home extends BaseController
{
    public function index(): string
    {
        // Render NeonBites landing page manually (keeps independence from global helper during analysis)
        $data = [
            'title' => 'Home',
            'siteName' => 'NeonBites',
        ];
        extract($data, EXTR_OVERWRITE);
        ob_start();
        include __DIR__ . '/../Views/landing/neonbites.php';
        return (string) ob_get_clean();
    }

    public function features(): string
    {
        // Standalone features page (reuses components/features.php)
        $data = [
            'title' => 'Features',
            'siteName' => 'NeonBites',
        ];
        extract($data, EXTR_OVERWRITE);
        ob_start();
        include __DIR__ . '/../Views/landing/features.php';
        return (string) ob_get_clean();
    }

    public function menu(): string
    {
        $data = [
            'title' => 'Menu',
            'siteName' => 'NeonBites',
            'products' => [
                [
                    'name' => 'Neon Ramen',
                    'desc' => 'Glowing infused broth with bioluminescent garnish.',
                    'price' => 14.5,
                    'image' => 'https://picsum.photos/seed/ramen/400/300',
                    'tag' => 'signature',
                ],
                [
                    'name' => 'Cyber Sushi Set',
                    'desc' => 'Nano-cut plant proteins & chromatic rice.',
                    'price' => 22,
                    'image' => 'https://picsum.photos/seed/sushi/400/300',
                    'tag' => 'popular',
                ],
                [
                    'name' => 'Synthwave Salad',
                    'desc' => 'Prismatic microgreens + ionized citrus mist.',
                    'price' => 12,
                    'image' => 'https://picsum.photos/seed/salad/400/300',
                    'tag' => 'vegan',
                ],
                [
                    'name' => 'Quantum Bao',
                    'desc' => 'Soft neon-dyed dough with adaptive fillings.',
                    'price' => 9,
                    'image' => 'https://picsum.photos/seed/bao/400/300',
                    'tag' => 'new',
                ],
                [
                    'name' => 'Glitch Dessert Cube',
                    'desc' => 'Fractal-layer mousse & reactive glaze.',
                    'price' => 11,
                    'image' => 'https://picsum.photos/seed/dessert/400/300',
                    'tag' => 'sweet',
                ],
                [
                    'name' => 'Photon Tea',
                    'desc' => 'Iridescent herbal infusion with thermal bloom.',
                    'price' => 6,
                    'image' => 'https://picsum.photos/seed/tea/400/300',
                    'tag' => 'drink',
                ],
            ],
        ];
        extract($data, EXTR_OVERWRITE);
        ob_start();
        include __DIR__ . '/../Views/landing/menu.php';
        return (string) ob_get_clean();
    }

    public function contact(): string
    {
        $data = [
            'title' => 'Contact',
            'siteName' => 'NeonBites',
        ];
        extract($data, EXTR_OVERWRITE);
        ob_start();
        include __DIR__ . '/../Views/landing/contact.php';
        return (string) ob_get_clean();
    }

    public function getStarted(): string
    {
        $data = [
            'title' => 'Get Started',
            'siteName' => 'NeonBites',
        ];
        extract($data, EXTR_OVERWRITE);
        ob_start();
        include __DIR__ . '/../Views/landing/get_started.php';
        return (string) ob_get_clean();
    }
}
