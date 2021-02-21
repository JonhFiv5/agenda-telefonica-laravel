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
    <a class="btn btn-info" href="{{ route('contatos.edit', $contato->id) }}">Editar contato</a>

    <form action="{{ route('contatos.destroy', $contato->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger mt-2" type="submit">Deletar contato</button>
    </form>
@endsection
