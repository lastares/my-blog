<?php

namespace App\Console\Commands;

use App\Http\Controllers\Admin\BaseController;
use Illuminate\Console\Command;

class HistoryToday extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:historyToday';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create history today';

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
        BaseController::historyToday();
    }
}
