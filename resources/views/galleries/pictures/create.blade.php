<x-layout.app>
    <x-slot name="titlePage">Create a picture for gallery {{ $gallery->name }}</x-slot>
    <form action="{{ route('galleries.pictures.store', $gallery) }}"
          method="post"
          enctype="multipart/form-data"
    >
        @csrf
        <label for="title">Title :</label>
        <input type="text" name="title" placeholder="Title" id="title">

        <br>

        <label for="picture_file">Picture file</label>
        <input type="file" name="picture_file" id="picture_file">

        <br>

        <input type="submit" value="Create">
    </form>
</x-layout.app>
