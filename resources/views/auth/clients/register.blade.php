
<x-layouts.client-layout title="Registrar">

    <!-- component -->
    <div class="w-full">

        <div class="flex bg-white" style="height:700px;">
            <div class="flex items-center text-center lg:text-left px-2 md:px-12 lg:w-1/2">
                <div>
                    <div class="flex justify-center lg:justify-start mt-0 mb-2 px-32">
                        <form action="{{ route('register.store') }}" method="POST">
                            @csrf
                            <h2 class="text-3xl mb-2 font-semibold text-gray-800 md:text-4xl"> Registrarse
                            </h2>
                            <div class="mb-6">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Nombre</label>
                                <x-input-text type="text" id="name" name="name" placeholder="Nombre + Apellido" />
                            </div>
                            <div class="mb-6">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Correo electrónico</label>
                                <x-input-text type="email" id="email" name="email" placeholder="name@company.com" />
                            </div>
                            <div class="mb-6">
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Contraseña</label>
                                <x-input-text type="password" id="password" name="password" placeholder="••••••••" />
                            </div>
                            <div class="mb-6">
                                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Repetir contraseña</label>
                                <x-input-text type="password" id="password_confirmation" name="password_confirmation" placeholder="••••••••" />
                            </div>
                            <div class="mb-6">
                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    No. de celular</label>
                                <x-input-text type="number" id="phone" name="phone" placeholder="ej: 00000000" />
                            </div>

                            <x-button type_button="primary" type="submit">
                                Crear cuenta
                            </x-button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="hidden lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
                <div class="h-full object-cover" style="background-image: url(https://media.istockphoto.com/id/826047982/es/foto/compra-en-l%C3%ADnea-concepto.jpg?s=1024x1024&w=is&k=20&c=cLlJno6jDcfPLVT3j6TrVAaOkJ6j3Cy9I1ImD05S_E8=)">
                    <div class="h-full bg-black opacity-25"></div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.client-layout>
