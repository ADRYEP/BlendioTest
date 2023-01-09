<?php

namespace Tests\Feature;

use App\Console\Commands\OperationsCommand;
use App\Services\MathService;
use Tests\TestCase;

class OperationsCommandTest extends TestCase
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

    public function test_operation_command_returns_error_for_invalid_operation(){
        
        $this->artisan('operations 1 2 something')
            ->expectsOutput('Invalid operation');

    }

    public function test_operation_command_returns_substract_operation_result(){    

        $this->artisan('operations 2 1 substract')
            ->expectsOutput('result = 1');

    }

    public function test_operation_command_returns_multiply_operation_result(){    
              
        $this->artisan('operations 4 5 multiply')
            ->expectsOutput('result = 20');

    }

    public function test_operation_command_returns_divide_operation_result(){    
              
        $this->artisan('operations 4 2 divide')
            ->expectsOutput('result = 2');

    }

    public function test_operation_command_returns_add_operation_result(){    
              
        $this->artisan('operations 1 2 add')
            ->expectsOutput('result = 3');

    }
}
