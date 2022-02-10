<x-layout.app>
    <x-slot name="titlePage">Gallery N°{{ $gallery->id }}</x-slot>
    <a href="{{ route('galleries.index') }}">All galleries</a>
    <p>Name : {{ $gallery->name }} </p>
    <a href="{{ route('galleries.pictures.index', $gallery) }}">See pictures ({{ $gallery->pictures->count() }})</a>
</x-layout.app>
