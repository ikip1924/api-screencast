@csrf
<div class="mb-6">
    <input type="file" name="thumbnail" id="thumbnail" />
    @error('thumbnail')
        <div class="text-red-500 mt-2"> {{ $message }}</div>
    @enderror
</div>
<div class="mb-6">
    <x-label for="name" :value="__('name')" />
    <x-input type="text" id="name" class="block mt-1 w-full" type="name" name="name"
        :value="old('name') ?? $playlist->name" required />
    @error('name')
        <div class="text-red-500 mt-2"> {{ $message }}</div>
    @enderror
</div>
<div class="mb-6">
    <x-label for="price" :value="__('price')" />
    <x-input type="text" id="price" class="block mt-1 w-full" type="price" name="price"
        :value="old('price') ?? $playlist->price" required />
    @error('price')
        <div class="text-red-500 mt-2"> {{ $message }}</div>
    @enderror
</div>
<div class="mb-6">
    <x-label for="description" :value="__('Description')" />
    <x-textarea type="text" id="description" name="description" required>
        {{ old('description') ?? $playlist->description }}
    </x-textarea>
    @error('description')
        <div class="text-red-500 mt-2"> {{ $message }}</div>
    @enderror
</div>
<div class="mb-6">
    <x-label for="tags" value="Tags" />
    <select multiple name="tags[]" id="tags"
        class="w-full mt-2 border border-gray-300 focus:outline-none rounded-lg-border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200">
        @foreach ($tags as $tag)
            <option {{ $playlist->tags()->find($tag->id) ? 'selected' : ' ' }} value="{{ $tag->id }}">
                {{ $tag->name }}</option>
        @endforeach
    </select>
</div>
<x-button>{{ $submit }}</x-button>
