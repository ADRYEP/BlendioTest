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

    public function performOperation($operation, $operatorA, $operatorB){

        $operations = [
            'add' => 'add',
            'substract' => 'substract',
            'multiply' => 'multiply',
            'divide' => 'divide',
        ];

        if (!array_key_exists($operation, $operations)) {
            return response()->json([
                'error' => 'Invalid operation'
            ], 400);
        }

        $method = $operations[$operation];
        $result = $this->mathService->$method($operatorA, $operatorB);

        return response()->json([
            'result' => $result
        ]);
    }

}
