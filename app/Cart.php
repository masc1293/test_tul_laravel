<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{   
    const STATUS_PENDING = 'Pendiente';
    const STATUS_COMPLETED = 'Completado';

    protected $fillable = [
        'status'
    ];

    protected $attributes = [
        'status' => self::STATUS_PENDING
    ];
}
