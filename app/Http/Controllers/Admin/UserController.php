<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }

    public function store(Request $request)
    {
        try {
            $request->request->set('password', bcrypt($request->request->get('password')));
            User::create($request->all());
            alert()
                ->html('<i class="fas fa-user-check fa-2x text-success"></i>', '<h2 class="font-weight-lighter">Usuario creado exitosamente</h2>' , null)
                ->position('top')
                ->autoClose(3500);
        } catch (\Exception $e) {
            alert()
                ->html('<i class="fas fa-user-times fa-2x text-danger"></i>', '<h2>Error al crear el usuario</h2>' , null)
                ->position('top')
                ->autoClose(3500);
        } finally {
            return redirect()->route('admin.users.index');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(User $user)
    {
        try {
            dd($user);
        } catch (\Exception $e){
            dd($e->getMessage());
        } finally {
            return redirect()->route('admin.users.index');
        }
    }
}
