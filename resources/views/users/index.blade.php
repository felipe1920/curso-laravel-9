@extends('layouts.app')

@section('title', 'Listagem de Usuários')

@section('content')
    <h1>
        listagem de usuarios - 
        <a href="{{route('users.create')}}">Novo Usuário</a>

    </h1>
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
