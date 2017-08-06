@extends('layouts.admin.app')
@section('content')

<h1>{{get_class($objeto)}}</h1>

<div class="btn-group">
    <a class="btn btn-default" href="{{'/admin/' . $nomeTabela}}">Voltar</a>
    <a class="btn btn-default" href="#" onclick="implementar()">Salvar</a>
</div>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{Form::model($objeto, ['method'=>'PATCH', 'route'=> [$objeto->getTable() . '.update', $objeto->id]] ) }}
@include('admin.crud.form')
{{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@endsection