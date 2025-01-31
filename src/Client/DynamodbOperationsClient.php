<?php

namespace Autoprotect\DynamodbODM\Client;

class DynamodbOperationsClient extends DynamoDBPDOClient implements DynamodbOperationsClientInterface
{
    /**
     * {@inheritDoc}
     */
    public function batchWriteItem(array $queryParams): array
    {
        return $this->dynamoDbClientSDK->batchWriteItem($queryParams)->toArray();
    }

    /**
     * {@inheritDoc}
     */
    public function query(array $queryParams): array
    {
        return $this->dynamoDbClientSDK->query($queryParams)->toArray()[self::ITEMS] ?? [];
    }

    /**
     * {@inheritDoc}
     */
    public function scan(array $queryParams): array
    {
        return $this->dynamoDbClientSDK->scan($queryParams)->toArray()[self::ITEMS] ?? [];
    }

    /**
     * @inheritDoc
     */
    public function transactWriteItems(array $queryParams): array
    {
        return $this->dynamoDbClientSDK->transactWriteItems($queryParams)->toArray()[self::ITEMS] ?? [];
    }
}
