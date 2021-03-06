<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index(Request $request): string
    {

        $out = 'out';

        $fun = function () use ($out) {
            return 'closure-' . $out;
        };

        $fun1 = fn() => 'short closure-' . $out;

        //dd($fun(), $fun1());
        return 'TestController.index';
    }
}
