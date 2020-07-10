<?php declare(strict_types=1);

use ElasticMigrations\Facades\Index;
use ElasticMigrations\MigrationInterface;
use Elasticsearch\Client;

final class CreateTestIndex implements MigrationInterface
{
    /**
     * @var Client
     */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function up(): void
    {
        Index::create('test');

        $this->client->indices()->clearCache([
            'index' => 'test',
        ]);
    }

    public function down(): void
    {
        Index::drop('test');
    }
}
