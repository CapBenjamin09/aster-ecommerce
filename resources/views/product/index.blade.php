<x-layouts.admin-layout ttitle="Listado de productos">


    <div class="px-10 md:px-10">
        <h2 class="text-3xl font-semibold text-center text-gray-800">
            Listado de productos
        </h2>
        @if(session('eliminar'))
            <div class="flex justify-center px-2 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                {{ session('eliminar') }}
            </div>
        @endif
    </div>

    <div class="px-10 md:px-10">
        <x-button type_button="primary" type="submit">
            <a href="{{route('product.create')}}"> Nuevo </a>
        </x-button>
    </div>


    <div class="static shadow-md sm:rounded-2xl mx-5 mt-5">

        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-white uppercase bg-gray-600">
            <tr>
                <th scope="col" class="px-10 py-3">
                    Imagen
                </th>
                <th scope="col" class="px-10 py-3">
                    Categoría
                </th>
                <th scope="col" class="px-10 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-10 py-3">
                    Precio
                </th>
                <th scope="col" class="px-10 py-3">
                    Cantidad
                </th>
                <th scope="col" class="px-10 py-3">
                    Acciones
                </th>

            </tr>
            </thead>
            <tbody>

            @foreach($products as $product)
                <tr class="bg-white border-">
                    <th scope="row" class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <img src="{{ asset($product->image_path)}}" alt="" class="w-30 h-20">
                    </th>
                    <td class="px-10 py-4">
                        {{$product->category->name}}
                    </td>
                    <td class="px-10 py-4">
                        {{$product->name}}
                    </td>
                    <td class="px-10 py-4">
                        {{$product->price}}
                    </td>
                    <td class="px-10 py-4">
                        {{$product->stock}}
                    </td>
                    <td class="px-10 py-4">
                        <a href="{{ route('product.edit', $product) }}" class="font-medium text-blue-600 hover:underline">Edit</a>
                        &nbsp;

                        <form method="POST" action="{{route('product.destroy', $product)}}" class="inline-flex">
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
    <div class="py-10 px-10">
        {{$products->links()}}
    </div>

</x-layouts.admin-layout>
