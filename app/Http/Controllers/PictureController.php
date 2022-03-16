<?php

namespace App\Http\Controllers;

use Str;
use Arr;
use App\Models\Picture;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

/**
 * This class is the controller of {@link \App\Models\Picture}.
 */
class PictureController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param \App\Models\Gallery $gallery
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Gallery $gallery): View
    {
        return view('galleries.pictures.index', [
            'pictures' => $gallery->pictures,
            'gallery'  => $gallery,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param \App\Models\Gallery $gallery
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create(Gallery $gallery): View
    {
        return view('galleries.pictures.create', compact('gallery'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Gallery      $gallery
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Gallery $gallery): RedirectResponse
    {
        $picture = Picture::make($request->all());
        $picture->gallery()->associate($gallery);

        $picture->path = $request->file('picture_file')?->store(
            'my-galleries/' . $gallery->id, 's3'
        );

        $picture->save();

        return redirect()->route('galleries.pictures.index', $gallery);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Gallery      $gallery
     * @param \App\Models\Picture      $picture
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\View\View|\Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function show(Gallery $gallery, Picture $picture, Request $request)
    {
        if (Str::startsWith(Arr::first($request->getAcceptableContentTypes()), 'image/')) {
            return Storage::disk('s3')->download($picture->path);
        }

        return view('galleries.pictures.show', compact('picture', 'gallery'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Gallery $gallery
     * @param \App\Models\Picture $picture
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Gallery $gallery, Picture $picture): RedirectResponse
    {
        $picture->delete();

        return redirect()->route('galleries.pictures.index', $gallery);
    }
}
