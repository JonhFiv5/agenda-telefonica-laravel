@extends('agenda.layouts.app')

@section('title', 'Detalhes do contato')

@section('content')
    <dl>
        <h1>Detalhes do contato</h1>
        <dt>Nome</dt>
        <dd>{{ $contato->nome }}</dd>
        <dt>Sobrenome</dt>
        <dd>{{ $contato->sobrenome }}</dd>
        <dt>Telefone</dt>
        <dd>{{ $contato->telefone }}</dd>
    </dl>
@endsection
