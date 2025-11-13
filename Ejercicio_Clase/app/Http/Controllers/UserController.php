<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $User = User::select('nombre', 'estudios');
        return response()->json($User);
    }
}
