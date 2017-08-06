@extends('layouts.admin.app')
@section('content')

<h1>{{$objetos[0]->getTable()}}</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="btn-group">
    <a class="btn btn-default" href="/admin/{{$objetos[0]->getTable()}}/create">Novo</a>
</div>

<table style="heigth: 800px" class="table table-bordered">
    <thead>
        <tr>
    @foreach($objetos[0]->toArray() as $key => $value)
            <td>{{$key}}</td>
    @endforeach
            <td>Ações</td>
        </tr>
    </thead>
    <tbody>

    @foreach($objetos as $key => $value)
        <tr>
    @foreach($value->toArray() as $key => $cada)
            <td>{{$cada}}</td>
    @endforeach
            <td>
                <a href="{{ URL::to('/admin/'.$objetos[0]->getTable() . '/' . $value->id) }}">Exibir</a>
                <a href="{{ URL::to('/admin/' . $objetos[0]->getTable() . '/' . $value->id . '/edit') }}">Editar</a>
                <a  href="{{ URL::to($objetos[0]->getTable() . '/' . $value->id . '/delete') }}">
                
                <a href="#"
                    onclick="event.preventDefault();
                                document.getElementById('form-apagar').submit();">
                    Apagar
                </a>

                {{ Form::open(array('url' => '/admin/' . $objetos[0]->getTable() . '/' . $value->id, 'class' => 'pull-right', 'id' => 'form-apagar')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::close() }}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>


    {{$objetos->links()}}

@endsection