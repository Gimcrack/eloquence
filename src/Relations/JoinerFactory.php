<?php

namespace Ingenious\Eloquence\Relations;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Ingenious\Eloquence\Contracts\Relations\JoinerFactory as FactoryContract;

class JoinerFactory implements FactoryContract
{
    /**
     * Create new joiner instance.
     *
     * @param  \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder $query
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @return \Ingenious\Eloquence\Relations\Joiner
     */
    public static function make($query, Model $model = null)
    {
        if ($query instanceof EloquentBuilder) {
            $model = $query->getModel();
            $query = $query->getQuery();
        }

        return new Joiner($query, $model);
    }
}
