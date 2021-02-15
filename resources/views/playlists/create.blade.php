<x-app-layout>
    <x-slot name="title">
        create new playlist
    </x-slot>

    <form action="{{route('playlists.create')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <input type="file" name="thumbnail" id="thumbnail">
        </div>
        <div class="mb-6">
             <x-label for="name" :value="__('name')" />
             <x-input type="text" id="name" class="block mt-1 w-full" type="name" name="name" :value="old('name')" required  />
        </div>
        <div class="mb-6">
             <x-label for="price" :value="__('price')" />
             <x-input type="text" id="price" class="block mt-1 w-full" type="price" name="price" :value="old('price')" required  />
        </div>
        <div class="mb-6">
             <x-label for="description" :value="__('Description')" />
             <x-textarea type="text" id="description"  name="description" required> {{old('description')}}
             </x-textarea>
        </div>
        <x-button>Create</x-button>
    </form>

</x-app-layout>
