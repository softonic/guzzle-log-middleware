<?php

declare(strict_types=1);

namespace GuzzleLogMiddleware\Handler;

use GuzzleLogMiddleware\Handler\LogLevelStrategy\FixedStrategy;
use GuzzleLogMiddleware\Handler\LogLevelStrategy\LogLevelStrategyInterface;

abstract class AbstractHandler implements HandlerInterface
{
    /**
     * @var LogLevelStrategyInterface
     */
    protected $logLevelStrategy;

    protected function getDefaultStrategy(): LogLevelStrategyInterface
    {
        return new FixedStrategy();
    }
}
