<x-layouts.admin-layout>
    <div class="w-full max-w-xs mx-auto mt-20 bg-white shadow-2xl">
        <h1>Productos</h1>
        <form class="shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if(session('status'))
                <x-error-alert title="Error">
                    {{ session('status') }}
                </x-error-alert>
            @endif

            @include('product.form')

            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Guardar
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('category.index') }}">
                    Regresar
                </a>
            </div>
        </form>
    </div>

</x-layouts.admin-layout>
