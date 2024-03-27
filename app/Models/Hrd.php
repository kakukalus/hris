<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hrd extends Model
{
    // use HasFactory;
    // public $timestamps = false;
    public $table = 'hrd';

    protected $fillable = [
        'id',
        'name',
        'email',
        'no_telp',
        'date_applied',
        'interview_date',
        'cv_link',
        'notes',
        'status_id',
        'created_by',
        'update_by',
        'created_at',
        'updated_at',
    ];
}
