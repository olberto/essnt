@extends('layout')

@section('content')
    <h1>Lista de Clientes</h1>
    <a href="{{ route('clientes.create') }}">Adicionar Cliente</a>

    @foreach($clientes as $cliente)
        <div>
            <img src="{{ asset('fotos/'.$cliente->foto) }}" alt="{{ $cliente->nome }}" width="50">
            <p>{{ $cliente->nome }}</p>
            <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        </div>
    @endforeach
@endsection
