@extends('layouts.admin.app')
@section('content')
@include('layouts.admin.modal')
<h1>Indice aqui!</h1>
<div class="row">
    <div class="col-md-6">
        <h2>Eventos próximos<br><small>{{link_to_route('eventos.index', 'Ver Todos')}} - <a href="javascript:void(0)" class="botao" id="abrir-modal">Novo Evento</a></small></h2>
        <table class="table">
            <tr>
                <th>Data</th>
                <th>Hora</th>
                <th>Evento</th>
            </tr>
        @foreach($eventos as $cada)
            <tr>
                <td>{{$cada->data}}</td>
                <td>{{$cada->hora}}</td>
                <td>{{$cada->descricao}}</td>
            </tr>
        @endforeach
        </table>
    </div>
    <div class="col-md-6">
        <h2>Vídeos NSOQ</h2>
    </div>
</div>
@endsection