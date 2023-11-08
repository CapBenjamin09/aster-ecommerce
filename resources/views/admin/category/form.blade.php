@php
    $edit = isset($category)
@endphp

<div>

    @if($edit)
        <div class="flex justify-center">
        <img src="{{ asset($category->image_path) }}" alt="{{ $category->name }}" class="px-5 mt-5 object-cover h-48 w-50">
        </div>
    @endif
        <x-label>
            Imagen de categoria:
        </x-label>
    <x-input-text2 id="image_path" name="image_path" type="file" />
    @error('image_path')
    <x-error-alert title="Error">{{ $message }}</x-error-alert>
    @enderror
</div>

<div class="mb-4">
    <x-label>
        Nombre de categoria:
    </x-label>
    <x-input-text2 id="name" name="name" type="text" value="{{ $edit ? old( 'name', $category->name) : old('name') }}"/>
    @error('name')
        <x-error-alert title="Error">{{ $message }}</x-error-alert>
    @enderror
</div>

