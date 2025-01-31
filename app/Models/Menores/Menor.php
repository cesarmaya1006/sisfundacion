<?php

namespace App\Models\Menores;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Menor extends Model
{
    use HasFactory,Notifiable;
    protected $table = 'menores';
    protected $guarded = [];

}
