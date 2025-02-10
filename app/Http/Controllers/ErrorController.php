<?php

namespace App\Http\Controllers;

class ErrorController extends Controller
{
    public function show()
    {
        return view('errors.notfound', ['title' => 'Resourse Not Found', 'message' => 'The resource you are looking for could not be found.']);
    }
}
