<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\EditRequest;
use Illuminate\Http\UploadedFile;
use App\Enseignant;
use App\EnseignantMatiere;
use App\Responsable;
use App\Matiere;

class MatiereController extends Controller
{
     public function index()
    {
    	
    	 $matieres = Matiere::all(); 
         return view('admin.matiere.index' , ['matieres' => $matieres]);
    }
     public function create()
    {
        $membres = Enseignant::all();
        $responsables = Responsable::all();
         return view('admin.matiere.create')->with([
            'membres' => $membres,
            'responsables' => $responsables
            
        ]);
    	
    }
    /*******************************************/
    public function store(Request $request)
    {
        $matiere = new Matiere();
          

            $matiere->nomMat = $request->input('nom');
            $matiere->responsables_id = $request->input('responsable');
			$matiere->save();
            $members =  $request->input('membre');
        foreach ($members as $key => $value) {
            $enseignant_matier = new EnseignantMatiere();
            $enseignant_matier->matieres_id = $matiere->id;
            $enseignant_matier->enseignants_id = $value;
            $enseignant_matier->save();

         } 
        return redirect('matiere');

    }


}
