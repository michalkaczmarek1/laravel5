<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MovieRequest;
use App\Movie;
use App\Actor;
use Session;

class MovieController extends Controller
{
    
    public function __construct() 
    {
        $this->middleware('auth', ['except' => 'index']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view("movies.listAdminAll")->with("movies", $movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actors= Actor::pluck('surname', 'id');
        
        return view('movies.create')->with('actors', $actors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieRequest $request)
    {
//        dd($request->all());
        $movie = new Movie($request->all());
        $movie->save();
        
        $actorIds = $request->input('ActorList');
        $movie->actors()->attach($actorIds);
        
        Session::flash('movie_created', 'Film został zapisany w bazie');
        return redirect('/admin/movies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.show')->with('movie', $movie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actors = Actor::pluck('surname', 'id');
        $movie = Movie::findOrFail($id);
        
        return view('movies.edit', compact('movie', 'actors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MovieRequest $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());
        $movie->actors()->sync($request->input('ActorList'));
        
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect("/admin");
    }
}
