<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Post::factory()->create([
            [
                'user_id' => 1,
                'title' => 'Belajar Laravel untuk Pemula',
                'content' => 'Ini adalah konten dari postingan pertama.',
                'image' => 'posts/sample1.jpg',
                'status' => 'published',
                'published_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Membuat Blog dengan Laravel',
                'content' => 'Panduan lengkap membuat blog sederhana.',
                'image' => 'posts/sample2.jpg',
                'status' => 'draft',
                'published_at' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'title' => 'Optimasi Kinerja Laravel',
                'content' => 'Tips dan trik untuk meningkatkan performa aplikasi Laravel.',
                'image' => 'posts/sample3.jpg',
                'status' => 'scheduled',
                'published_at' => Carbon::now()->addDays(3),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
