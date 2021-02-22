@extends('agenda.layouts.app')

@section('title', 'Contatos')

@section('content')
<h1>Lista de contatos</h1>
    <a class="btn btn-success mt-3 mb-3" href="{{ route('contatos.create') }}">Novo contato</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th colspan="2">Telefone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contatos as $contato)
                <tr>
                    <td>{{ $contato->id }}</td>
                    <td>{{ $contato->nome }}</td>
                    <td>{{ $contato->sobrenome }}</td>
                    <td>{{ $contato->telefone }}</td>
                    <td><a href="{{ route('contatos.show', $contato->id) }}">Detalhes</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $contatos->links() !!}
@endsection