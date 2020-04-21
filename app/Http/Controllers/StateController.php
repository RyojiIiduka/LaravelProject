<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class StateController extends Controller
{
    public function Cookie()
    {
        return response()
            ->view('state.view')
            ->cookie('app_title2', 'laravel', 60 * 24 * 30);
    }
}