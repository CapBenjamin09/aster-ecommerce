<x-layouts.admin-layout title="Editar categoría">

    <div class="py-2 px-5 md:px-10">
        <h2 class="text-3xl mt-5 font-semibold text-center text-gray-800">
            Editar categoría
        </h2>
    </div>

    <div class="container static px-10 py-5">

        <form class="border border-amber-200 shadow-md rounded-2xl px-8 pt- pb-8 mb-4" action="{{ route('category.update', $category) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            @if(session('status'))
                <x-error-alert title="Error">
                    {{ session('status') }}
                </x-error-alert>
            @endif

            @include('category.form')

            <div class="mt-10">
                <x-button type_button="primary" type="submit">
                    Guardar
                </x-button>

                &nbsp;
                <x-button type_button="primary" type="submit">
                    <a href="{{route('category.index')}}"> Regresar </a>
                </x-button>
            </div>

        </form>
    </div>
</x-layouts.admin-layout>
