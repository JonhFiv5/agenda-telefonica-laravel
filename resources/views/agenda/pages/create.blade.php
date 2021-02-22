@extends('agenda.layouts.app')

@section('title', 'Novo contato')

@section('content')
    <h1>Novo contato</h1>
    @include('agenda.includes.alerts')
    <form action="{{ route('contatos.store') }}" method="post" class="form" enctype="multipart/form-data">
        @include('agenda._partials._form-create-edit')
    </form>
@endsection