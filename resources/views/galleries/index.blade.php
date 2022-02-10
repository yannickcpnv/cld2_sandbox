<x-layout.app>
    <x-slot name="titlePage">Galleries list</x-slot>
    <a href="{{ route('galleries.create') }}">Add gallery</a>
    <table>
        <caption>Galleries</caption>
        <thead>
            <th scope="col">Name</th>
        </thead>
        <tbody>
            @foreach ($galleries as $gallery)
                <tr>
                    <td>
                        <a href="{{ route('galleries.show', $gallery) }}">
                            {{ $gallery->name }}
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout.app>
