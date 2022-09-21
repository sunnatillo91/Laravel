<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company1 extends Model
{
    use HasFactory;

    //table - companies

    protected $table = 'companies';

    //custom primary key

    protected $primaryKey = 'id';

    // incrementing

    public $incrementing = false;       //autoincrementingga zarurat bo'lmasa

    // timestamps

    public $timestamps = false;      // timestampga zarurat bo'lmasa

    // default values

    protected $attributes = [
        'active' => true
    ];
}

    //protected - ma'lum bir modelga tegishli bo'lgan xususiyatlar belgilanadi

    //public - umumiy bo'lgan xususiyatlar belgilanadi