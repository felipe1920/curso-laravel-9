@extends('layouts.app')

@section('title', 'Listagem de Usuários')

@section('content')
    <h1>
        listagem de usuarios - 
        <a href="{{route('users.create')}}">Novo Usuário</a>
    </h1>
    <form action="{{ route('users.index') }}" method="get">
        <input type="text" name="search" placeholder="Pesquisar">
        <button>Pesquisar</button>
    </form>
    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }} -
                {{ $user->email }} 
                | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
                | <a href="{{ route('users.edit', $user->id) }}">Editar</a>
            </li>
        @endforeach

    </ul>
@endsection
