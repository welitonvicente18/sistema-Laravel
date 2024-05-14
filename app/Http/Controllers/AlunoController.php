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

        $request->validate([
            'id_responsavel' => 'required',
            'nome' => 'required|max:250',
            'cpf' => 'required',
            'dt_nascimento' => 'required',
            'sexo' => 'required|max:1',
            'matricula' => 'required',
            'turma' => 'required',
            'turno' => 'required',
            'parentesco' => 'required|max:50',
            'email' => 'required|max:255|email',
            'telefone' => 'required',
        ]);

        $aluno->create([
            'id_responsavel' => $request->id_responsavel,
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'dt_nascimento' => $request->dt_nascimento,
            'sexo' => $request->sexo,
            'matricula' => $request->matricula,
            'turma' => $request->turma,
            'turno' => $request->turno,
            'parentesco' => $request->parentesco,
            'email' => $request->email,
            'telefone' => $request->telefone
        ]);

        return redirect()->route('aluno.index')->with('msg', 'Resgistro inserido');
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
        $aluno = Aluno::find($id);
        $request->validate([
            'id_responsavel' => 'required',
            'nome' => 'required|max:250',
            'cpf' => 'required',
            'dt_nascimento' => 'required',
            'sexo' => 'required|max:1',
            'matricula' => 'required',
            'turma' => 'required',
            'turno' => 'required',
            'parentesco' => 'required|max:50',
            'email' => 'required|max:255|email',
            'telefone' => 'required',
        ]);

        $aluno->id_responsavel = $request->id_responsavel;
        $aluno->nome = $request->nome;
        $aluno->cpf = $request->cpf;
        $aluno->dt_nascimento = $request->dt_nascimento;
        $aluno->sexo = $request->sexo;
        $aluno->matricula = $request->matricula;
        $aluno->turma = $request->turma;
        $aluno->turno = $request->turno;
        $aluno->parentesco = $request->parentesco;
        $aluno->email = $request->email;
        $aluno->telefone = $request->telefone;
        $aluno->save();

        return redirect()->route('aluno.index')->with('msg', 'Atualizado com sucesso!');
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
