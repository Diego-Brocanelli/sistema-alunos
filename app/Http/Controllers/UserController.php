<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

/**
 * Description of UserController
 *
 * @author Diego
 */
class UserController extends Controller
{
    public function index()
    {
        return view('alunos.index');
    }
}
