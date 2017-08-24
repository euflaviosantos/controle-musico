@extends('layouts.admin.app')
@section('content')
@include('layouts.admin.modal')
<div class="barra">
    <h1>Cadastro de Vídeos</h1>
    <a href="javascript:void(0)" class="botao" id="abrir-modal"><i class="glyphicon glyphicon-plus"></i>Novo Vídeo</button></a>
</div>
<div class="videos">
    <div class="row">
    <table class="table">
        <tr>
            <th>Descrição</th>
        </tr>
        @foreach($videos as $cada)
        <tr>
            <td>{{$cada->descricao}}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection