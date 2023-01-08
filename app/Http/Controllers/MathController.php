<?php

namespace App\Http\Controllers;

use App\Services\MathService;
use Illuminate\Http\Request;

class MathController extends Controller
{
    public function __construct(private MathService $mathService)
    {
        $this->mathService = $mathService;
    }
}
