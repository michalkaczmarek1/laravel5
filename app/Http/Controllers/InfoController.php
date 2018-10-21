<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Actor;
use App\Client;
use App\Employer;


class InfoController extends Controller
{
    /**
     * Zwraca stronę główną serwisu
     * @return type
     */
    public function index() 
    {
        return view("index");
    }
    
    /**
     * Zwraca stronę kontakt
     * @return type
     */
    public function contact() 
    {
        return view("contact");
    }
    
    /**
     * Zwraca ostatnie 5 filmów dodane do oferty
     * @return type
     */
    public function indexLastMovie() 
    {
        $movies = Movie::take(5)->get()->sortByDesc("year");
        
        return view("movies.list")->with('movies', $movies);
        
    }
    
    /**
     * Zwraca liste wszystkich filmów
     * @return type
     */
    public function indexMovies() 
    {
        $movies = Movie::all();
        
        return view("movies.listAll")->with('movies', $movies);
        
    }
    
    /**
     * Zwraca listę aktorów
     * @return type
     */
    public function indexActors() 
    {
        $actors = Actor::all();
        
        return view("actors.listAll")->with('actors', $actors);
        
    }
    
    /**
     * Zwraca pojedynczy film
     * @param type $id - id fllmu
     * @return type
     */
    public function showMovie($id) 
    {
        $movie = Movie::findOrFail($id);
        
        return view("movies.show")->with('movie', $movie);
    }
    
    /**
     * Zwraca pojedynczego aktora
     * @param type $id - id aktora
     * @return type
     */
    public function showActor($id) 
    {
        $actor = Actor::findOrFail($id);
        
        return view("actors.show")->with('actor', $actor);
    }
    
    /**
     * 
     * @return \Illuminate\Http\Response
     */
    public function admin() 
    {
        
        $actors = Actor::take(3)->get()->sortByDesc("created_at");
        $movies = Movie::take(3)->get()->sortByDesc("created_at");
        $clients = Client::take(3)->get()->sortByDesc("created_at");
        $employers = Employer::take(3)->get()->sortByDesc("created_at");
        
        return view("admin.admin", compact('actors', 'movies', 'clients', 'employers'));
    }
    
    
    
    
    
    
    
    
    
    
}
