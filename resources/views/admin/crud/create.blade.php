@extends('layouts.admin.app')
@section('content')

<h1>{{$nomeTabela}}</h1>

<div class="btn-group">
    <a class="btn btn-default" href="{{'/admin/' . $nomeTabela}}">Voltar</a>
    <a class="btn btn-default" href="#" onclick="implementar()">Salvar</a>
</div>

{{ Html::ul($errors->all()) }}

{{Form::open(array('url'=>'/admin/' . $nomeTabela)) }}
@foreach($objeto->toArray() as $key => $value)
<div class="form-group">
    {{ Form::label($key, $key) }}
    {{ Form::text($key, '', array('class' => 'form-control')) }}
</div>
@endforeach
{{ Form::submit('Criar', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}


@endsection