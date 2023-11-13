<x-layouts.admin-layout title="Listado de usuarios">

@if(session('eliminar'))
    <div class="flex justify-center px-2 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
        {{ session('eliminar') }}
    </div>
@endif

    <div class="px-10 md:px-10">
        <h2 class="text-3xl mb-2 mt-10 font-semibold text-center text-gray-800">
            Listado de usuarios
        </h2>
    </div>

    <div class="py-10 px-10 md:px-10 flex justify-between">

        <x-a-button type_button="primary" href="{{route('users.create')}}"> Nuevo </x-a-button>

        <form action="{{ route('users.index') }}" method="get" class="flex justify-between">
            @csrf
            <x-input-text id="search" name="search" placeholder="Escribe el nombre del usuario..." value="{{ $search }}" class="h-11 mr-5"/>
            <x-button type="submit" type_button="info">
                <svg class="w-6 h-6 text-" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </x-button>
        </form>
    </div>


<div class="static  shadow-md sm:rounded-lg px-2">

    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-white uppercase bg-orange-800">
        <tr>
            <th scope="col" class="px-10 py-3">
                Nombre
            </th>
            <th scope="col" class="px-10 py-3">
                Email
            </th>
            <th scope="col" class="px-10 py-3">
                Teléfono
            </th>
            <th scope="col" class="px-10 py-3">
                Rol
            </th>
            <th scope="col" class="px-10 py-3">
                Acciones
            </th>

        </tr>
        </thead>
        <tbody>

        @foreach($users as $user)
            <tr class="bg-white border-2xl hover:bg-gray-100 divide-y divide-slate-200">
                <th scope="row" class=" px-10 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{$user->name}}
                </th>
                <td class="px-10 py-4">
                    {{$user->email}}
                </td>
                <td class="px-10 py-4">
                    {{$user->phone}}
                </td>
                <td class="px-10 py-4">
                    {{$user->role}}
                </td>
                <td class="px-10 py-4">
                    <a href="{{ route('profile.edit', $user) }}" class="font-medium text-blue-600 hover:underline">Edit</a>
                    &nbsp;

                    <form method="POST" action="{{route('users.destroy', $user)}}" class="inline-flex">
                        @csrf
                        @method('DELETE')

                        <button class="font-medium text-red-600 hover:underline">Eliminar</button>
                    </form>

                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>

<div class="my-10">
    {{$users->links()}}
</div>

    </x-layouts.admin-layout>
