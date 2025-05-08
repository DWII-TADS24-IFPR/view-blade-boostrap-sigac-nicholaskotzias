@extends('layouts.app')

@section('title', 'Níveis')

@section('content')

<h1>INDEX NIVEIS</h1>

    @if (session('error'))
        <x-alert tipo="danger">
            {{ session('error') }}
        </x-alert>
    @endif

    @if (session('success'))
    <x-alert tipo="success" id="success-message">
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
            <td>{{ $nivel->id }}</td>
            <td>{{ $nivel->nome }}</td>
            <td class="text-end">
                <a href="{{ route('niveis.show', $nivel->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('niveis.edit', $nivel->id) }}" class="btn btn-info">Atualizar</a>

                    <form action="{{ route('niveis.destroy', $nivel->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ms-2">Deletar</button>
                    </form>
                </td>
            </tr>
            </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
