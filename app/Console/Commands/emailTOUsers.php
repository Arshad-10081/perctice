<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterUserEmail;
use App\Models\User;

class emailTOUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command used to genrate email to registerd users';

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
        $users = User::all();
        foreach($users as $user) 
        {
            Mail::to($user)->send(new RegisterUserEmail());
        }

        echo "success";
    }
}
