<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         if(Auth::user()->actif==0)
      {
        
        return view('Backend/pages/adminHome');
      }else{
         return redirect()->route('refus');
      }
    }

     public function adminMaison()
    {
         if(Auth::user()->actif==0)
      {
        $maison =DB::table('maisons')->where('supprimer',0)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminMaison',compact('maison'));
      }else{
         return redirect()->route('refus');
      }
    }

     public function corbeilleMaison()
    {
         if(Auth::user()->actif==0)
      {
        $maison =DB::table('maisons')->where('supprimer',1)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminCorbeilleMaison',compact('maison'));
      }else{
         return redirect()->route('refus');
      }
    }

     public function adminTerrain()
    {
         if(Auth::user()->actif==0)
      {
        $terrain =DB::table('terrains')->where('supprimer',0)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminTerrain',compact('terrain'));
      }else{
         return redirect()->route('refus');
      }
    }

     public function corbeilleTerrain()
    {
         if(Auth::user()->actif==0)
      {
        $terrain =DB::table('terrains')->where('supprimer',1)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminCorbeilleTerrain',compact('terrain'));
      }else{
         return redirect()->route('refus');
      }
    }

      public function adminMeuble()
    {
         if(Auth::user()->actif==0)
      {
        $meuble =DB::table('meubles')->where('supprimer',0)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminMeuble',compact('meuble'));
      }else{
         return redirect()->route('refus');
      }
    }

     public function corbeilleMeuble()
    {
         if(Auth::user()->actif==0)
      {
        $meuble =DB::table('meubles')->where('supprimer',1)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminCorbeilleMeuble',compact('meuble'));
      }else{
         return redirect()->route('refus');
      }
    }

     public function adminBail()
    {
         if(Auth::user()->actif==0)
      {
        $bail =DB::table('bails')->where('supprimer',0)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminBail',compact('bail'));
      }else{
         return redirect()->route('refus');
      }
    }

     public function corbeilleBail()
    {
         if(Auth::user()->actif==0)
      {
        $bail =DB::table('bails')->where('supprimer',1)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminCorbeilleBail',compact('bail'));
      }else{
         return redirect()->route('refus');
      }
    }

      public function adminVehicule()
    {
         if(Auth::user()->actif==0)
      {
        $vehicule =DB::table('vehicules')->where('supprimer',0)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminvehicule',compact('vehicule'));
      }else{
         return redirect()->route('refus');
      }
    }

     public function corbeilleVehicule()
    {
         if(Auth::user()->actif==0)
      {
        $vehicule =DB::table('vehicules')->where('supprimer',1)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminCorbeillevehicule',compact('vehicule'));
      }else{
         return redirect()->route('refus');
      }
    }


    public function adminEngin()
    {
         if(Auth::user()->actif==0)
      {
        $engin =DB::table('engins')->where('supprimer',0)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminEngin',compact('engin'));
      }else{
         return redirect()->route('refus');
      }
    }

     public function corbeilleEngin()
    {
         if(Auth::user()->actif==0)
      {
        $engin =DB::table('engins')->where('supprimer',1)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminCorbeilleEngin',compact('engin'));
      }else{
         return redirect()->route('refus');
      }
    }

    public function adminGroupe()
    {
         if(Auth::user()->actif==0)
      {
        $groupe =DB::table('groupes')->where('supprimer',0)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminGroupe',compact('groupe'));
      }else{
         return redirect()->route('refus');
      }
    }

     public function corbeilleGroupe()
    {
         if(Auth::user()->actif==0)
      {
        $groupe =DB::table('groupes')->where('supprimer',1)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminCorbeilleGroupe',compact('groupe'));
      }else{
         return redirect()->route('refus');
      }
    }

     public function adminConstruction()
    {
         if(Auth::user()->actif==0)
      {
        $construction =DB::table('constructions')->where('supprimer',0)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminConstruction',compact('construction'));
      }else{
         return redirect()->route('refus');
      }
    }

     public function corbeilleConstruction()
    {
         if(Auth::user()->actif==0)
      {
        $construction =DB::table('constructions')->where('supprimer',1)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminCorbeilleConstruction',compact('construction'));
      }else{
         return redirect()->route('refus');
      }
    }


     public function adminAmenagement()
    {
         if(Auth::user()->actif==0)
      {
        $amenagement =DB::table('amenagements')->where('supprimer',0)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminAmenagement',compact('amenagement'));
      }else{
         return redirect()->route('refus');
      }
    }

     public function corbeilleAmenagement()
    {
         if(Auth::user()->actif==0)
      {
        $amenagement =DB::table('amenagements')->where('supprimer',1)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminCorbeilleAmenagement',compact('amenagement'));
      }else{
         return redirect()->route('refus');
      }
    }

     public function adminNettoyage()
    {
         if(Auth::user()->actif==0)
      {
        $nettoyage =DB::table('nettoyages')->where('supprimer',0)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminNettoyage',compact('nettoyage'));
      }else{
         return redirect()->route('refus');
      }
    }

     public function corbeilleNettoyage()
    {
         if(Auth::user()->actif==0)
      {
        $nettoyage =DB::table('nettoyages')->where('supprimer',1)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminCorbeilleNettoyage',compact('nettoyage'));
      }else{
         return redirect()->route('refus');
      }
    }

      public function adminFormation()
    {
         if(Auth::user()->actif==0)
      {
        $formation =DB::table('formations')->where('supprimer',0)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminFormation',compact('formation'));
      }else{
         return redirect()->route('refus');
      }
    }

     public function corbeilleFormation()
    {
         if(Auth::user()->actif==0)
      {
        $formation =DB::table('formations')->where('supprimer',1)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminCorbeilleFormation',compact('formation'));
      }else{
         return redirect()->route('refus');
      }
    }

    public function adminTopographie()
    {
         if(Auth::user()->actif==0)
      {
        $topographie =DB::table('topographies')->where('supprimer',0)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminTopographie',compact('topographie'));
      }else{
         return redirect()->route('refus');
      }
    }

     public function corbeilleTopographie()
    {
         if(Auth::user()->actif==0)
      {
        $topographie =DB::table('topographies')->where('supprimer',1)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminCorbeilleTopographie',compact('topographie'));
      }else{
         return redirect()->route('refus');
      }
    }

    public function adminPatrimoine()
    {
         if(Auth::user()->actif==0)
      {
        $patrimoine =DB::table('patrimoines')->where('supprimer',0)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminPatrimoine',compact('patrimoine'));
      }else{
         return redirect()->route('refus');
      }
    }

     public function corbeillePatrimoine()
    {
         if(Auth::user()->actif==0)
      {
        $patrimoine =DB::table('patrimoines')->where('supprimer',1)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminCorbeillePatrimoine',compact('patrimoine'));
      }else{
         return redirect()->route('refus');
      }
    }

    public function adminFoncier()
    {
         if(Auth::user()->actif==0)
      {
        $foncier =DB::table('fonciers')->where('supprimer',0)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminFoncier',compact('foncier'));
      }else{
         return redirect()->route('refus');
      }
    }

     public function corbeilleFoncier()
    {
         if(Auth::user()->actif==0)
      {
        $foncier =DB::table('fonciers')->where('supprimer',1)->orderBy('id', 'DESC')->get();
        return view('Backend/pages/adminCorbeilleFoncier',compact('foncier'));
      }else{
         return redirect()->route('refus');
      }
    }

    public function slider()
    {    
      
         $photos = DB::table('sliders')->where('supprimer',0)->orderBY('id','DESC')->get(); 
        return view('Backend/pages/adminSlider',compact('photos'));
    }

    public function corbeilleSlider()
    {   
         
        $photos = DB::table('sliders')->where('supprimer',1)->orderBY('id','DESC')->get();
        return view('Backend/pages/adminCorbeilleSlider',compact('photos'));
    }

     public function inscription()
    {    

        return view('auth.register');
    }


    public function allUsers()
    {    
         $users =DB::table('users')->where('id','!=',11)->get();

        return view('Backend/pages/adminUser', compact('users'));
    }

    public function profil()
    {    
         $users =DB::table('users')->where('id','!=',1)->get();

        return view('Backend/pages/adminUser', compact('users'));
    }
     public function refus()
    {    

        return view('auth.refus');
    }
}
