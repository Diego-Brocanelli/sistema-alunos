<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

/**
 * @author Diego Brocanelli <diegoweb01@gmail.com>
 */
class UserController extends Controller
{
    /**
     * REsponsável pela view home do sistema
     * @return View
     */
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
    
    public function select()
    {
        return view('alunos.select',[
            'viewTitle' => 'Pesquisa de alunos',
        ]);
    }
}
