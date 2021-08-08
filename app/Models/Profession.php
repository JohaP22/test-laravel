<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    public $timestamps = false;
    public function isAdmin()
    {
        return $this->description == 'Developer FrontEnd';
    }
    public static function findByDescrip($name)
    {
        return static::where('description', $name)->get();
    }
}
