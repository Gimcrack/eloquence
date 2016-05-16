<?php

namespace Ingenious\Eloquence;

use Ingenious\Eloquence\Contracts\CleansAttributes;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Ingenious\Eloquence\Contracts\Validable as ValidableContract;

class Model extends Eloquent implements CleansAttributes, ValidableContract
{
    use Eloquence, Validable;
}
