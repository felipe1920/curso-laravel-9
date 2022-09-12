@extends('layouts.app')
@section('title', "Manutenção usuário: {$user->name}")

@section('content')

    @include('includes.validations-form')

    <h1>Manutenção usuário: {{ $user->name }}</h1>
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('patch')
        @include('users._partials.form')
    </form>

@endsection
