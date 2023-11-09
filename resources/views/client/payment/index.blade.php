<x-layouts.client-layout title="Proceso de pago">



    <div class="grid grid-cols-2 gap-4 mx-auto">
        <div class="container flex items-center justify-center mx-auto">
            <div class="bg-white p-8 rounded-lg shadow-md w-96 ">
                <h1 class="text-xl font-bold mb-4 text-center">Información Personal</h1>
                    <div class="mb-4">
                        <label for="nombre" class="block text-sm font-medium text-gray-600">Nombre</label>
                        <p>Texto</p>
                    </div>

                    <div class="mb-4">
                        <label for="correo" class="block text-sm font-medium text-gray-600">Correo</label>
                        <p>Texto</p>
                    </div>

                    <div class="mb-4">
                        <label for="telefono" class="block text-sm font-medium text-gray-600">Teléfono</label>
                        <p>Texto</p>
                    </div>
            </div>
        </div>

        <div class="container flex items-center justify-center mx-auto">
            <div class="bg-white p-8 rounded-lg shadow-md w-96 ">
                <h1 class="text-xl font-bold mb-4 text-center">Dirección de envío</h1>

                <form class="mx-auto">
                    <div class="mb-4">
                        <label for="department" class="block text-sm font-medium text-gray-600">Departamento</label>
                        <input type="text" id="department" name="department" class="w-full border rounded p-2">
                    </div>

                    <div class="mb-4">
                        <label for="address" class="block text-sm font-medium text-gray-600">Dirección</label>
                        <input type="text" id="address" name="address" class="w-full border rounded p-2">
                    </div>

                    <div class="mb-4">
                        <label for="telefono" class="block text-sm font-medium text-gray-600">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono" class="w-full border rounded p-2">
                    </div>

                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded">Enviar</button>
                </form>
            </div>
        </div>

        <div class="container flex items-center justify-center mx-auto col-span-2">
            <div class="bg-white p-8 rounded-lg shadow-md w-96 ">
                <h1 class="text-xl font-bold mb-4 text-center">Información Personal</h1>

                <form class="mx-auto">
                    <div class="mb-4">
                        <label for="nombre" class="block text-sm font-medium text-gray-600">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="w-full border rounded p-2">
                    </div>

                    <div class="mb-4">
                        <label for="correo" class="block text-sm font-medium text-gray-600">Correo</label>
                        <input type="email" id="correo" name="correo" class="w-full border rounded p-2">
                    </div>

                    <div class="mb-4">
                        <label for="telefono" class="block text-sm font-medium text-gray-600">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono" class="w-full border rounded p-2">
                    </div>

                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded">Enviar</button>
                </form>
            </div>
        </div>
    </div>

</x-layouts.client-layout>
