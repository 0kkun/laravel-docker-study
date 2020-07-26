<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Person;

class MyJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    public function __construct(Person $person)
    {
        $this->person = $person;
    }


    // ジョブの中心部分。ここに実行した処理を記述する
    public function handle()
    {
        $sufix = '[Job]';

        if (strpos($this->person->username, $sufix)) {
            $this->person->username = str_replace($sufix, '', $this->person->username);
        } else {
            $this->person->username .= $sufix;
        }

        $this->person->save();
    }
}
