<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fa_clube extends Model
{
    use HasFactory;
    protected $table = 'fa_clubes';
    protected $fillable = [
    'nome', 'cpf', 'idade', 'cidade', 'email'
     ];
}
