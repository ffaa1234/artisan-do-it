<?php

namespace Ffaa1234\ArtisanDoIt\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Throwable;

class ArtisanDoItCommand extends Command
{
    public $signature = 'do:it';

    public $description = 'My command';

    public function handle()
    {
        try {
            $client = new Client();
            $res = $client->get('https://type.fit/api/quotes', ['timeout' => '10']);
            $data = json_decode($res->getBody()->getContents());
            $all = count($data);
            $order = rand(0, $all - 1);

            $this->alert($data[$order]->text);
            $this->question($data[$order]->author ?? 'Unknown');
        } catch (Throwable $e) {
            $this->error('Something went wrong, please try again');
        }

        return;
    }
}
