<x-layouts.admin-layout title="Clientes">

    <div class="px-10 md:px-10">
        <h2 class="text-3xl mb-2 mt-10 font-semibold text-center text-gray-800">
            Listado de clientes
        </h2>
    </div>

    <div class="py-10 px-10 md:px-10 flex justify-end">

        <form action="{{ route('client.index') }}" method="get" class="flex justify-between">
            @csrf
            <x-input-text id="search" name="search" placeholder="Escribe el nombre del cliente..." value="" class="h-11 mr-5"/>
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
            </tr>
            </thead>
            <tbody>

            @foreach($clients as $client)
                <tr class="bg-white border-2xl hover:bg-gray-100 divide-y divide-slate-200">
                    <th scope="row" class=" px-10 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{$client->name}}
                    </th>
                    <td class="px-10 py-4">
                        {{$client->email}}
                    </td>
                    <td class="px-10 py-4">
                        {{$client->phone}}
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

    <div class="my-10">
        {{$clients->links()}}
    </div>

</x-layouts.admin-layout>
