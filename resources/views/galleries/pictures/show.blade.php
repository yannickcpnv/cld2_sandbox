<x-layout.app>
    <x-slot name="titlePage">Picture N°{{ $picture->id }}</x-slot>
    <a href="{{ route('galleries.pictures.index', $gallery) }}">All pictures in {{ $gallery->name }}</a>
    <p>Title : {{ $picture->title }} </p>
    <form method="post" action="{{ route('galleries.pictures.destroy', [$gallery, $picture])}}">
        @method('delete')
        @csrf
        <input type="submit" value="Delete">
    </form>
</x-layout.app>
