<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class GalleryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('galleries.index', ['galleries' => Gallery::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create(): View
    {
        return view('galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        Gallery::create($request->all());

        return redirect(route('galleries.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Gallery $gallery
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function show(Gallery $gallery): RedirectResponse
    {
        return redirect()->route('galleries.pictures.index', $gallery);
    }
}
