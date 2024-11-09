<?php

namespace Database\Seeders;

use App\Models\Category;
use DateTime;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Object Oriented Programming',
                'alias' => 'oop',
                'created_at' => (new DateTime())->format('Y-m-d H:i:s'),
                'updated_at' => (new DateTime())->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Programming',
                'alias' => 'programming',
                'created_at' => (new DateTime())->format('Y-m-d H:i:s'),
                'updated_at' => (new DateTime())->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'PHP',
                'alias' => 'php',
                'created_at' => (new DateTime())->format('Y-m-d H:i:s'),
                'updated_at' => (new DateTime())->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Java',
                'alias' => 'java',
                'created_at' => (new DateTime())->format('Y-m-d H:i:s'),
                'updated_at' => (new DateTime())->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Python',
                'alias' => 'python',
                'created_at' => (new DateTime())->format('Y-m-d H:i:s'),
                'updated_at' => (new DateTime())->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Web Frontend',
                'alias' => 'web_frontend',
                'created_at' => (new DateTime())->format('Y-m-d H:i:s'),
                'updated_at' => (new DateTime())->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Miscellaneous',
                'alias' => 'misc',
                'created_at' => (new DateTime())->format('Y-m-d H:i:s'),
                'updated_at' => (new DateTime())->format('Y-m-d H:i:s'),
            ],
        ];

        Category::query()->insert($categories);
    }
}
