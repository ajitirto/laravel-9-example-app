<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    // tanpa API 
    public function index()
    {
        $client = new Client();
        $url = "https://api.github.com/users/ajitirto/repos";
        $method = 'GET';
        $option = ['auth'=>['user','pass']];

        $response =  $client->request($method, $url, $option);
        // $responseBody = $response->getBody;
        // dd($response->headers);
        // dd($response->getStatusCode);
        // return view('github.without-api', compact('response'));
    }

    // Pakai APi 
}
