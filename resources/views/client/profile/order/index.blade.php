<x-layouts.client-layout title="Ordenes de usuario">

    <div class="justify-center mx-auto">

        <div class="justify-center mx-auto my-10">
            <h2 class="text-3xl font-semibold text-center text-gray-800">
                Historial de pedidos
            </h2>
        </div>

        <br>

        <div class="static shadow-md sm:rounded-2xl">

            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-white uppercase bg-orange-800">
                <tr>
                    <th scope="col" class="px-10 py-3">
                        No. Pedido
                    </th>
                    <th scope="col" class="px-10 py-3">
                        Fecha
                    </th>
                    <th scope="col" class="px-10 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-10 py-3">
                        Acciones
                    </th>

                </tr>
                </thead>
                <tbody>

                @foreach($orders as $order)
                    <tr class="bg-white hover:bg-gray-100 divide-y divide-slate-200">
                        <td class="px-10 py-4">
                            {{ $order->id }}
                        </td>
                        <td class="px-10 py-4">
                            {{ $order->date }}
                        </td>
                        <td class="px-10 py-4">
                            {{ $order->status }}
                        </td>
                        <td class="px-10 py-4">
                            <a href="{{ route('profileOrder.show', $order) }}" class="font-medium text-blue-600 hover:underline">Ver detalle</a>
                        </td>

                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
        <div class="py-5 px-10">
            {{$orders->links()}}
        </div>
        <div class="justify-start grid">
            <a href="{{ route('profile.index', auth()->user()) }}" class="hover:text-gray-400 text-blue-800 font-bold py-3 justify-between">Regresar</a>
        </div>

    </div>

</x-layouts.client-layout>
