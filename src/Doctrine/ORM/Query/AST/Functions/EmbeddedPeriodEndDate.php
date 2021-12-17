<?php

declare(strict_types=1);

namespace Andante\PeriodBundle\Doctrine\ORM\Query\AST\Functions;

class EmbeddedPeriodEndDate extends AbstractEmbeddedPeriodFunction
{
    public const NAME = 'EMBEDDED_PERIOD_END_DATE';

    protected function getPropertyName(): string
    {
        return 'endDate';
    }
}
