@extends('layouts.main')

@section('title', 'Tela de Produtos')

@section('content')
    <h1>Esta é a tela de Produtos!</h1>
    <a href="/">Voltar para home</a>
    
    @if($busca != '')
        <p>O Usuário está buscando por: {{ $busca }}</p>
    @endif
@endsection