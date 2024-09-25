<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function page($view = null, $data = [], $mergeData = [])
    {
        return view("page/{$view}", $data, $mergeData);
    }
}
