<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\EventNotification;
use Illuminate\Support\Facades\Gate;
use App\Notifications\NewUserNotification;
use Illuminate\Support\Facades\Notification;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('all-events');
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
            'month' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'address' => 'required',
            'content' => 'required'

        ]);

        $eventimage = rand().time().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads/images'), $eventimage);


        Event::create([
            'date' => $request->date,
            'month' => $request->month,
            'image' => $eventimage,
            'address' => $request->address,
            'content' => $request->content

        ]);
        $user = User::get();
        $event= Event::latest()->first();
        Notification::send($user, new EventNotification($event));


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
        $event = Event::findOrFail($id);

        return view('admin.events.view', compact('event'));
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
            'month' => 'required',
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
            'month' => $request->month,
            'image' => $eventimage,
            'address' => $request->address,
            'content' => $request->content
        ]);


        return redirect()
        ->route('admin.events.index')
        ->with('msg',__('admin.Event updated successfully'))
        ->with('type', 'success');
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
        ->with('type', 'success');
    }
}
