<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    public function readerlistshow()
    {
        return view('backend.partials.reader-list');
    }
    public function subscribedreaderlistshow()
    {
        return view('backend.partials.subscribed-reader-list');
    }
}
