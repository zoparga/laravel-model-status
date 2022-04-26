<?php

namespace zoparga\ModelStatus\Commands;

use Illuminate\Console\Command;

class ModelStatusCommand extends Command
{
    public $signature = 'laravel-model-status';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
