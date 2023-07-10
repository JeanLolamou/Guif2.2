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

    public function partenariat()
    {
        $partenariat =DB::table('partenariats')->where('valide',0)->get();$demande_stat =DB::table('demande_users')->where('valide',0)->get();
        return view('Backend/pages/adminPartenariat',compact('partenariat','demande_stat'));
    }

    public function article()
    {    $partenariat =DB::table('partenariats')->where('valide',0)->get();$demande_stat =DB::table('demande_users')->where('valide',0)->get();

        $article =DB::table('actualites')->where('supprimer',0)->orderBy('id_actualite', 'DESC')->get();
        return view('Backend/pages/adminArticle',compact('article','partenariat','demande_stat'));
    }

    public function corbeille()
    {    $partenariat =DB::table('partenariats')->where('valide',0)->get();$demande_stat =DB::table('demande_users')->where('valide',0)->get();

        $article =DB::table('actualites')->where('supprimer',1)->orderBy('id_actualite', 'DESC')->get();
        return view('Backend/pages/adminCorbeilleArticle',compact('article','partenariat','demande_stat'));
    }

     public function evenement()
    {    $partenariat =DB::table('partenariats')->where('valide',0)->get();$demande_stat =DB::table('demande_users')->where('valide',0)->get();

         $evenement = DB::table('evenements')->where('supprimer',0)->orderBy('date')->get(); 
        return view('Backend/pages/adminEvenement',compact('evenement','partenariat','demande_stat'));
    }

    public function corbeilleEvent()
    {    $partenariat =DB::table('partenariats')->where('valide',0)->get();$demande_stat =DB::table('demande_users')->where('valide',0)->get();

         $evenement = DB::table('evenements')->where('supprimer',1)->orderBy('date')->get(); 
        return view('Backend/pages/adminCorbeilleEvenement',compact('evenement','partenariat','demande_stat'));
    }

     public function flash()
    {    $partenariat =DB::table('partenariats')->where('valide',0)->get();$demande_stat =DB::table('demande_users')->where('valide',0)->get();

         $flash = DB::table('flashes')->where('supprimer',0)->get(); 
        return view('Backend/pages/adminFlash',compact('flash','partenariat','demande_stat'));
    }

    public function corbeilleFlash()
    {    $partenariat =DB::table('partenariats')->where('valide',0)->get();$demande_stat =DB::table('demande_users')->where('valide',0)->get();

         $flash = DB::table('flashes')->where('supprimer',1)->get(); 
        return view('Backend/pages/adminCorbeilleFlash',compact('flash','partenariat','demande_stat'));
    }

    public function communiques()
    {    $partenariat =DB::table('partenariats')->where('valide',0)->get();$demande_stat =DB::table('demande_users')->where('valide',0)->get();

         $communiques = DB::table('communiques')->where('supprimer',0)->get(); 
        return view('Backend/pages/adminCommuniques',compact('communiques','partenariat','demande_stat'));
    }

    public function corbeilleCommuniques()
    {    $partenariat =DB::table('partenariats')->where('valide',0)->get();$demande_stat =DB::table('demande_users')->where('valide',0)->get();

         $communique = DB::table('communiques')->where('supprimer',1)->get(); 
        return view('Backend/pages/adminCorbeilleCommuniques',compact('communique','partenariat','demande_stat'));
    }

     public function slider()
    {    
         $partenariat =DB::table('partenariats')->where('valide',0)->get();$demande_stat =DB::table('demande_users')->where('valide',0)->get();
         $photos = DB::table('sliders')->where('supprimer',0)->orderBY('id','DESC')->get(); 
        return view('Backend/pages/adminSlider',compact('photos','partenariat','demande_stat'));
    }

    public function corbeilleSlider()
    {   
         $partenariat =DB::table('partenariats')->where('valide',0)->get();$demande_stat =DB::table('demande_users')->where('valide',0)->get();
        $photos = DB::table('sliders')->where('supprimer',1)->orderBY('id','DESC')->get();
        return view('Backend/pages/adminCorbeilleSlider',compact('photos','partenariat','demande_stat'));
    }

     public function adminGalerie()
    {    

         $photos = DB::table('albums')->where('supprimer',0)->orderBY('id','DESC')->get(); 
        return view('Backend/pages/adminGalerie',compact('photos'));
    }

    public function corbeilleGalerie()
    {   

          $photos = DB::table('albums')->where('supprimer',1)->get(); 
        return view('Backend/pages/adminCorbeilleGalerie',compact('photos'));
    }

     public function photos()
    {   

         $photos = DB::table('photos')->where('suprim_photo',0)->orderBY('id_photo','DESC')->get(); 


          $album = DB::table('albums')->where('supprimer',0)->get(); 

        return view('Backend/pages/adminPhoto',compact('photos','album'));
    }

    public function corbeillePhotos()
    {    $partenariat =DB::table('partenariats')->where('valide',0)->get();$demande_stat =DB::table('demande_users')->where('valide',0)->get();

          $photos = DB::table('photos')->where('suprim_photo',1)->get(); 
        return view('Backend/pages/adminCorbeillePhoto',compact('photos','partenariat','demande_stat'));
    }

    public function videos()
    {    $partenariat =DB::table('partenariats')->where('valide',0)->get();$demande_stat =DB::table('demande_users')->where('valide',0)->get();

         $videos = DB::table('videos')->where('supprime',0)->orderBY('id_video','DESC')->get(); 
        return view('Backend/pages/adminVideo',compact('videos','partenariat','demande_stat'));
    }

    public function corbeilleVideos()
    {    $partenariat =DB::table('partenariats')->where('valide',0)->get();$demande_stat =DB::table('demande_users')->where('valide',0)->get();

          $videos = DB::table('videos')->where('supprime',1)->orderBY('id_video','DESC')->get(); 
        return view('Backend/pages/adminCorbeilleVideo',compact('videos','partenariat','demande_stat'));
    }

     public function adminDocument()
    {    $partenariat =DB::table('partenariats')->where('valide',0)->get();
         $demande_stat =DB::table('demande_users')->where('valide',0)->get();

         $document = DB::table('documents')->where('supprimer',0)->orderBY('id','DESC')->get(); 
        return view('Backend/pages/adminDocument',compact('document','partenariat','demande_stat'));
    }

    public function corbeilleDocument()
    {    $partenariat =DB::table('partenariats')->where('valide',0)->get();$demande_stat =DB::table('demande_users')->where('valide',0)->get();

        $document = DB::table('documents')->where('supprimer',1)->orderBY('id','DESC')->get();
        return view('Backend/pages/adminCorbeilleDocument',compact('document','partenariat','demande_stat'));
    }

    public function statistiques()
    {    $partenariat =DB::table('partenariats')->where('valide',0)->get();$demande_stat =DB::table('demande_users')->where('valide',0)->get();

          $statistiques = DB::table('statistiques')->get(); 
        return view('Backend/pages/adminStatistique',compact('statistiques','partenariat','demande_stat'));
    }

    public function miseEnRelation()
    {    $partenariat =DB::table('partenariats')->where('valide',0)->get();$demande_stat =DB::table('demande_users')->where('valide',0)->get();

        return view('Backend/pages/adminPartenariat',compact('partenariat','demande_stat'));
    }

    public function valider()
    {    $partenariat =DB::table('partenariats')->where('valide',1)->get();

        return view('Backend/pages/adminValider',compact('partenariat','demande_stat'));
    }

    public function demandeStat()
    {    $partenariat =DB::table('partenariats')->where('valide',0)->get();
         $demande_stat =DB::table('demande_users')->where('valide',0)->get();

        return view('Backend/pages/adminDemande',compact('partenariat','demande_stat'));
    }

    public function traiter()
    {    $partenariat =DB::table('partenariats')->where('valide',0)->get();
        $demande_stat =DB::table('demande_users')->where('valide',1)->get();

        return view('Backend/pages/adminTraiter',compact('partenariat','demande_stat'));
    }

    public function annuler()
    {    $partenariat =DB::table('partenariats')->where('valide',2)->get();

        return view('Backend/pages/adminAnnuler',compact('partenariat','demande_stat'));
    }

     public function inscription()
    {    

        return view('auth.register');
    }

     public function allUsers()
    {    
         $users =DB::table('users')->where('id','!=',17)->get();

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
