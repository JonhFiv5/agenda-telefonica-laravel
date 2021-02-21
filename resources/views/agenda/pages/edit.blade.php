@extends('agenda.layouts.app')

@section('title', 'Editar contato')

@section('content')
    <h1>Editar contato</h1>
    @include('agenda.includes.alerts')
    <form action="{{ route('contatos.update', $contato->id) }}" method="post" class="form">
        @method('PUT')
        @include('agenda._partials._form-create-edit')
    </form>
@endsection