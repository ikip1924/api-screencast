<x-app-layout>
    <x-slot name="title">
        Your Playlist
    </x-slot>
    <x-slot name="header">
        Your Playlist
    </x-slot>

    <x-table class="w-full">
        <tr>
            <x-th>#</x-th>
            <x-th>Name</x-th>
            <x-th>Published</x-th>
            <x-th>Action</x-th>
        </tr>

        @foreach ($playlists as $item)
            <tr>
                <x-td>
                    {{ $playlists->count() * ($playlists->currentPage() - 1) + $loop->iteration }}</x-td>
                <x-td>
                    <div>
                        <a class="block text-blue-500 hover:text-blue-600 hover:underline text-sm"
                            href="{{ route('videos.table', $item->slug) }}">
                            {{ $item->name }}
                        </a>
                        @foreach ($item->tags as $tag)
                            <span class="mr-2 text-xs"> {{ $tag->name }} </span>
                        @endforeach
                    </div>
                </x-td>
                <x-td>{{ $item->created_at->format('d F, Y') }}
                </x-td>
                <x-td>
                    <div class="flex items-center">
                        <a class="text-blue-500 hover:text-blue-600 font-medium uppercase underline"
                            href=" {{ route('videos.create', $item->slug) }}">Add</a>
                        <a class="mx-2 text-blue-500 hover:text-blue-600 font-medium uppercase underline"
                            href=" {{ route('playlists.edit', $item->slug) }}">Edit</a>
                        <div x-data="{modalIsOpen:false}">
                            <x-modal state="modalIsOpen" x-show="modalIsOpen" title="Are You Sure">
                                <div class="flex items-center">
                                    <form class="mr-4" action="{{ route('playlists.delete', $item->slug) }}"
                                        method="post">
                                        @csrf
                                        @method('delete')
                                        <x-button @click="modalIsOpen = true">
                                            Yes
                                        </x-button>
                                    </form>
                                    <x-button type="button" @click="modalIsOpen = false">
                                        Nope
                                    </x-button>
                                </div>
                            </x-modal>
                            <button @click="modalIsOpen = true"
                                class="focus:outline-none text-red-500 hover:text-red-600 font-medium uppercase underline">
                                Delete
                            </button>
                        </div>
                    </div>
                    </div>
                </x-td>
            </tr>
        @endforeach
    </x-table>

    {{ $playlists->links() }}
</x-app-layout>
