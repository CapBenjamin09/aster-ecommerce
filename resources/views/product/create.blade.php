<x-layouts.admin-layout>

        <div class="py-2 px-10 md:px-10">
            <h2 class="text-3xl mt-2 font-semibold text-center text-gray-800">
                Crear usuario
            </h2>
        </div>

        <div class="container static px-10 py-5">
        <form class="border border-amber-200 shadow-md rounded-2xl px-8 pt-6 pb-8 mb-4" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if(session('status'))
                <x-error-alert title="Error">
                    {{ session('status') }}
                </x-error-alert>
            @endif

            @include('product.form')

            <div class="mt-10">
                <x-button type_button="primary" type="submit">
                    Guardar
                </x-button>

                &nbsp;
                <x-button type_button="primary" type="submit">
                    <a href="{{route('product.index')}}"> Regresar </a>
                </x-button>
            </div>
        </form>
    </div>

</x-layouts.admin-layout>
