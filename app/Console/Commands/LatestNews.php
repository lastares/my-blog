<?php

namespace App\Console\Commands;

use App\Http\Controllers\Home\IndexController;
use Illuminate\Console\Command;

class LatestNews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:news';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'CSDN latest 5 article';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        IndexController::news();
    }
}
