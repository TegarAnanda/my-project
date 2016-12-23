<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;

use App\Http\Requests;

class CHomePage extends Controller
{
    public function index()
    {
        $threads = Thread::get();

        return view('pages.index')->with('threads', $threads);
    }
}
