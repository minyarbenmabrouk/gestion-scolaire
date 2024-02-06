<?php

namespace App\Http\Controllers;

use App\Models\NiveauScolaire;
use Illuminate\Http\Request;

class NiveauScolaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $niveau_scolaires = NiveauScolaire::with('etudiants')->get();
        return $niveau_scolaires;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $niveauscolaire = new NiveauScolaire([
            'nomsetudiant' => $request->input('nomsetudiant'),
            'imagesetudiant' => $request->input('imagesetudiant'),
            'etudiantID' => $request->input('etudiantID'),
            ]);
            $niveauscolaire->save();
            return response()->json($niveauscolaire,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NiveauScolaire  $niveauScolaire
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $niveauscolaire = NiveauScolaire::find($id);
        return response()->json($niveauscolaire);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NiveauScolaire  $niveauScolaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $niveauscolaire = NiveauScolaire::find($id);
        $niveauscolaire->update($request->all());
        return response()->json($niveauscolaire,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NiveauScolaire  $niveauScolaire
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $niveauscolaire = NiveauScolaire::find($id);
        $niveauscolaire->delete();
        return response()->json('niveau scolaire supprimée !');
    }
    public function showNiveauScolaireByCAT($idetd)
    {
       $Niveauscolaire= NiveauScolaire::where('etudiantID', $idetd)-
      >with('etudiants')->get();
      return response()->json($Niveauscolaire);
    }
}
