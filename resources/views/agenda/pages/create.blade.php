@extends('agenda.layouts.app')

@section('title', 'Novo contato')

@section('content')
    <h1>Novo contato</h1>
    <form action="{{ route('contatos.store') }}" method="post" class="form">
        @include('agenda._partials._form-create-edit')
    </form>
@endsection