<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $table = 'alunos';
    protected $fillable = ['nome', 'cpf', 'dt_nascimento', 'sexo', 'matricula', 'turma', 'turno', 'id_responsavel', 'parentesco', 'email', 'telefone'];
}
