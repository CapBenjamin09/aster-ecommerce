<x-layouts.guest-layout title="Recuperar contraseña">

    <div class="justify-center mx-auto py-32">
<div class="container">


    <div class="flex-wrap box-content h-96 w-96 max-w-sm p-10 bg-white border border-yellow-200 rounded-lg shadow">
    <h1 class="text-2xl font-bold mb-6 text-center mt-10">Recuperar Contraseña</h1>

    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <form action="{{ route('enviar-recuperacion') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold pt-10 mb-2">Correo Electrónico</label>
            <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Ingrese su correo electrónico">
        </div>
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
        <div class="flex items-center">
            <button type="submit" class="bg-yellow-500 mt-5 hover:bg-yellow-200 text-gray-800 font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline">
                Enviar Email de recuperación</button>
        </div>
    </form>
</div>

</div>
    </div>

</x-layouts.guest-layout>


