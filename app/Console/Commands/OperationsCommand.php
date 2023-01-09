<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\MathService;

class OperationsCommand extends Command
{


    public function __construct(private MathService $mathService)
    {
        parent::__construct();
        $this->mathService = $mathService;
        
    }

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'operations {operatorA} {operatorB} {operation}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Performs a mathematical operation';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $operations = [
            'add' => 'add',
            'substract' => 'substract',
            'multiply' => 'multiply',
            'divide' => 'divide',
        ];

        $operatorA = (int) $this->argument('operatorA');
        $operatorB = (int) $this->argument('operatorB');
        $operation = $this->argument('operation');

        if (!array_key_exists($operation, $operations)) {
            $this->error('Invalid operation');
            return command::FAILURE;
        }

        $method = $operations[$operation];
        $result = $this->mathService->$method($operatorA, $operatorB);
        
        $this->info('result = ' . $result);
        return command::SUCCESS;
        
    }
}
