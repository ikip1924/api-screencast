<x-app-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <x-slot name="header">{{ $title }}</x-slot>

    <form action="{{ route('tags.edit', $tag->slug) }}" method="POST">
        @method('put')
        @include('tags.__form-control', [
        'submit' => "Update"
        ])
    </form>

</x-app-layout>
