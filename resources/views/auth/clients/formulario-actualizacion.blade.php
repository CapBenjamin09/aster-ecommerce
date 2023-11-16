
<x-layouts.guest-layout title="Cambiar contraseña">

    <div class="justify-center mx-auto py-20">
        <div class="container">


            <div class="flex-wrap box-content h-[600px] w-96 max-w-sm p-10 bg-white border border-yellow-200 rounded-lg shadow">
                <h1 class="text-2xl font-bold mb-6 text-center mt-4">Cambiar Contraseña</h1>


                <form action="{{ route('actualizar-contrasenia') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-2">
                        <label for="email" class="block text-gray-700 font-bold pt-10 mb-2">Correo Electrónico</label>
                        <input type="email" id="email_address" name="email" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Ingrese su correo electrónico">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="mb-2">
                        <label for="email" class="block text-gray-700 font-bold pt-10 mb-2">Contraseña</label>
                        <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Ingrese su nueva contraseña">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="mb-2">
                        <label for="password_confirmation" class="block text-gray-700 font-bold pt-10 mb-2">Confirmación de contraseña</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Ingrese su contraseña nuevamente">
                    </div>
                    @if ($errors->has('password_confirmation'))
                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                    <div class="flex items-center">
                        <button type="submit" class="bg-yellow-500 mt-5 hover:bg-yellow-200 text-gray-800 font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline">
                            Cambiar contraseña</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-layouts.guest-layout>
