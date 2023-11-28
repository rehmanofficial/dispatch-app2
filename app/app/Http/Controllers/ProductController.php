<?php

namespace App\Http\Controllers;

use App\Models\Load;
use App\Http\Requests\StoreloadRequest;
use App\Http\Requests\UpdateloadRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class LoadController extends Controller
{
    /**
     * Instantiate a new LoadController instance.
     */
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:create-load|edit-load|delete-load', ['only' => ['index','show']]);
       $this->middleware('permission:create-load', ['only' => ['create','store']]);
       $this->middleware('permission:edit-load', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-load', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('loads.index', [
            'loads' => Load::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('loads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreloadRequest $request): RedirectResponse
    {
        Load::create($request->all());
        return redirect()->route('loads.index')
                ->withSuccess('New load is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Load $load): View
    {
        return view('loads.show', [
            'load' => $load
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Load $load): View
    {
        return view('loads.edit', [
            'load' => $load
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateloadRequest $request, load $load): RedirectResponse
    {
        $load->update($request->all());
        return redirect()->back()
                ->withSuccess('load is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Load $load): RedirectResponse
    {
        $load->delete();
        return redirect()->route('loads.index')
                ->withSuccess('load is deleted successfully.');
    }
}