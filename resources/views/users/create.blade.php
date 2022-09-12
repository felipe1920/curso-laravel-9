@extends('layouts.app')
@section('title', 'Criação de Usuários')

@section('content')

    @include('includes.validations-form')

    <h1>Criação de usuário</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @include('users._partials.form')
    </form>

@endsection
