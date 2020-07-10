<?php declare(strict_types=1);

namespace ElasticMigrations\Console;

use ElasticMigrations\Migrator;
use Illuminate\Console\Command;

class StatusCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'elastic:migrate:status';
    /**
     * @var string
     */
    protected $description = 'Show the status of each migration';
    /**
     * @var Migrator
     */
    private $migrator;

    public function __construct(Migrator $migrator)
    {
        parent::__construct();

        $this->migrator = $migrator;
    }

    /**
     * @return int
     */
    public function handle()
    {
        $this->migrator->setOutput($this->output);

        if (!$this->migrator->isReady()) {
            return 1;
        }

        $this->migrator->showStatus();

        return 0;
    }
}
