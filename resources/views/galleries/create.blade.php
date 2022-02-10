<x-layout.app>
    <x-slot name="titlePage">Create a gallery</x-slot>
    <form action="{{ route('galleries.store') }}" method="post">
        @csrf
        <label for="name">Name :</label>
        <input type="text" name="name" placeholder="Name" id="name" autocomplete="off">

        <input type="submit" value="Create">
    </form>
</x-layout.app>
