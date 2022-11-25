<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masteroskind extends Model
{
    use HasFactory;
    protected $table = 'tb_master_os_kind';
    protected $fillable = [
        'master_os_id', 'osname', 'avatar'
    ];
}
