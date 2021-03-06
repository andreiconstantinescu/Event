<?php

namespace App\Http\Controllers;

use App\Event;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\User;
use Image;
use Storage;
use File;

class EventController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }
    

    public function index()
    {
        // create a variable and store all the events in it from the db
        $events = Event::orderBy('startdate', 'asc')->paginate(2);

        //return a view and pass in the above variable
        return view('events.index')->withEvents($events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('events.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request, array(
            'title'       => 'required|max:255',
            'location'    => 'required',
            'startdate'   => 'required|date',
            'starttime'   => 'required',
            'enddate'     => 'required|date|after:startdate',
            'endtime'     => 'required',
            'price'       => 'digits_between:0,9999',
            'currency'    => 'required',
            'category_id'    => 'required|integer', 
            'description' => 'required',
            'image'       => 'sometimes|image',

        ));

        //store in DB
        $event = new Event;

        $event->creator_id = Auth::user()->id;
        $event->title     = $request->title;
        $event->location  = $request->location;
        $event->startdate = $request->startdate;
        $event->starttime = $request->starttime;
        $event->enddate   = $request->enddate;
        $event->endtime   = $request->endtime;
        $event->price     = $request->price;
        $event->currency  = $request->currency;
        $event->category_id = $request->category_id;
        $event->description = $request->description;

        //upload image
        if ($request->hasFile('image')) {
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Image::make($image)->resize(800, 400)->save($location);
          $event->image = $filename;
        }

        $event->save();

      //  $event->users()->sync($user->id, false);

        Session::flash('success', 'The event was successfully saved!');

        return redirect()->route('events.show', $event->id);

        //redirect to another page
    }

    public function show($id)
    {
        $event = Event::find($id);
        return view('events.show')->withEvent($event);
    }


    public function isAttending($id) {
        return json_encode(array("status" => "success", "attending" => Event::find($id)->attending(Auth::user()->id)));
    }

    public function toggleAttend($id) {
        $event = Event::find($id);

        $attending = $event->attending(Auth::user()->id);
        if (!$attending) {
            $event->users()->attach(Auth::user()->id);
        }
        else {
            $event->users()->detach(Auth::user()->id);
        }

        return json_encode(array("status" => "success", "attending" => !$attending));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   

        // find the post in the db and save it as a variable
        $event = Event::find($id);
        $categories = Category::all();
        //return the view and pass it in the var we previously created
        return view('events.edit')->withEvent($event)->withCategories($categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validate the data
             $this->validate($request, array(
            'title'       => 'required|max:255',
            'location'    => 'required',
            'startdate'   => 'required|date',
            'starttime'   => 'required',
            'enddate'     => 'required|date|after:startdate',
            'endtime'     => 'required',
            'price'       => 'digits_between:0,9999',
            'currency'    => 'required',
            'category_id' => 'required|integer',
            'description' => 'required',
            'image'       => 'image',

        ));

        //save the data to the db
             $event = Event::find($id);

             $event->title = $request->input('title');
             $event->location = $request->input('location');
             $event->startdate = $request->input('startdate');
             $event->starttime = $request->input('starttime');
             $event->enddate = $request->input('enddate');
             $event->endtime = $request->input('endtime');
             $event->price = $request->input('price');
             $event->currency = $request->input('currency');
             $event->category_id = $request->input('category_id');
             $event->description = $request->input('description');

             if ($request->hasFile('image')) {
                //add new photo
              $image = $request->file('image');
              $filename = time() . '.' . $image->getClientOriginalExtension();
              $location = public_path('images/' . $filename);
              Image::make($image)->resize(800, 400)->save($location);
              $oldFilename = $event->image;

              //update db
               $event->image = $filename;

              //delete the old photo
              Storage::delete($oldFilename);
             //  File::delete('images/', $oldFilename);
             //  if ($oldFilename)
             //   unlink(public_path('images/' . $oldFilename));
          }

             $event->save();
        //set flash data with success message
             Session::flash('success', 'This post was successfully saved.');

        //redirect with flash data to events.show
             return redirect()->route('events.show', $event->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
       // $event->users()->detach();

        Storage::delete($event->image);
        $event->delete();

        Session::flash('success', 'The event was successfully deleted.');

        return redirect()->route('events.index');
    }
}
