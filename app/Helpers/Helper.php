<?php 

use Illuminate\Support\Facades\DB;
use App\Notification;
use App\b2bseance;
use App\b2gseance;

if (! function_exists('active_route')) {
	function active_route($route){

		return Route::is($route) ? 'active opened' : '';


	}
}


if (! function_exists('langue')) {
    function langue(){
        
        $langue=Session::get('langue');
        if ($langue=="") {
            $langue="Fr";
        }
        return $langue;

    }
}



if (! function_exists('opened')) {
	function opened($route){

		return Route::is($route) ? 'opened' : '';


	}
}

if (! function_exists('nom_pays')) {
	function nom_pays($id){
		$nom="";
		 $pays =DB::table('pays')
        ->select('nom_fr_fr')        
        ->where('id','=', $id)
        ->get();
        foreach ($pays as $pays) {
        	$nom=$pays->nom_fr_fr;
        }

		return $nom;


	}
	}

	if (! function_exists('nom_secteur')) {
    function nom_secteur($id){
        $nom="";
         $secteur =DB::table('secteur_activite')
        ->select('libelle')        
        ->where('id','=', $id)
        ->get();
        foreach ($secteur as $secteur) {
            $nom=$secteur->libelle;
        }

        return $nom;


    }
    }


    if (! function_exists('nom_organisation')) {
    function nom_organisation($id){
        $nom="";
         $user =DB::table('users')     
        ->where('id','=', $id)
        ->get();
        foreach ($user as $user) {
            $nom=$user->name;
        }

        return $nom;


    }
    }


    if (! function_exists('initialise_b2b')) {
    function initialise_b2b($id_b2b){

         $oraganisation = DB::table('users')->where([['actif',0],['poste','!=','Administrateur']])->get();
        
        foreach ($oraganisation as $oraganisations) {
          b2bseance::create(['id_entrep'=>$oraganisations->id,'id_b2b'=>$id_b2b]);
        }


    }
    }


    if (! function_exists('initialise_b2g')) {
    function initialise_b2g($id_b2g){

         $oraganisation = DB::table('users')->where([['actif',0],['poste','!=','Administrateur']])->get();
        
        foreach ($oraganisation as $oraganisations) {
          b2gseance::create(['id_gov'=>$oraganisations->id,'id_b2g'=>$id_b2g]);
        }


    }
    }


     if (! function_exists('initialise_user')) {
    function initialise_user($id){

         $b2b = DB::table('b2bs')->get();
         $b2g = DB::table('b2gs')->get();
        
        foreach ($b2b as $b2b) {
          b2bseance::create(['id_entrep'=>$id,'id_b2b'=>$b2b->id]);
        }

         foreach ($b2g as $b2g) {
          b2gseance::create(['id_gov'=>$id,'id_b2g'=>$b2g->id]);
        }


    }
    }


     if (! function_exists('id_seanceb2b')) {
    function id_seanceb2b($id_b2b,$id_entrep){

         $b2b=0;
        
        $seance =DB::table('b2bseances')    
        ->where([['id_b2b','=', $id_b2b],['id_entrep','=',$id_entrep]])
        ->get();
        foreach ($seance as $seance) {
            $b2b=$seance->id;
        }

        return $b2b;


    }
    }


    if (! function_exists('id_seanceb2g')) {
    function id_seanceb2g($id_b2g,$id_gov){

         $b2b=0;
        
        $seance =DB::table('b2gseances')    
        ->where([['id_b2g','=', $id_b2g],['id_gov','=',$id_gov]])
        ->get();
        foreach ($seance as $seance) {
            $b2g=$seance->id;
        }

        return $b2g;


    }
    }


     if (! function_exists('id_invite_seanceb2b')) {
    function id_invite_seanceb2b($id_b2b,$id_invite){

         $b2b=0;
        
        $seance =DB::table('b2bseances')    
        ->where([['id_b2b','=', $id_b2b],['id_invite','=',$id_invite]])
        ->get();
        foreach ($seance as $seance) {
            $b2b=$seance->id;
        }

        return $b2b;


    }
    }


     if (! function_exists('id_invite_seanceb2g')) {
    function id_invite_seanceb2g($id_b2g,$id_invite){

         $b2g=0;
        
        $seance =DB::table('b2gseances')    
        ->where([['id_b2g','=', $id_b2g],['id_invite','=',$id_invite]])
        ->get();
        foreach ($seance as $seance) {
            $b2g=$seance->id;
        }

        return $b2g;


    }
    }


    if (! function_exists('etat_seanceb2b')) {
    function etat_seanceb2b($id){

         $free=0;
        
        $seance =DB::table('b2bseances')    
        ->where('id','=',$id)
        ->get();
        foreach ($seance as $seance) {
            $free=$seance->etat;
        }

        return $free;


    }
    }


     if (! function_exists('etat_seanceb2g')) {
    function etat_seanceb2g($id){

         $free=0;
        
        $seance =DB::table('b2gseances')    
        ->where('id','=',$id)
        ->get();
        foreach ($seance as $seance) {
            $free=$seance->etat;
        }

        return $free;


    }
    }


     if (! function_exists('actif_seanceb2b')) {
    function actif_seanceb2b($id){

         $free=0;
        
        $seance =DB::table('b2bseances')    
        ->where('id','=',$id)
        ->get();
        foreach ($seance as $seance) {
            $free=$seance->actif;
        }

        return $free;


    }
    }


    function actif_seanceb2g($id){

         $free=0;
        
        $seance =DB::table('b2gseances')    
        ->where('id','=',$id)
        ->get();
        foreach ($seance as $seance) {
            $free=$seance->actif;
        }

        return $free;


    }
    


    if (! function_exists('id_entrepb2b')) {
    function id_entrepb2b($id){

         $oraganisation=0;
        
        $seance =DB::table('b2bseances')    
        ->where('id','=', $id)
        ->get();
        foreach ($seance as $seance) {
            $oraganisation=$seance->id_invite;
        }

        return $oraganisation;


    }
    }


     if (! function_exists('id_entrepb2g')) {
    function id_entrepb2g($id){

         $oraganisation=0;
        
        $seance =DB::table('b2gseances')    
        ->where('id','=', $id)
        ->get();
        foreach ($seance as $seance) {
            $oraganisation=$seance->id_invite;
        }

        return $oraganisation;


    }
    }


    if (! function_exists('heure_seanceB2B')) {
    function heure_seanceB2B($id){

         $heure=0;
        
        $seance =DB::table('b2bs')    
        ->where('id','=', $id)
        ->get();
        foreach ($seance as $seance) {
            $heure=$seance->heure;
        }

        return $heure;


    }
    }


      if (! function_exists('heure_seanceB2G')) {
    function heure_seanceB2G($id){

         $heure=0;
        
        $seance =DB::table('b2gs')    
        ->where('id','=', $id)
        ->get();
        foreach ($seance as $seance) {
            $heure=$seance->heure;
        }

        return $heure;


    }
    }


     if (! function_exists('pannel')) {
    function pannel($id){

         $pannel=null;
        
        $pannel =DB::table('pannels')    
        ->where('id_intervenant','=', $id)
        ->get();
       

        return $pannel;


    }
    }


    

	




	




 ?>