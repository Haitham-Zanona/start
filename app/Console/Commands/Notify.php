<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyEmail;


class Notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email notify for all users everyday';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //$user = User::select('email')->get();
        $emails = User::pluck('email')->toArray();
        $data = ['title'=> 'programming', 'body'=> 'php'];
        foreach ($emails as $email) {
            Mail::To($email)->send(new NotifyEmail($data));

        }
    }
}
