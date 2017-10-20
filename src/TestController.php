<?php

namespace Hideyatsu\Test;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function upper($str='')
    {
        $str = strtoupper($str);
        return view('test::result', compact('str'));
    }

    public function lower($str='')
    {
        $str = strtolower($str);
        return view('test::result', compact('str'));
    }
}
