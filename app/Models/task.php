<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{

    protected $table = "task";
    protected $primary = "id";
    protected $fillable = ['descricao', 'status'];
    use HasFactory;
}
