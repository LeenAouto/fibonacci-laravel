<?php

namespace App\Http\Controllers;

use App\Helpers\FibonacciHelper;
use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    /**
     * Display a Fibonacci sequence.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $length = $request->input('length');

        $sequence = FibonacciHelper::fibonacciSequence($length);
        return response()->json($sequence);
    }
}