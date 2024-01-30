<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moderate_Lake extends Model
{
    use HasFactory;
    protected $table = 'moderate_lakes';
    protected $fillable = [
        'Filename',
        'Label_2015',
        'XMin_2015',
        'YMin_2015',
        'XMax_2015',
        'YMax_2015',
        'Area_2015',
        'Label_2016',
        'XMin_2016',
        'YMin_2016',
        'XMax_2016',
        'YMax_2016',
        'Area_2016',
        'Percentage_Decrease',
    ];
}
