<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Success extends Model
{
    use Translatable;
    protected $translatable=['title', 'body'];
}
