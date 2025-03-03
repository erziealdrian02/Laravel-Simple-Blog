<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Post;

class PublishScheduledPosts extends Command
{
    protected $signature = 'posts:publish-scheduled';
    protected $description = 'Update scheduled posts to published if their time has come';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $now = Carbon::now();

        $posts = Post::where('status', 'scheduled')
            ->where('published_at', '<=', $now)
            ->update(['status' => 'published']);

        $this->info("Updated {$posts} scheduled posts to published.");
    }
}
