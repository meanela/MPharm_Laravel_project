<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'medicine',
        'type',
        'file',
    ];
}
