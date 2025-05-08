@extends('layouts.app')

@section('title', 'Níveis')

@section('content')

<h1>INDEX NIVEIS   </h1>

<a href="{{ route('niveis.create') }}" class="btn btn-primary">Adicio</a>

<table class="table table-white">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NOME</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach($niveis as $nivel)
            <tr>
            <td>{{$nivel->id}}</td>
            <td>{{$nivel->nome}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
