<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::latest('id')->paginate(6);
        return view('admin.events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'address' => 'required',
            'content' => 'required'

        ]);

        $eventimage = rand().time().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads/images'), $eventimage);


        Event::create([
            'date' => $request->date,
            'image' => $eventimage,
            'address' => $request->address,
            'content' => $request->content

        ]);
        return redirect()
        ->route('admin.events.index')
        ->with('msg',__('admin.Event added successfully'))
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
        $event = Event::findOrFail($id);

        return view('admin.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'date' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'address' => 'required',
            'content' => 'required'
        ]);

        $event = Event::findOrFail($id);

        $eventimage = $event->image;

        if($request->hasFile('image')) {

            $eventimage = rand().time().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/images'), $eventimage);

        }


        $event->update([
            'date' => $request->date,
            'image' => $eventimage,
            'address' => $request->address,
            'content' => $request->content
        ]);


        return redirect()
        ->route('admin.events.index')
        ->with('msg',__('admin.Event updated successfully'))
        ->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Event::destroy($id);

        return redirect()
        ->route('admin.events.index')
        ->with('msg',__('admin.Event deleted successfully'))
        ->with('type', 'danger');
    }
}
