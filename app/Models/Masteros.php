<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masteros extends Model
{
    use HasFactory;
    protected $table = 'tb_master_os'; //apabila nama Model sama dengan Table, tidak perlu mengunakan kode ini
    protected $fillable = [
        'type_os', 'avatar'
    ];
}
