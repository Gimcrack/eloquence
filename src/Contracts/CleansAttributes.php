<?php

namespace Ingenious\Eloquence\Contracts;

interface CleansAttributes
{
    public static function getColumnListing();
    public function getDirty();
}
