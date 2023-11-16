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
                <button type="submit" class="w-full mb-3 inline-block rounded-full border-2 border-info px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-info transition duration-150 ease-in-out hover:border-info-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-info-600 focus:border-info-600 focus:text-info-600 focus:outline-none focus:ring-0 active:border-info-700 active:text-info-700">
                    <a href=" {{ route('profileOrder.index', $users) }} ">Mis pedidos</a>
                </button>
                <br>
            <button type="submit" class=" flex justify-center mx-auto w-full mb-3 rounded-full border-2 border-warning px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-warning transition duration-150 ease-in-out hover:border-warning-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-warning-600 focus:border-warning-600 focus:text-warning-600 focus:outline-none focus:ring-0 active:border-warning-700 active:text-warning-700">
                <a href=" {{ route('profile.edit', $users) }} ">Editar perfil</a>
            </button>

                <form method="POST" action="{{route('profile.destroy', $users)}}" class=" w-full" id="deleteForm">
                    @csrf
                    @method('DELETE')

                    <button type="submit"  onclick="confirmDelete()" class="w-full inline-block rounded-full border-2 border-danger px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-danger transition duration-150 ease-in-out hover:border-danger-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-danger-600 focus:border-danger-600 focus:text-danger-600 focus:outline-none focus:ring-0 active:border-danger-700 active:text-danger-700">Eliminar perfil</button>
                </form>
            </div>

        </div>

    </div>

    </div>

    <!-- ... (otras partes de tu código HTML) ... -->

    <script>
        function confirmDelete() {
            var result = confirm("¿Estás seguro que deseas eliminar tu perfil? Al dar clic perderá el registro de lo que ha realizado.");

            if (result) {
                // El usuario ha confirmado la eliminación
                document.getElementById('deleteForm').submit();
            }
        }
    </script>

</x-layouts.client-layout>
