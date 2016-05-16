<?php

namespace Ingenious\Eloquence\Contracts;

interface AttributeBag
{
    public function set($key, $value);
    public function getValue($key);
}
