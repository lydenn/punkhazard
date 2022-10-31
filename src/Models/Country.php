<?php

namespace Lydenn\Punkhazard\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function fakeName()
    {
        return 'Thailand';
    }

    protected static function newFactory()
    {
        return \Lydenn\Punkhazard\Database\Factories\CountryFactory::new();
    }
}
