<?php

namespace App\Models;

Class File {

    protected $table = 'files';

    protected array $fillable = [
        'name',
        'path',
        'types',
        'chapitres_id'
    ];
}