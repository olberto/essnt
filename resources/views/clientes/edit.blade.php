@extends('layout')

@section('content')
    <h1>Editar Cliente</h1>
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="nome" value="{{ $cliente->nome }}">
        <input type="email" name="email" value="{{ $cliente->email }}">
        <input type="text" name="telefone" value="{{ $cliente->telefone }}">
        <input type="file" name="foto">
        <button type="submit">Atualizar</button>
    </form>
@endsection
