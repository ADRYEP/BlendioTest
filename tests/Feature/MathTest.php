<?php

namespace Tests\Feature;

use App\Http\Controllers\MathController;
use App\Services\MathService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MathTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_perform_operation_returns_error_for_invalid_operation(){

        $mathController = new MathController(new MathService);

        $response = $mathController->performOperation('something', 1, 1);

        $this->assertEquals(400, $response->getStatusCode());
        $this->assertJsonStringEqualsJsonString('{"error":"Invalid operation"}', $response->getContent());
    }

    public function test_perform_operation_returns_add_operation_result(){
        $mathController = new MathController(new MathService);

        $response = $mathController->performOperation('add', 2, 3);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertJsonStringEqualsJsonString('{"result":5}', $response->getContent());
    }

    public function test_perform_operation_returns_substract_operation_result(){
        $mathController = new MathController(new MathService);

        $response = $mathController->performOperation('substract', 3, 2);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertJsonStringEqualsJsonString('{"result":1}', $response->getContent());
    }

    public function test_perform_operation_returns_multiply_operation_result(){
        $mathController = new MathController(new MathService);

        $response = $mathController->performOperation('multiply', 3, 2);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertJsonStringEqualsJsonString('{"result":6}', $response->getContent());
    }

    

    public function test_perform_operation_returns_divide_operation_result(){
        $mathController = new MathController(new MathService);

        $response = $mathController->performOperation('divide', 8, 2);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertJsonStringEqualsJsonString('{"result":4}', $response->getContent());
    }
}
