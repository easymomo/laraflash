<?php

namespace Coderello\Laraflash\Tests;

use Coderello\Laraflash\Providers\LaraflashServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class AbstractTestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            LaraflashServiceProvider::class,
        ];
    }
}
