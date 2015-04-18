<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

/**
 * @author Diego Brocanelli <diegoweb01@gmail.com>
 */
class UserController extends Controller
{
    /**
     * Responsável pela view home do sistema
     * @return View
     */
    public function index()
    {
        $viewContent = [
            'viewTitle'        => 'Bem vindo ao sistema de gerenciamento de alunos.',
            'viewSubtitle'     => 'Gerencie com facilidade e agilidade todos os alunos.',
            'actionsContainer' => 'Ações disponíveis no sistema.',
            'btnClass'         => 'btn btn-primary btn-lg',
            'linkPesquisar'    => '/alunos/pesquisar',
            'labelPequisar'    => 'Pesquisar Alunos',
        ];
        return view('alunos.index', $viewContent);
    }
    
    /**
     * Responsável pela view de pesquisa de alunos
     * @return View
     */
    public function select()
    {
        $viewContent = [
            'viewTitle' => 'Pesquisa de alunos',
            'backToHome' => '/',
        ];
        $db = new \Illuminate\Support\Facades\DB();
        $alunos = $db::select(""
                . "select "
                . "id, "
                . "nome, "
                . "sobrenome, "
                . "DATE_FORMAT(data_nascimento,'%m/%d/%Y') as data_nascimento, "
                . "idade, "
                . "serie, "
                . "clase, "
                . "data_cadastro, "
                . "hora_cadastro "
                . "from "
                . "alunos;");
        
        $viewContent['alunos'] = $alunos;

        return view('alunos.select',$viewContent);
    }
}
