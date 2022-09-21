<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    use HasFactory;
    //table - laboratories

    protected $table = 'laboratories';

    //custom primary key

    protected $primaryKey = 'id';

    // incrementing

   // public $incrementing = false;       //autoincrementingga zarurat bo'lmasa

    // timestamps

   // public $timestamps = false;      // timestampga zarurat bo'lmasa

    // default values

    protected $attributes = [
       'active' => true             //modelga har safar active degan qiymat berishimiz shartmas
    ];
}
