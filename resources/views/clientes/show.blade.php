@extends('layout')

@section('content')
    <h1>Detalhes do Cliente</h1>
    <img src="{{ asset('fotos/'.$cliente->foto) }}" alt="{{ $cliente->nome }}" width="150">
    <p><strong>Nome:</strong> {{ $cliente->nome }}</p>
    <p><strong>Email:</strong> {{ $cliente->email }}</p>
    <p><strong>Telefone:</strong> {{ $cliente->telefone }}</p>
    <a href="{{ route('clientes.index') }}">Voltar para a lista de clientes</a>
@endsection
