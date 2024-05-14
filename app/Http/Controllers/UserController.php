<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Models\Aluno;
use App\Models\Responsavel;
use Faker\Guesser\Name;

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
        $responsavel = new Responsavel();

        foreach ($request->all() as $req) {

            var_dump($req);
            die;

            // $responsavel->validate([
            //     'email' => 'required|max:255',
            //     'name' => 'required|max:255',
            //     'cpf' => 'required|max:11',
            //     'dt_nascimento' => 'required',
            //     'sexo' => 'required|max:1',
            //     'email' => 'required|max:255',
            //     'telefone' => 'required|max:20',
            //     'perfil' => 'required|max:1',
            //     'password' => 'required|max:200',
            // ]);

            $responsavel->create([
                'parentesco' => $req->parentesco,
                'name' => $req->name,
                'cpf' => $req->cpf,
                'rg' => $req->rg,
                'dt_nascimento' => $req->dt_nascimento,
                'sexo' => $req->sexo,
                'telefone' => $req->telefone,
                'rua' => $req->rua,
                'cep' => $req->cep,
                'complemento' => $req->complemento,
                'bairro' => $req->bairro,
                'email' => $req->email
            ]);

            $user->create([
                'name' => $req->name,
                'email' => $req->email,
                'password' => $req->password,
                'cpf' => $req->cpf,
                'dt_nascimento' => $req->dt_nascimento,
                'sexo' => $req->sexo,
                'telefone' => $req->telefone,
                'perfil' => $req->perfil,
            ]);
        }

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
        $user = User::find($id);
        // dd($request);
        $validated = $request->validate([
            'parentesco' => 'required|max:50',
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'name' => 'required|max:255',
            'cpf' => 'required|max:11',
            'rg' => 'required|max:50',
            'dt_nascimento' => 'required',
            'sexo' => 'required|max:1',
            'rua' => 'required|max:50',
            'cep' => 'required|max:20',
            'complemento' => 'required|max:200',
            'bairro' => 'required|max:200',
            'uf' => 'required|max:50',
            'cidade' => 'required|max:200',
            'email' => 'required|max:255',
            'telefone' => 'required|max:20',
            'perfil' => 'required|max:1',
            'password' => 'required|max:200',
        ]);

        $user->parentesco = $request->parentesco;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->cpf = $request->cpf;
        $user->rg = $request->rg;
        $user->dt_nascimento = $request->dt_nascimento;
        $user->sexo = $request->sexo;
        $user->rua = $request->rua;
        $user->cep = $request->cep;
        $user->complemento = $request->complemento;
        $user->bairro = $request->bairro;
        $user->cidade = $request->cidade;
        $user->email = $request->email;
        $user->telefone = $request->telefone;
        $user->perfil = $request->perfil;
        $user->password = $request->password;

        $user->save();

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
