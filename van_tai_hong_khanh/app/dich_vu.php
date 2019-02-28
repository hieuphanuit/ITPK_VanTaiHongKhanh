<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dich_vu extends Model
{
    //
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'ten_dich_vu',
        'noi_dung',
        'seo_title',
        'seo_description',
        'seo_robots',
    ];

    protected $table = "dich_vus";

    public $timestamps = false;
}
