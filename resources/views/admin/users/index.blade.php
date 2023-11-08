
<x-layouts.admin-layout title="Listado de usuarios">

@if(session('eliminar'))
    <div class="flex justify-center px-2 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
        {{ session('eliminar') }}
    </div>
@endif

    <div class="py-10 px-10 md:px-10">
        <h2 class="text-3xl mb-2 mt-10 font-semibold text-center text-gray-800">
            Listado de usuarios
        </h2>
    </div>

    <div class="py-10 px-10 md:px-10">
    <x-button type_button="primary" type="submit">
        <a href="{{route('users.create')}}"> Nuevo </a>
    </x-button>
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
            <tr class="bg-white border border-2xl hover:bg-gray-100">
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
                    <a href="{{ route('users.edit', $user) }}" class="font-medium text-blue-600 hover:underline">Edit</a>
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
