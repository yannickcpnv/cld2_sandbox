<x-layout.app>
    <x-slot name="titlePage">Gallery N°{{ $gallery->id }}</x-slot>
    <a href="{{ route('galleries.index') }}">Toutes les galleries</a>
    <p> Name : {{ $gallery->name }} </p>
</x-layout.app>
