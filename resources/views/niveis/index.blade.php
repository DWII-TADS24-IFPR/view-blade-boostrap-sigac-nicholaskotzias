@extends('layouts.app')

@section('title', 'Níveis')

@section('content')

<h1>INDEX NIVEIS   </h1>

    @if (session('error'))
        <x-alert tipo="danger">
            {{ session('error') }}
        </x-alert>
    @endif

    @if (session('success'))
        <x-alert tipo="success">
            {{ session('success') }}
        </x-alert>
    @endif

<a href="{{ route('niveis.create') }}" class="btn btn-primary">Adicionar</a>

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
            <td class="text-end">
                <a href="{{ route('niveis.show', $nivel->id) }}" class="btn btn-primary">Ver</a>
            </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
