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
        return view('alunos.index', [
            'viewTitle'        => 'Bem vindo ao sistema de gerenciamento de alunos.',
            'viewSubtitle'     => 'Gerencie com facilidade e agilidade todos os alunos.',
            'actionsContainer' => 'Ações disponíveis no sistema.',
            'btnClass'         => 'btn btn-primary btn-lg',
            'linkPesquisar'    => '/alunos/pesquisar',
            'labelPequisar'    => 'Pesquisar Alunos',
        ]);
    }
}
