<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;


class HistoryController extends Controller
{




    public function create()
    {
        return view('history.create');
    }

    public function index()
    {
        return view('admin.dashboard.histories.index');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([

            'titre' => 'required|max:255',
            'ville' => 'required',
            'pays' => 'required',
            'date' => 'required',
            'description' => 'required|max:1024',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'longitude' => 'required',
            'latitude' => 'required',
            'categories' => 'required',
            'subcategories' => 'required',
            'subcategories.*' => 'exists:sub_category,id',
            'categories.*' => 'exists:category,id',

            'victime_sexe' => 'boolean',
            'victime_age' => 'numeric',
            'victime_nom' => 'max:255',
            'victime_profession' => 'max:255',

            'agresseur_nom' => 'max:255',
            'agresseur_sexe' => 'boolean',
            'agresseur_age' => 'numeric',
            'agresseur_profession' => 'max:255',
            'casier' => 'boolean',
            'fichies' => 'boolean',
            'alcoolise' => 'boolean',
            'drogue' => 'boolean',
            'mentale' => 'boolean',
            'citybirth' => 'max:255',

            'jugement' => 'max:1024',

            'url' => 'max:255',

        ]);





        $history = new History();
        $history->titre = $validate['titre'];
        $history->ville = $validate['ville'];
        $history->pays = $validate['pays'];
        $history->date = $validate['date'];
        $history->description = $validate['description'];
        $history->longitude = $validate['longitude'];
        $history->latitude = $validate['latitude'];
        $history->victime_gender = $validate['victime_sexe'];
        $history->victime_age = $validate['victime_age'];
        $history->victime_name = $validate['victime_nom'];
        $history->victime_profession = $validate['victime_profession'];
        $history->agresseur_nom = $validate['agresseur_nom'];
        $history->agresseur_sexe = $validate['agresseur_sexe'];
        $history->criminal_age = $validate['agresseur_age'];
        $history->criminal_birth_place = $validate['agresseur_profession'];
        $history->casier = $validate['casier'];
        $history->fichies = $validate['fichies'];
        $history->alcoolise = $validate['alcoolise'];
        $history->drogue = $validate['drogue'];
        $history->mentale = $validate['mentale'];
        $history->citybirth = $validate['citybirth'];
        $history->jugement = $validate['jugement'];
        $history->url = $validate['url'];

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('\images\history', 'public');
            $history->image = $path;
        }




        $history->save();
        $history->Categories()->attach($validate['categories']);
        $history->SubCategories()->attach($validate['subcategories']);
        return redirect()->route('action.history.create')->with('status', '  History added  ');




    }
}

