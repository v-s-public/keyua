<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use EmployeeService;

class Employee extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'employee:can {employee} {possibility}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check employee possibility';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        echo EmployeeService::checkPossibility($this->argument('employee'), $this->argument('possibility'));
    }
}
