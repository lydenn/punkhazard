<?php

namespace Lydenn\Punkhazard\Commands;

use Illuminate\Console\Command;

class PunkhazardCommand extends Command
{
    public $signature = 'punkhazard';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
