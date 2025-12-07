<?php


namespace App\Models;

Class Chapitre {

    protected $table = 'chapitres';

    protected array $fillable = [
        'name',
        'matieres_id',
        'themes_id',
    ];
    
}