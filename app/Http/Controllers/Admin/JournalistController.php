<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Journalist;
use Illuminate\Http\Request;

class JournalistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $journalists = Journalist::latest('id')->paginate(6);
        return view('admin.journalists.index',compact('journalists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.journalists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'writer' => 'required',
            'title' => 'required',
            'content' => 'required'

        ]);

        Journalist::create([
            'date' => $request->date,
            'writer' => $request->writer,
            'title' => $request->title,
            'content' => $request->content

        ]);
        return redirect()
        ->route('admin.journalists.index')
        ->with('msg', 'Journalist added successfully')
        ->with('type', 'success');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $journalist = Journalist::findOrFail($id);

        return view('admin.journalists.edit', compact('journalist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'date' => 'required',
            'writer' => 'required',
            'title' => 'required',
            'content' => 'required'
        ]);

        $journalist = Journalist::findOrFail($id);




        $journalist->update([
            'date' => $request->date,
            'writer' => $request->writer,
            'title' => $request->title,
            'content' => $request->content
        ]);


        return redirect()
        ->route('admin.journalists.index')
        ->with('msg', 'Journalist updated successfully')
        ->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Journalist::destroy($id);

        return redirect()
        ->route('admin.journalists.index')
        ->with('msg', 'Journalist deleted successfully')
        ->with('type', 'danger');
    }
}
