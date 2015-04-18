@extends('layouts.master')

@section('title', 'Home - Sistema de gerenciamento de alunos')

@section('content')
    <div class='row'>
        <div class='col-sm-12'>
            <div class="page-header">
                <h1>
                    <a class="btn btn-default btn-sm" href="{{$backToHome}}">
                        <span class='glyphicon glyphicon-chevron-left'></span>
                        <span class='glyphicon glyphicon-chevron-left'></span>
                        VOLTAR
                    </a>
                    {{$viewTitle}}
                </h1>
            </div>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-12'>
            <table class='table table-hover table-borderless'>
                <thead>
                    <tr>
                        <td>Registro</td>
                        <td>Nome</td>
                        <td>Sobrenome</td>
                        <td>Data Nascimento</td>
                        <td>Idade</td>
                        <td>Série</td>
                        <td>Clase</td>
                        <td colspan="3">Ação</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alunos as $aluno)
                    <tr>
                        <td>{{$aluno->id}}</td>
                        <td>{{$aluno->nome}}</td>
                        <td>{{$aluno->sobrenome}}</td>
                        <td>{{$aluno->data_nascimento}}</td>
                        <td>{{$aluno->idade}}</td>
                        <td>{{$aluno->serie}}</td>
                        <td>{{$aluno->clase}}</td>
                        <td><a class='btn btn-success' href="/alunos/atualizar/registro/{{$aluno->id}}">Atualizar</a></td>
                        <td><a class='btn btn-primary' href="/alunos/notas/registro/{{$aluno->id}}">Notas</a></td>
                        <td><button class='btn btn-danger'>Remover</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop