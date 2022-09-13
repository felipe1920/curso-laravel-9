@extends('layouts.app')
@section('title', 'Criação de Usuários')

@section('content')

    @include('includes.validations-form')

    <header id="header" class="relative z-20">
        <div class="flex items-center">
            <h1 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">
                Novo Usuário</h1>
        </div>
    </header>

    <form action="{{ route('users.store') }}" method="POST" class="mt-4">
        @include('users._partials.form')
    </form>

@endsection
