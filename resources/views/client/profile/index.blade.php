<x-layouts.client-layout title="Profile">

    <div class=" justify-center mx-auto">

    <div class="bg-white mt-10">

        <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 sm:px-6 sm:py-5 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Hola <span>{{ $users->name }}</span></h2>
                <p class="mt-4 text-gray-500"></p>

                <dl class="mt-5 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Correo electrónico</dt>
                        <dd class="mt-2 text-sm text-gray-500">{{ $users->email }}</dd>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Teléfono</dt>
                        <dd class="mt-2 text-sm text-gray-500"> {{ $users->phone }}</dd>
                    </div>

                </dl>
            </div>



            <div class="">
                <x-button type_button="primary" class="w-[62%] bg-sky-200">
                    <a href=" {{ route('profile.edit', $users) }} ">Mis pedidos</a>
                </x-button>
                <br>
            <x-button type_button="primary">
                <a href=" {{ route('profile.edit', $users) }} ">Editar perfil</a>
            </x-button>

                <form method="POST" action="{{route('profile.destroy', $users)}}" class="inline-flex" id="deleteForm">
                    @csrf
                    @method('DELETE')

                    <x-button type_button="danger" onclick="confirmDelete()" class="bg-red-400">Eliminar perfil</x-button>
                </form>
            </div>

        </div>

    </div>

    </div>

    <!-- ... (otras partes de tu código HTML) ... -->

    <script>
        function confirmDelete() {
            var result = confirm("¿Estás seguro que deseas eliminar tu perfil? Al dar click perderá el registro de lo que ha realizado.");
            if (result) {
                document.getElementById('deleteForm').submit();
            }
        }
    </script>

</x-layouts.client-layout>
