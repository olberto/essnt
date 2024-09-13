@extends('layout')

@section('content')
    <h1>Cadastrar Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="nome" placeholder="Nome">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="telefone" placeholder="Telefone">
        <input type="file" name="foto">
        <button type="submit">Salvar</button>
    </form>
@endsection
