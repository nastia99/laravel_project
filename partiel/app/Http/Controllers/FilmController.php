<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modele\Categorie;
use App\modele\Film;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.

     * @return \Illuminate\Http\Response
     */
    public function index($laCategorie = null)
    {
        $query = $laCategorie ? Categorie::where('id',"$laCategorie")->firstOrFail()->films() : Film::query();
        $lesFilms = $query->get();
        $categories = Categorie::all();
        return view('listeFilms', compact('lesFilms', 'categories', 'laCategorie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('creerFilm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        $categorie = $film->categorie;
        return view('afficherFilm',compact('film','categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        //return view('modifierFilm',compact('film'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Film $film)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        //Le film est supprimé de la base de données.
        //La méthode back() permet de retourner sur la même page (listerFilm).
        //La méthode with() permet de stocker une information en session.
        $film->delete();
        return back()->with('info', 'Le film a bien été supprimé dans la base de données.');
    }

}
