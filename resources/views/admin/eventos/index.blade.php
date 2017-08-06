@extends('layouts.admin.app')
@section('content')
@include('layouts.admin.modal')

<div class="barra">
    <h1>Cadastro de Eventos</h1>
    <a href="javascript:void(0)" class="botao" id="abrir-modal"><i class="glyphicon glyphicon-plus"></i>Novo Evento</button></a>
</div>
<div class="eventos">
    <div class="row">
@foreach($objeto as $cada)
<div class="evento">
    <div class="dia"><span class="numero-dia">{{$cada->dia}}</span></div>
    <div class="mes-ano">{{$cada->mes . '/' . $cada->ano}}</div>
    <div class="dia-semana" onload="diaSemana()">{{$cada->semana}}</div>
    <div class="botoes">
        <span onclick="editar({{$cada->id}})" href="{{ URL::to('eventos.edit', ['id'=> $cada->id]) }}">[Editar]</span> | 
        <a href="javascript:void(0)"
            onclick="event.preventDefault();
                        document.getElementById('form-apagar-{{$cada->id}}').submit();">
            [Apagar]
        </a>
        {{ Form::open(array('url' => '/admin/eventos/' . $cada->id, 'class' => 'pull-right', 'id' => 'form-apagar-'. $cada->id)) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::close() }}
    </div>
    <div class="descricao">{{$cada->descricao}}</div>
</div>
@endforeach
    </div>
<div id="clearfix"></div>
</div>
<div></div>
{{$objeto->links()}}

@endsection