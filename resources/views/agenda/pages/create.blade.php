@extends('agenda.layouts.app')

@section('title', 'Novo contato')

@section('content')
    <form action="" method="post">
        @include('agenda._partials._form-create-edit')
    </form>
@endsection