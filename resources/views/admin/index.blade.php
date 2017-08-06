@extends('layouts.admin.app')
@section('content')
@include('layouts.admin.modal')
<h1>Indice aqui!</h1>
<div class="row">
    <div class="col-md-6">
        <h2>Eventos próximos<br><small>{{link_to_route('eventos.index', 'Ver Todos')}} - <a href="javascript:void(0)" class="botao" id="abrir-modal">Novo Evento</a></small></h2>
        
        @foreach($eventos as $cada)
        
        <div class="evento">
            <div class="dia"><span class="numero-dia">{{$cada->dia}}</span></div>
            <div class="mes-ano">{{$cada->mes . '/' . $cada->ano}}</div>
            <div class="dia-semana" onload="diaSemana()">{{$cada->semana}}</div>

            <div class="descricao">{{$cada->descricao}}</div>
        </div>
        @endforeach
    </div>
    <div class="col-md-6">
        <h2>Vídeos NSOQ</h2>
    </div>
</div>
@endsection