@extends('layouts.app')
@section('title', "Manutenção usuário: {$user->name}")

@section('content')

    @if ($errors->any())
        <ul class="erros">
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <h1>Manutenção usuário: {{ $user->name }}</h1>
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('patch')
        @csrf

        <input type="text" name="name" placeholder="Nome:" value="{{ $user->name }}">

        <input type="email" name="email" placeholder="E-mail:" value="{{ $user->email }}">

        <input type="password" name="password" placeholder="Senha:">

        <button type="submit">Salvar</button>

    </form>

@endsection
