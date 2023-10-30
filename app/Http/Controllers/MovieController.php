<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function create()
    {
        return view('movie.create');
    }

    public function store(MovieRequest $request)
    {
        Movie::create([
            'title' => $request->input('title'),
            'director' => $request->input('director'),
            'genre' => $request->input('genre'),
            'img' => ($request->file('img') == null) ? 'default.jpg' : $request->file('img')->store('public/movies'),
            'released_at' => $request->input('released_at'),
            'description' => $request->input('description'),
        ]);

        return to_route('homepage')->with('message', 'Movie creato con successo');
    }

    public function index()
    {

        $movies = Movie::orderBy('title')->get();
        return view('movie.index', compact('movies'));
    }

    public function show(Movie $movie)
    {
        return view('movie.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        return view('movie.edit', compact('movie'));
    }

    public function update(Request $request, Movie $movie) //prendo i dati inviati nel form, e li passo alla Request
    {
        $imgMovieOld = $movie->img; //salvo il path dell'immagine precente

        $movie->update([ // il metodo update, applicato ad un oggetto, esegue l'update sul DB delle colonne
            'title' => $request->input('title'),
            'director' => $request->input('director'),
            'genre' => $request->input('genre'),
            'img' => ($request->file('img') == null) ? $movie->img : $request->file('img')->store('public/movies'),
            'released_at' => $request->input('released_at'),
            'description' => $request->input('description'),
        ]);

        if ($request->file('img') !== null) {  // verifico se c'è la nuova immagine

            Storage::delete($imgMovieOld);  // sì? cancella la vecchia immagine
        }

        return to_route('homepage')->with('message', 'Movie update successully');
    }


    public function delete(Movie $movie) // sull'oggetto movie, richiamo il metodo delete
    {
        $movie->delete();  // cancello il record/riga dalla tabella movies 
        Storage::delete($movie->img); //cancello l'immagine dallo storage
        return to_route('movie.index')->with('message', 'Movie deleted successfully');
    }
}
