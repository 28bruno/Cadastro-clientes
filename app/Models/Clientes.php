<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{    
    protected $fillable = ['codBomControle', 'cnpjCpf', 'razaoSocial', 'nomeFantasia', 'nomeResponsavel', 'telefone', 'email', 'created_at', 'updated_at', 'nomeResponsavel', 'telefone', 'email'];

    use HasFactory;
}
