<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;


class HomeController extends Controller
{
    public function getData()
    {
        $response = Curl::to('https://jsonplaceholder.typicode.com/users/1')
                            ->get();


        dd($response);
    }
}