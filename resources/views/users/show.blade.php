@extends('layouts.app')
@section('title', 'Dados do Usuários')

@section('content')
    <h1>Listagem do usuário {{ $user->name }}</h1>

    <ul>
        <li>{{ $user->id }}</li>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
    </ul>
@endsection
