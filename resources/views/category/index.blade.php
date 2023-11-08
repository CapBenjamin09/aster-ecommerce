<x-layouts.admin-layout ttitle="Listado de categorías">


    <div class="px-10 md:px-10">
        <h2 class="text-3xl font-semibold text-center text-gray-800">
            Listado de categorías
        </h2>
        @if(session('eliminar'))
            <div class="flex justify-center px-2 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                {{ session('eliminar') }}
            </div>
        @endif
    </div>

    <div class="px-10 md:px-10">
        <x-button type_button="primary" type="submit">
            <a href="{{route('category.create')}}"> Nuevo </a>
        </x-button>
    </div>


    <div class="static shadow-md sm:rounded-lg px-3 mt-5">

        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-white uppercase bg-gray-600">
            <tr>
                <th scope="col" class="px-10 py-3">
                    Imagen
                </th>
                <th scope="col" class="px-10 py-3">
                    Id
                </th>
                <th scope="col" class="px-10 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-10 py-3">
                    Acciones
                </th>

            </tr>
            </thead>
            <tbody>

            @foreach($categories as $category)
                <tr class="bg-white border-">
                    <th scope="row" class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <img src="{{ asset($category->image_path)}}" alt="" class="w-30 h-20">
                    </th>
                    <td class="px-10 py-4">
                        {{$category->id}}
                    </td>
                    <td class="px-10 py-4">
                        {{$category->name}}
                    </td>
                    <td class="px-10 py-4">
                        <a href="{{ route('category.edit', $category) }}" class="font-medium text-blue-600 hover:underline">Edit</a>
                        &nbsp;

                        <form method="POST" action="{{route('category.destroy', $category)}}" class="inline-flex">
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
        <div class="py-10 px-2">
            {{$categories->links()}}
        </div>

</x-layouts.admin-layout>
