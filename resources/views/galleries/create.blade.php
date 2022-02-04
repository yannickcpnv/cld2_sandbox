<x-layout.app>
    <x-slot name="titlePage">Create a gallery</x-slot>
    <form action="{{ route('galleries.store') }}" method="post">
        @csrf
        <label for="Name">Name: </label>
        <input type="text" name="name" placeholder="Name" id="Name" autocomplete="off">
    </form>
</x-layout.app>
