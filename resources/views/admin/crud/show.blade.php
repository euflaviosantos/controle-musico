@extends('layouts.admin.app')
@section('content')

<h1>objetos</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
    @foreach($objeto->toArray() as $key => $value)
            <p>{{$key . ': ' . $value}}</td>
    @endforeach
        </tr>
    </thead>
</table>

@endsection