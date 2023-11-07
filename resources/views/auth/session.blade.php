<x-layouts.client-layout title="Iniciar sesión">

<!-- component -->
<div class="w-full">

    <div class="flex bg-white" style="height:700px;">
        <div class="flex items-center text-center lg:text-left px-2 md:px-12 lg:w-1/2">
            <div>
                <div class="flex justify-center lg:justify-start mt-2 mb-2 px-32">
                    <form action="{{ route('session.store') }}" method="POST">
                        @csrf

                        <h2 class="text-3xl mb-2 font-semibold text-gray-800 md:text-4xl">Iniciar Sesión
                        </h2>

                        @if(session('status'))
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                <span class="font-medium">Alert!</span> {{session('status')}}
                            </div>
                        @endif

                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Correo electrónico</label>
                            <x-input-text type="email" id="email" name="email" placeholder="name@company.com" />
                            @error('email')
                            <p class="text-red-700 my-1 rounded-lg text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Contraseña</label>
                            <x-input-text type="password" id="password" name="password" placeholder="••••••••" />
                            @error('email')
                            <p class="text-red-700 my-1 rounded-lg text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-start mb-6">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded
                                bg-gray-50 focus:ring-3 focus:ring-blue-300"  >
                            </div>
                            <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Remember me</label>
                        </div>
                        <x-button type_button="primary" type="submit">
                            Iniciar sesión
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
