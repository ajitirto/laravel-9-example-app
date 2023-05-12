<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class GuzzleController extends Controller
{
    public function index()
    {
        // bealajar guzzle untuk get api
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://httpbin.org',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
        $clientGithub = new Client(['base_uri' => 'https://api.github.com/repos/ajitirto']);
        $response = $clientGithub->request('GET', '/');
       
        $res = $client->request('GET', 'https://api.github.com/user', [
            'auth' => ['user', 'pass']
        ]);
        // dd($clientFoo);
        dd($response);
    }
}
