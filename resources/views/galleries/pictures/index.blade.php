<x-layout.app>
    <x-slot name="titlePage">
        Gallery N°{{ $gallery->id }}
    </x-slot>
    <a href="{{ route('galleries.index') }}">All galleries</a>
    <p>Name : {{ $gallery->name }} </p>
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
                             src="{{ route('galleries.pictures.show', [$gallery->id, $picture->id]) }}"
                             width="50"
                        >
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('galleries.pictures.create', $gallery) }}">Add picture</a>
</x-layout.app>
