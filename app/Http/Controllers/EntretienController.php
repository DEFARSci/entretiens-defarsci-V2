<?php

namespace App\Http\Controllers;

use PDF;
use Carbon\Carbon;
use App\Models\Entretien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class EntretienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entretiens = Entretien::orderBy('id', 'desc')->get();


    return view('index', compact('entretiens'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


         $entretiens = Entretien::all();
    return view('create', compact('entretiens'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $entretiens = new Entretien;


        $entretiens->nom=$request->nom;
        $entretiens->prenom=$request->prenom;
        $entretiens->email=$request->email;
        $entretiens->telephone=$request->telephone;
        $entretiens->addresse=$request->addresse;
        $entretiens->domaine=$request->domaine;
        $entretiens->pourquoi_ce_choix=$request->pourquoi_ce_choix;
        $entretiens->participants=$request->participants;
        $entretiens->presentation_du_candidat=$request->presentation;
        $entretiens->connaissez_vous_defarsci=$request->defarsci;
        $entretiens->comment_voyez_vous_defarsci=$request->comment_voyez_vous_defarsci;
        $entretiens->qu_entendez_de_defarsci=$request->qu_entendez_de_defarsci;
        $entretiens->atouts=$request->atouts;
        $entretiens->faiblesses=$request->faiblesses;
        $entretiens->maladie_ou_allergie=$request->gridRadios;
        $entretiens->objectifs_dans_2ans=$request->objectifs_dans_2ans;
        $entretiens->mois_de_formation=$request->mois_de_formation;
        $entretiens->demarrage=$request->demarrage;
        $entretiens->disponibilite_du_candidat=$request->candidat;
        $entretiens->modalite_paiement=$request->modalite_paiement;
         $entretiens->number_en_cas_d_urgence=$request->number;
          $entretiens->informations_supplementaires=$request->informations;
       //dd($entretiens);
        $entretiens->save();


        return redirect('/dashboard')->with('success', 'Entretien créer avec succèss');


        $sucess='User Created';
        return redirect()->back()->withSucess($sucess);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entretien  $entretien
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entretien = Entretien::find($id);
        return view('show', compact('entretien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entretien  $entretien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entretien = Entretien::find($id);
        return view('edit', compact('entretien'));
    }

    public function search(Request $request)
    {
            $nom=$request->nom;
            $prenom=$request->prenom;
            $entretiens = Entretien::when($nom != null, function ($query) use ($nom) {
                return $query->where('nom', 'like', '%' . $nom . '%');
            })
            ->when($prenom != null, function ($query) use ($prenom) {
                return $query->where('prenom', 'like', '%' . $prenom . '%');
            })
            ->get();

            // dd($entretien);
            return view('search1',compact('entretiens'));

  }

  public function dev( Request $request)
    {
        $domaine=$request->domaine;
        $date=$request->date;
        $alergie=$request->maladie_ou_allergie;

        // dd(Carbon::parse($date)->toDateTimeString());
        $entretiens = Entretien::when($domaine != null, function ($query) use ($domaine) {
            return $query->where('domaine', $domaine);
        })
        ->when($date != null, function ($query) use ($date) {
            return $query->whereDate('created_at', Carbon::parse($date)->toDateString());
        })
        ->when($alergie != null, function ($query) use ($alergie) {
            return $query->where('maladie_ou_allergie', $alergie);
        })
        ->get();
    //    $domaine = $request->input('domaine');
    //    $maladie_ou_allergie = $request->input('maladie_ou_allergie');
    //    $date = $request->input('date');

    //     $entretiens = Entretien::where('domaine', $domaine)
    //                           ->where('maladie_ou_allergie', $maladie_ou_allergie)
    //                           ->whereDate('created_at', $date)
    //                           ->get();
        return view('resultats', compact('entretiens'));
}
  public function export_entretien_pdf($id){
    $entretiens = Entretien::find($id );
        $pdf =PDF::loadView('entretien', ['entretien'=>$entretiens]);
        return $pdf->download('entretien.pdf');
  }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entretien  $entretien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $entretiens = Entretien::find($id);
        $entretiens->nom=$request->nom;
        $entretiens->prenom=$request->prenom;
        $entretiens->email=$request->email;
        $entretiens->telephone=$request->telephone;
        $entretiens->addresse=$request->addresse;
        $entretiens->domaine=$request->domaine;
        $entretiens->pourquoi_ce_choix=$request->pourquoi_ce_choix;
        $entretiens->participants=$request->participants;
        $entretiens->presentation_du_candidat=$request->presentation;
        $entretiens->connaissez_vous_defarsci=$request->defarsci;
        $entretiens->comment_voyez_vous_defarsci=$request->comment_voyez_vous_defarsci;
        $entretiens->qu_entendez_de_defarsci=$request->qu_entendez_de_defarsci;
        $entretiens->atouts=$request->atouts;
        $entretiens->faiblesses=$request->faiblesses;
        $entretiens->maladie_ou_allergie=$request->gridRadios;
        $entretiens->objectifs_dans_2ans=$request->objectifs_dans_2ans;
        $entretiens->mois_de_formation=$request->mois_de_formation;
        $entretiens->demarrage=$request->demarrage;
        $entretiens->modalite_paiement=$request->modalite_paiement;
         $entretiens->number_en_cas_d_urgence=$request->number;
          $entretiens->informations_supplementaires=$request->informations;
       // dd($entretiens);
        $entretiens->update();



        return redirect('/entretiens')->with('success', 'Entretien mise à jour avec succèss');

        $sucess='User Updated';
        return redirect()->back()->withSucess($sucess);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entretien  $entretien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         /*  $entretien = Entretien::findOrFail($id);
    $entretien->delete();

    return redirect('/entretiens')->with('success', 'Entretien supprimer avec succèss'); */
    }

    public function dashboard()
{
    $entretiens = Entretien::orderBy('id', 'desc')
                            ->paginate(15);


    return view('dashboard', compact('entretiens'));
}


   public function entretien()
{
    $entretiens = Entretien::all();

    return view('partials.entretiens-create', compact('entretiens'));
}

}
