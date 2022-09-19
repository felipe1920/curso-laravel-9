@extends('layouts.app')

@section('title', 'Comentários do Usuários')

@section('content')

    <header id="header" class="relative z-20">
        <div class="flex items-center">
            <h1 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">
                Comentários do Usuários</h1>
        </div>
    </header>
    <form action="{{ route('comments.index', $user->id) }}" method="get" class="mt-4">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
        <div class="relative">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <input type="search" id="default-search" name="search"
                class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search Mockups, Logos...">
            <button type="submit"
                class="text-white absolute right-24 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buscar</button>
            <a href="{{ route('comments.create', $user->id) }}"
                class="text-white absolute right-2.5 bottom-2.5 bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Novo</a>

        </div>
    </form>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-4">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Comentario
                    </th>
                    <th scope="col" class="py-3 px-6">
                        visivel
                    </th>
                    <th scope="col" class="py-3 px-6 text-center">
                        Editar
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $comment)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th class="py-4 px-6">
                            {{ $comment->body }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $comment->visible ? 'SIM' : 'NÃO'}}
                        </td>
                        <td class="py-4 px-6 text-center">
                            <a href="{{ route('comments.edit', [$user->id, $comment->id]) }}"
                                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
