<?php

namespace Autoprotect\DynamodbODM\Repository\Exception;

use Autoprotect\DynamodbODM\Exception\DynamoDbAdapterException;

/**
 * Class EntityNotFoundException
 *
 * @package Autoprotect\DynamodbODM\Repository\Exception
 */
class NothingFoundException extends DynamoDbAdapterException
{
    protected const DEFAULT_EXCEPTION_MESSAGE = 'Nothing was found';
    protected const DEFAULT_EXCEPTION_CODE = 404;
}
