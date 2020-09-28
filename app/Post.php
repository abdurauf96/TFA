<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Support\Facades\Session;
class Post extends Model
{
    use Translatable;
    protected $translatable=['title', 'excerpt', 'body'];

    public function getlocale()
    {
        if (Session::has('locale')) {
            $locale=Session::get('locale');
        }else{
            $locale='ru';
        };
        return $locale;
    }
}
