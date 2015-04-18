@extends('layouts.master')

@section('title', 'Home - Sistema de gerenciamento de alunos')

@section('content')
    <div class='row'>
        <div class='col-sm-12'>
            <div class="page-header">
                <h1>{{$viewTitle}}</h1>
                <h3>{{$viewSubtitle}}</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 jumbotron">
            <h4>{{$actionsContainer}}</h4>
            <a class='{{$btnClass}}' href="{{$linkPesquisar}}">{{$labelPequisar}}</a>
        </div>
    </div>
@stop