<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegularRequest;

class DemoController extends Controller
{
    public function demo()
    {
        return view('demo');
    }
    public function regular(RegularRequest $request)
    {
        return $request->name;
    }
}
