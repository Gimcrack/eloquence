<?php

namespace Ingenious\Eloquence\Searchable;

use Ingenious\Eloquence\Contracts\Searchable\ParserFactory as FactoryContract;

class ParserFactory implements FactoryContract
{
    /**
     * Create new parser instance.
     *
     * @param  integer $weight
     * @param  string  $wildcard
     * @return \Ingenious\Eloquence\Contracts\Searchable\Parser
     */
    public static function make($weight = 1, $wildcard = '*')
    {
        return new Parser($weight, $wildcard);
    }
}
