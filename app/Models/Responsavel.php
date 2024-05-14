<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
    use HasFactory;

    protected $filable = ['parentesco', 'nome', 'cpf', 'dt_nascimento', 'sexo', 'id_responsavel','matricula', 'responsavel', 'turma', 'turno', 'telefone', 'email'];
}
