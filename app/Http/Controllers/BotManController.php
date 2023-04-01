<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    public function handle()
    {
        $botman=app("botman");

        $botman->hears("{message}",function($botman,$message)
        {
            if($message=="hi")
            {
                $this->askName($botman);
            }
            else
            {
                $botman->reply("kindly write hi to start the talk");
            }
        });

        $botman->listen();
    }

    public function askName($botman)
    {
        $botman->ask("Hello what is your name", function(Answer $answer)
        {
            $name=$answer->getText();
            $this->say("Nice to meet you".$name);
        });
    }
}
