<x-layouts.admin-layout title="Listado de productos">

    <div class="relative">
        <a href="#" class="absolute top-10 right-5 block w-52 h-62 p-6 border border-gray-400 rounded-lg shadow-xl hover:bg-gray-100">

            <h5 class="mb-2 text-sm font-bold tracking-tight text-gray-900">Cambiar estado de pedido</h5>
            <div class="font-normal text-gray-700 dark:text-gray-400 ">

                <form method="POST" action="{{ route('management.update', $management) }}">
                    @csrf
                    @method('PATCH')
                <select multiple id="status" name="status" class="hover:bg-gray-100 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5">
                    <option @if($management->status == 'En Proceso') selected @endif value="En Proceso">En Proceso</option>
                    <option @if($management->status == 'Enviado') selected @endif value="Enviado">Enviado</option>
                    <option @if($management->status == 'Finalizado') selected @endif value="Finalizado">Finalizado</option>
                </select>

                   <div class="mt-5 bg-yellow-400 rounded-2xl text-center w-20 text-sm">
                    <button type="submit"> Guardar </button>
                   </div>
                </form>

            </div>
        </a>
    </div>

<div class="w-9/12  bg-white p-8 shadow-md border border-gray-400 rounded-md mt-10 justify-between mx-10">


    <div class="text-start mb-4">
        <p class="tracking-tight text-gray-500 md:text-lg mb-1">{{ $management->user->name }}</p>
        <p class="text-sm text-gray-600 mb-5">Fecha: {{ $management->date }}</p>
    </div>

    <div class="">

        <h1 class="font-semibold text-gray-800 px-2">Estado: {{ $management->status }}</h1>

        <table class="default">
            <tr class="border-b border-gray-300 py-1 grid grid-cols-4 gap-4">
                <td class="font-bold text-gray-600 px-2 col-span-2">Descripción del producto</td>
                <td class="font-bold text-gray-600 px-2">Cantidad</td>
                <td class="font-bold text-gray-600 px-2">Precio</td>
            </tr>
            @foreach($details as $detail)
                <tr class=" py-1 grid grid-cols-4 gap-5">
                    <td class="text-gray-600 px-2 col-span-2">{{ $detail->product->name }}</td>
                    <td class="text-gray-600 px-2">{{ $detail->quantity }}</td>
                    <td class="text-gray-600 px-2">Q.{{ $detail->quantity * $detail->product->price }}</td>
                </tr>
            @endforeach

            <tr class="border-t border-gray-300 py-1 grid grid-rows-4 grid-flow-col gap-4 justify-start">
                <td class="text-gray-900 px-2">Total: Q.{{ $total }}</td>
            </tr>

        </table>
    </div>

    <div class="">

        <p class="text-gray-800 font-bold whitespace-pre-line text-start">Detalles de facturación</p>
        <p class="text-gray-500 whitespace-pre-line text-start">Nit: C/F</p>
    </div>

    <div class="flex justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
        </svg>
        <span class="text-gray-600">Número de pedido: {{ $management->id }}</span>
    </div>
    <div class="grid col-span-3">
        <div class="justify-start grid">
            <a href="{{ route('management.index') }}" class="hover:text-gray-400 text-blue-800 font-bold py-3 justify-between">Regresar</a>
        </div>
        <div class="col-start-3">

        </div>
    </div>
</div>

</x-layouts.admin-layout>
