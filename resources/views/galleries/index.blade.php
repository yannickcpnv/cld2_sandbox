<x-layout.app>
    @foreach ($galleries as $gallery)
        <p> {{ $gallery->name }} </p>
    @endforeach
</x-layout.app>
