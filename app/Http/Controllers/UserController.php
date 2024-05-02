<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $use = new User();
        $uses = $use->all();
        return view('admin/usuario/index', ['users' => $use->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/usuario/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $user, Request $request)
    {
        $user = new User();
        $validated = $request->validate([
            'email' => 'required|max:255',
            'name' => 'required|max:255',
            'cpf' => 'required|max:11',
            'dt_nascimento' => 'required',
            'sexo' => 'required|max:1',
            'email' => 'required|max:255',
            'telefone' => 'required|max:20',
            'perfil' => 'required|max:1',
            'password' => 'required|max:200',
        ]);

        $rest = $user->create([
            'email' => $request->email,
            'name' => $request->name,
            'cpf' => $request->cpf,
            'dt_nascimento' => $request->dt_nascimento,
            'sexo' => $request->sexo,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'perfil' => $request->perfil,
            'user' => $request->user,
            'password' => Hash::make($request->password),
        ]);

        return Redirect::route('user.index')->with('msg', 'Criado com sucesso!');
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
        $user = User::find($id);

        return view('admin/usuario/create', ['uses' => $user]);
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
        $validated = $request->validate([
            'email' => 'required|max:255',
            'name' => 'required|max:255',
            'cpf' => 'required|max:11',
            'dt_nascimento' => 'required',
            'sexo' => 'required|max:1',
            'email' => 'required|max:255',
            'telefone' => 'required|max:20',
            'perfil' => 'required|max:1',
        ]);

        $use = User::find($id);
        $rest = $use->update($request->all());
        return Redirect::route('user.index')->with(['sucess' => 'true', 'msg', 'Atualizado com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $use = User::find($id);
        $use->delete();
        
        return Redirect::route('user.index')->with(['sucess' => 'true', 'msg', 'Excluido com sucesso!']);
    }
}
