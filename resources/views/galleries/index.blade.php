<x-layout.app>
    <x-slot name="titlePage">Galleries list</x-slot>
    <a href="{{ route('galleries.create') }}">Créer une gallerie</a>
    <table>
        <thead>
            <th>Name</th>
        </thead>
        <tbody>
            @foreach ($galleries as $gallery)
                <tr>
                    <td><a href="{{ route('galleries.show', $gallery->id) }}">{{ $gallery->name }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout.app>
