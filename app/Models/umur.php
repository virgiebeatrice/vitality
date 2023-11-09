<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class umur extends Model
{
    use HasFactory,HasUuids;
    protected $table ='umur';
    protected $fillable =
    [
        'umur_pengguna',
    ];
    

}
