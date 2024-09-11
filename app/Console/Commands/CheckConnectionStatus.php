<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;

class CheckConnectionStatus extends Command
{
    protected $signature = 'connection:status';
    protected $description = 'Check connection status to a given URL';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $url = "http://34.126.150.45:46100/";

        $client = new Client();

        try {
            $response = $client->request('GET', $url);
            $statusCode = $response->getStatusCode();

            if ($statusCode === 200) {
                $this->info('UP');
            } else {
                $this->error('DOWN');
            }
        } catch (\Exception $e) {
            $this->error('An error occurred: ' . $e->getMessage());
        }
    }
}
