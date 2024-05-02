<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();
        return view('admin/aluno/index', ['alunos' => $alunos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/aluno/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aluno = new Aluno();
        $aluno->nome = $request->nome;
        $aluno->cpf = $request->cpf;
        $aluno->dt_nascimento = $request->dt_nascimento;
        $aluno->sexo = $request->sexo;
        $aluno->matricula = $request->matricula;
        $aluno->responsavel = $request->responsavel;
        $aluno->turma = $request->turma;
        $aluno->turno = $request->turno;
        $aluno->telefone = $request->telefone;
        $aluno->email = $request->email;
        $aluno->save();

        return redirect()->route('aluno.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modal = new Aluno();
        $aluno = $modal->find($id);
        return view('admin/aluno/create', ['aluno' => $aluno]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $modal = new Aluno();
        $aluno = $modal->where('id', $id)->update(
            [
                'nome' => $request->nome,
                'cpf' => $request->cpf,
                'dt_nascimento' => $request->dt_nascimento,
                'sexo' => $request->sexo,
                'matricula' => $request->matricula,
                'responsavel' => $request->responsavel,
                'turma' => $request->turma,
                'turno' => $request->turno,
                'telefone' => $request->telefone,
                'email' => $request->email
            ]
        );
        return redirect()->route('aluno.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modal = new Aluno();
        $aluno = $modal->find($id);
        $aluno->delete();
        return redirect()->route('aluno.index')->with('msg', 'Registro excluido com sucesso!');
    }
}

eu sou foda! 0)