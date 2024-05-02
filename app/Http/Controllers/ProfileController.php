<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index()
    {
        $use = new User();
        $uses = $use->all();
        return view('admin/usuario/index', ['users' => $use->all()]);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function create()
    {
        return view('admin/usuario/create');
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        dd($request);
        $use = new User();
        $uses = $use->find(20);
        return view('admin/usuario/create', [
            'uses' => $uses,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request): RedirectResponse
    {
        dd($request);
        $use = new User();
        // $aluno = i. $modal->where('id', $id)
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $res = $request->user()->save();

        return Redirect::route('profile.index')->with('msg', 'Atualizado com sucesso!');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
