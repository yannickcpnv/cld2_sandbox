<x-layout.app>
    <x-slot name="titlePage">Create a picture for gallery {{ $gallery->name }}</x-slot>
    <form action="{{ route('galleries.pictures.store', $gallery) }}" method="post">
        @csrf
        <label for="title">Title :</label>
        <input type="text" name="title" placeholder="Title" id="title">

        <input type="submit" value="Create">
    </form>
</x-layout.app>
