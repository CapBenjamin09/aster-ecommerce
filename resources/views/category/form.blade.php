@php
    $edit = isset($category)
@endphp
<div class="mb-4">
    <x-label>
        Nombre de categoria:
    </x-label>
    <x-input-text id="name" name="name" type="text" value="{{ $edit ? old( 'name', $category->name) : old('name') }}"/>
    @error('name')
        <x-error-alert title="Error">{{ $message }}</x-error-alert>
    @enderror
</div>
<div>
    <x-label>
        Imagen de categoria:
    </x-label>
    @if($edit)
        <img src="{{ asset($category->image_path) }}" alt="{{ $category->name }}">
    @endif
    <x-input-text id="image_path" name="image_path" type="file" />
    @error('image_path')
        <x-error-alert title="Error">{{ $message }}</x-error-alert>
    @enderror
</div>
