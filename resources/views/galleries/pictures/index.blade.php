<x-layout.app>
    <x-slot name="titlePage">
        Pictures list of <a href="{{ route('galleries.show', $gallery) }}">{{ $gallery->name }}</a>
    </x-slot>
    <a href="{{ route('galleries.pictures.create', $gallery) }}">Add picture</a>
    <table>
        <caption>Galleries</caption>
        <thead>
            <th scope="col">Name</th>
        </thead>
        <tbody>
            @foreach ($pictures as $picture)
                <tr>
                    <td>
                        <a href="{{ route('galleries.pictures.show', [$gallery, $picture]) }}">
                            {{ $picture->title }}
                        </a>
                    </td>
                    <td>
                        <img alt="{{ $picture->title }}"
                             height="50"
                             src="{{ Storage::url($picture->path) }}"
                             width="50"
                        >
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout.app>
