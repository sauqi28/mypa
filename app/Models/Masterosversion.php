<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masterosversion extends Model
{
    use HasFactory;
    protected $table = 'tb_master_os_kind_version';
    protected $fillable = [
        'master_os_kind_id', 'alias'
    ];
}
