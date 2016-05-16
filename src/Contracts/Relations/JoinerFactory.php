<?php

namespace Ingenious\Eloquence\Contracts\Relations;

use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Model;

interface JoinerFactory
{
    /**
     * Create new joiner instance.
     *
     * @param  \Illuminate\Database\Query\Builder $query
     * @return \Ingenious\Eloquence\Contracts\Relations\Joiner
     */
    public static function make($query, Model $model = null);
}
