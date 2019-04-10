<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if (request()->has('empty')){
            $users = [];
        }else {
            $users = [
                'Joel',
                'Ellie',
                'Tess',
                'Tommy',
                'Bill',
                '<script>alert("Clicker")</script>'
            ];
        }
        return view('users')->with([
            'users' => $users,
            'title' => 'Listado de Usuarios'
        ]);
    }

    public function show($id)
    {
        return view('show')->with([
            'id' => $id
        ]);

    }

    public function create()
    {
        return 'Crear nuevo usuario';
    }
}
