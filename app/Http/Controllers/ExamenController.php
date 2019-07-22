<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\EditRequest;
use Illuminate\Http\UploadedFile;
use App\Enseignant;
use App\Examen;
use App\Matiere;
class ExamenController extends Controller
{

	 
/**********************************************************/
    public function create($id)
    {
        $matieres = Matiere::all();
        $idMatiere=$id;
         return view('admin.examen.create')->with([
            'matieres' => $matieres,
            'idMatiere'=>$idMatiere
            
        ]);
    	
    }
   /**********************************************/
    public function store(Request $request,$id)
    {
        $examen = new Examen();
          
            if($request->hasFile('sujet')){

            $file = $request->file('sujet');

            $file_name = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('/download'),$file_name);
            $examen->sujet = $file_name;

        }
        else  $examen->sujet = 'cpc.pdf';

            $examen->titre = $request->input('titre');
            $examen->date_examen = $request->input('date_examen');
            $examen->type = $request->input('type');
            $examen->matieres_id = $id;

			$examen->save();
         
        return redirect('matiere/'.$id.'/details');

    }
}
