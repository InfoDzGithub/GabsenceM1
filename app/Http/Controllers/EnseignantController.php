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
				 $responsable->Enseignant_code_enseignant = $membre->id;
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
   public function details()
    {
       // $membre = Enseignant::find($id);
      //  $matiere = Equipe::all();
        


        return view('admin.detailsEnseignant');//->with([
            //'membre' => $membre//,
           // 'matiere' => $equipes,
            
            
       // ]);
    } 
}
