<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class TestDatabaseConnection extends Command
{
    protected $signature = 'test-database-connection';

    protected $description = 'Test the database connection';

    public function handle()
    {
        try {
            DB::connection()->getPdo();
            $this->info('Database connection successful.');
        } catch (\Exception $e) {
            $this->error('Unable to connect to the database: ' . $e->getMessage());
            exit(1);
        }
    }
}
