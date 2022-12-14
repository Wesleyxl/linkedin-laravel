<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedController extends Controller
{

    public function index()
    {
        return response()->view('feed.index');
    }
}
