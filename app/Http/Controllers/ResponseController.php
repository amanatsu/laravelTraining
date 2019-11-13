<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ResponseController extends Controller
{
    //
    public function index(Request $request, Response $response)
    {
        return view('content/response', compact('request', 'response'));
    }
}
