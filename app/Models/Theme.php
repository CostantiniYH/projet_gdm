<?php

namespace App\Models;

Class Theme {

    protected $table = 'themes';

    protected array $fillable = [
        'name',
        'matieres_id'
    ];
}