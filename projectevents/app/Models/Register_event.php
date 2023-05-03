<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Register_event extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'register_events';
    public $timestamps = true;
    protected $fillable = [
        'contact_person',
        'email',
        'phone',
        'group_name',
        'number_members',
        'events_id'
    ];
}
