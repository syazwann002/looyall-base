<?php

namespace Looyall\Looyall\Commands;

use Illuminate\Console\Command;

class LooyallCommand extends Command
{
    public $signature = 'looyall';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
