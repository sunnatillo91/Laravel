<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name','address','phone'];

    //table - companies nomi o'rniga boshqa nom bermooqchi bo'lsak kod quyidagicha:

        //protected $table = 'his_companies';

    //primary key o'rniga boshqa nom bermoqchi bo'lsak

        //protected $primaryKey = 'Company_id';

    // incrementingga zarurat bo'lmasa

        // public $incrementing = false;

    // timestamps ga zarurat bo'lmasa

        // public $timestamps = false;

    // default values

        // protected $attributes = [
        //     'active' => true
        // ];
}
