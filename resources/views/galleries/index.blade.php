<x-layout.app>
    <x-slot name="titlePage">Galleries list</x-slot>
    <table>
        <thead>
            <th>Name</th>
        </thead>
        <tbody>
            @foreach ($galleries as $gallery)
                <tr>
                    <td>{{ $gallery->name }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout.app>
