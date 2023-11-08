@php
    $edit = isset($product)
@endphp

<div>
    @if($edit)
        <div class="flex justify-center">
            <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}" class="px-5 py-1 rounded-full object-cover h-48 w-50">
        </div>
    @endif
        <x-label>
            Imagen de producto:
        </x-label>
    <x-input-text2 id="image_path" name="image_path" type="file" />
    @error('image_path')
    <x-error-alert title="Error:">{{ $message }}</x-error-alert>
    @enderror
</div>

<div class="mb-4">
    <x-label>
        Nombre de producto:
    </x-label>
    <x-input-text2 id="name" name="name" placeholder="Escribe el nombre del producto" type="text" value="{{ $edit ? old( 'name', $product->name) : old('name') }}"/>
    @error('name')
        <x-error-alert title="Error:">{{ $message }}</x-error-alert>
    @enderror
</div>
<div class="mb-4">
    <x-label>
        Descripción:
    </x-label>
    <x-text-area id="detail" name="detail" placeholder="Escribe la descripcion del producto...">
        {{$edit ? old('detail', $product->detail) : old('detail') }}
    </x-text-area>
    @error('detail')
        <x-error-alert title="Error:">{{ $message }}</x-error-alert>
    @enderror
</div>
<div class="mb-4">
    <x-label>
        Precio:
    </x-label>
    <x-input-text2 id="price" name="price" type="number" step=".01" value="{{ $edit ? old( 'price', $product->price) : old('price') }}"/>
    @error('price')
        <x-error-alert title="Error:">{{ $message }}</x-error-alert>
    @enderror
</div>
<div class="mb-4">
    <x-label>
        Stock:
    </x-label>
    <x-input-text2 id="stock" name="stock" type="number" value="{{ $edit ? old( 'stock', $product->stock) : old('stock') }}"/>
    @error('stock')
        <x-error-alert title="Error:">{{ $message }}</x-error-alert>
    @enderror
</div>
<div class="mb-4">
    <x-label>
        Categoria:
    </x-label>
    <select id="category_id" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @if($edit)
            <option selected value="{{ $product->category_id }}">{{ $product->category->name }}</option>
        @endif
        @foreach($categories as $category)
            @if($edit)
                @if($category->id == $product->category_id)

                @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
            @else
                <option selected value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
        @endforeach
    </select>

</div>

