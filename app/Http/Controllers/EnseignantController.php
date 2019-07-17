<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\userEditRequest;
use Illuminate\Http\UploadedFile;

use App\Http\Requests\userRequest;
use App\Enseignant;
use App\Responsable;
use App\Matiere;
 
class EnseignantController extends Controller
{
    //
    public function index()
    {
    	//return view('admin.listeEnseignant');
    	 $membres = Enseignant::all(); 
       

        return view('admin.listeEnseignant' , ['membres' => $membres]);
    }
     public function create()
    {
    	return view('admin.createEnseignant');
    }
    public function store(Request $request)
    {
        $membre = new Enseignant();
        
        if($request->hasFile('img')){
            $file = $request->file('img');
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('/uploads/photo'),$file_name);

        }
        else{
            $file_name="Enseignat.png";
        }

            $membre->nom = $request->input('nom');
            $membre->prenom = $request->input('prenom');
            $membre->email = $request->input('email');
            $membre->date_N = $request->input('dateN');
            $membre->grade = $request->input('grade');
            $membre->password = Hash::make($request->input('password'));
            $membre->num_tel = $request->input('num_tel');
            $membre->photo = 'uploads/photo/'.$file_name;
             $fields = Input::get('sexe');
				  if($fields == 'Femme'){
				   $membre->sexe = $fields;
				  }
				  else {
				  	$filelds='Homme';
				  $membre->sexe = $fields;
				  }
			$role = Input::get('role');
				  if($role == 'responsable'){
				   $membre->role = $role;
				  }
				  else {
				  	$role='enseignant';
				  $membre->role = $role;
				  }
				
				   
            $membre->save();
            if($membre->role== 'responsable')
				{
			      $responsable=new Responsable();
				 $responsable->enseignants_id = $membre->id;
				 $responsable->save();
				}
        return redirect('enseignant');

    }



     public function destroy($id)
    {
        //if( Auth::user()->role->nom == 'admin')
           // {
        $membre = Enseignant::find($id);

        $membre->delete();
        return redirect('enseignant');
            //}
    }
   public function details($id)
    {
        $membre = Enseignant::find($id);
        
        //***********calcul age******************
        $am = explode('/', $membre->date_N);
		$an = explode('/', date('d/m/Y'));
		if(($am[1] < $an[1]) || (($am[1] == $an[1]) && ($am[0] <= $an[0]))) 
			 
		  
	     { $age=$an[2] - $am[2];}
		else {$age=$an[2] - $am[2] - 1;}
        /************************************/ 
        if($membre->role=='responsable')  
        {
        /* $id_resp = DB::table('responsables')
            // ->select('idResp')
             ->where('enseignants_id', '=',$id)
             ->get();
       $val = Responsable::where('enseignants_id', $id)->get();

        $matieres = DB::table('matieres')
                  ->where('responsables_id', '=',$val->idResp)
                  ->get();*/
        $matieres = DB::table('matieres')
                ->join('responsables', 'responsables.idResp', '=', 'matieres.responsables_id')
                 ->select('*', DB::raw('matieres.id as idMat'))
                  ->where('responsables.enseignants_id', '=',$id)
                  ->get();         
        }  
        else{
        
         $matieres = DB::table('matieres')
                ->join('enseignant_has_matiere', 'enseignant_has_matiere.matieres_id', '=', 'matieres.id')
                ->select('*', DB::raw('matieres.id as idMat'))
                  ->where('enseignant_has_matiere.enseignants_id', '=',$id)
                  ->get();
        } 
        return view('admin.detailsEnseignant')->with([
            'membre' => $membre,
            'age'=>$age,
            'matieres' => $matieres
             
            
       ]);
    } 
}
