<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class deleteRecentRegisterUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'recentusers:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is used to delete recent register users';

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
     * @return int
     */
    public function handle()
    {
        User::truncate();
        
        echo "done";
    }
}
