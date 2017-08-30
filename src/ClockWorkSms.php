<?php

namespace Seymur\Clockworksms;

use GuzzleHttp\Client;

class Clockworksms
{
    public function send($key, $mobile, $content)
    {
        $url = "http://api.clockworksms.com/http/send.aspx?key=" . $key . "&to=" . $mobile . "&content=" . $content;
        $client = new Client();

        $request = new \GuzzleHttp\Psr7\Request('GET', $url);
        $promise = $client->sendAsync($request)->then(function ($response) {
            echo 'Result: ' . $response->getBody();
        });
        $promise->wait();

    }

    public function balance($key)
    {
        $url = "http://api.clockworksms.com/http/balance?key=" . $key;
        $client = new Client();
        $request = new \GuzzleHttp\Psr7\Request('GET', $url);
        $promise = $client->sendAsync($request)->then(function ($response) {
            echo $response->getBody();
        });
        $promise->wait();
    }
}