<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function __invoke(Request $request)
    {
        return $this->page('top');
    }
}
