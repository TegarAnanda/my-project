<?php

namespace App\Http\Controllers;

use App\Thread;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

use App\Http\Requests;

class CHomePage extends Controller
{

    public function home()
    {
        $client = new Client([
            'base_uri' => env('BASE_API_URL')
        ]);
        $response = $client->request('GET', 'thread/show');
        $response2 = json_decode($response->getBody());
//        dd($response2->value);
        return view ('pages.index', [
            'data' => $response2->value
        ]);
    }
}
