<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Worker extends Model
{
    use Translatable;
    protected $translatable=['position','experience', 'info', 'success', 'year'];
}
