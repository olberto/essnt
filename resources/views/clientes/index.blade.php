@extends('layout')

@section('content')
    <h1>Lista de Clientes</h1>
    <a href="{{ route('clientes.create') }}" style="margin-bottom: 20px; display: inline-block;">Adicionar Cliente</a>

    <div style="display: flex; flex-wrap: wrap; gap: 20px;">
        @foreach($clientes as $cliente)
            <div style="border: 1px solid #ddd; padding: 10px; width: 200px; text-align: center;">
                <img src="{{ asset('fotos/'.$cliente->foto) }}" alt="{{ $cliente->nome }}" width="100">
                <p>{{ $cliente->nome }}</p>

                <a href="{{ route('clientes.show', $cliente->id) }}" style="color: blue; text-decoration: none;">Ver Detalhes</a>
                <br>
                <a href="{{ route('clientes.edit', $cliente->id) }}" style="color: green; text-decoration: none;">Editar</a>
                <br>
                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="color: red; background: none; border: none; cursor: pointer;">Excluir</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
