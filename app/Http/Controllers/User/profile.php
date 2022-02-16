<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profile extends Controller
{
    public function __invoke()
    {
        return view(view:'driver.Registerdriver');
    }
}
