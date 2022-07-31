<?php

namespace App\Console\Commands;

use App\Mail\BirthDayWish;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendBirthDayWish extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:birthdaywish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command For Sending Birthday Wish to User';


    public function handle()
    {
        //user your database query based on your needs
        $users = [
            [
                'id' => 1,
                'name' => 'Tanvir',
                'email' => 'tanvir59@outlook.com',
                'dob' => '1997-05-07',
            ],
            [
                'id' => 2,
                'name' => 'shouts.dev',
                'email' => 'tahmedhera@gmail.com',
                'dob' => '2005-05-07',
            ],
        ];

        foreach ($users as $user) {
            //write your own logics
            Mail::to($user['email'])->send(new BirthDayWish($user));
        }

        return 0;
    }
}
