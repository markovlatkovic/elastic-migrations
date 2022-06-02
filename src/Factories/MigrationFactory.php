<?php declare(strict_types=1);

namespace Elastic\Migrations\Factories;

use Elastic\Migrations\Filesystem\MigrationFile;
use Elastic\Migrations\MigrationInterface;
use Illuminate\Support\Str;

class MigrationFactory
{
    public function makeFromFile(MigrationFile $file): MigrationInterface
    {
        require_once $file->getPath();

        $className = Str::studly(implode('_', array_slice(explode('_', $file->getName()), 4)));
        /** @var MigrationInterface $migration */
        $migration = resolve($className);

        return $migration;
    }
}
