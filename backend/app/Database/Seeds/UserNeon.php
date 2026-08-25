<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

/**
 * Seeds products table with 5 full meals and 5 pastries.
 * @property \CodeIgniter\Database\BaseConnection $db Provided by parent Seeder at runtime
 * @method void call(string $class) Inherited helper (not always detected by static analyzers)
 */

class UserNeon extends Seeder
{

    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $rows = [
            // Full Meals
            [
                'product_name' => 'Neon Ramen Core',
                'desc' => 'Iridescent broth, photonic noodles, reactive garnish.',
                'price' => 14.50,
                'img' => 'https://picsum.photos/seed/meal_ramen_core/600/400',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_name' => 'Cyber Sushi Array',
                'desc' => 'Adaptive plant protein nigiri with chroma rice.',
                'price' => 22.00,
                'img' => 'https://picsum.photos/seed/meal_sushi_array/600/400',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_name' => 'Quantum Bao Stack',
                'desc' => 'Steam-fused bao trio with flavor-shift fillings.',
                'price' => 13.00,
                'img' => 'https://picsum.photos/seed/meal_bao_stack/600/400',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_name' => 'Synthwave Salad Plate',
                'desc' => 'Prismatic microgreens and ionized citrus mist.',
                'price' => 12.00,
                'img' => 'https://picsum.photos/seed/meal_salad_plate/600/400',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_name' => 'Holo Noodle Matrix',
                'desc' => 'Transparent starch lattice absorbing neon oils.',
                'price' => 16.75,
                'img' => 'https://picsum.photos/seed/meal_noodle_matrix/600/400',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Pastries / Sweets
            [
                'product_name' => 'Glitch Dessert Cube',
                'desc' => 'Fractal mousse layers & spectral glaze.',
                'price' => 11.00,
                'img' => 'https://picsum.photos/seed/pastry_glitch_cube/600/400',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_name' => 'Photon Tea Jelly',
                'desc' => 'Bioluminescent tea gel with thermal bloom.',
                'price' => 6.00,
                'img' => 'https://picsum.photos/seed/pastry_photon_jelly/600/400',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_name' => 'Neon Macaron Array',
                'desc' => 'Electro-pigmented shells & adaptive fillings.',
                'price' => 9.50,
                'img' => 'https://picsum.photos/seed/pastry_macaron_array/600/400',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_name' => 'Cyber Citrus Tart',
                'desc' => 'Reactive glaze over nano-crust & charged curd.',
                'price' => 8.25,
                'img' => 'https://picsum.photos/seed/pastry_citrus_tart/600/400',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_name' => 'Lunar Drip Cake',
                'desc' => 'Gravity-warp drip with vapor infusion.',
                'price' => 10.75,
                'img' => 'https://picsum.photos/seed/pastry_lunar_drip/600/400',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        // Use provided connection if available, else connect explicitly
        $db = isset($this->db) ? $this->db : \Config\Database::connect();
        $db->table('products')->insertBatch($rows);
    }
}
