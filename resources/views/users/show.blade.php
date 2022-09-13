@extends('layouts.app')
@section('title', 'Dados do Usuários: {$user->name}')

@section('content')
    <header id="header" class="relative z-20">
        <div class="flex items-center">
            <h1 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">
                Dados do usuário: {{ $user->name }}</h1>
        </div>
    </header>

    <ul
        class="mt-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        <li class="py-2 px-4 w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">ID: {{ $user->id }}</li>
        <li class="py-2 px-4 w-full border-b border-gray-200 dark:border-gray-600">Nome: {{ $user->name }}</li>
        <li class="py-2 px-4 w-full border-b border-gray-200 dark:border-gray-600">E-mail: {{ $user->email }}</li>
        <li class="py-2 px-4 w-full rounded-b-lg">Download</li>
    </ul>

    <form action="{{ route('users.delete', $user->id) }}" method="post" class="mt-4">
        @method('delete')
        @csrf
        <button type="submit"
            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
            Deletar</button>
    </form>
@endsection
