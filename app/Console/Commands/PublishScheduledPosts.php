<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Post;

class PublishScheduledPosts extends Command
{
    protected $signature = 'posts:publish-scheduled';
    protected $description = 'Publish scheduled posts when their publish date arrives';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $updatedPosts = Post::where('status', 'scheduled')
            ->where('published_at', '<=', now())
            ->update(['status' => 'published']);

        $this->info("Updated {$updatedPosts} posts.");
    }
}
