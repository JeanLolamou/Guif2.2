<?php

namespace App\Http\Controllers;
use App\Mail\SendMail;
use App\Projet;
use App\User;
use DateTime;
use Illuminate\Foundation\config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Mail;
use Session;
use auth;

class PageController extends Controller
{

    public function changelangueFr()
    {

      
        Session::put('langue', 'Fr');
      

      return back();

    }

     public function changelangueEn()
    {
      
      
        Session::put('langue', 'En');
      

      return back();

    }

    public function temporaire()
    {

        $today = new DateTime(date('Y-m-d'));
        $dateguif = new DateTime('2020-12-10');
        $interval = $today->diff($dateguif);
        $days = $interval->format('%a'); //now do whatever you like with $days

        $intervenant =DB::table('intervenants')->where('supprimer',0)->orderBy('ordre')->get();
       
     return view ('pages.temporaire',compact('days','intervenant'));
    }
    
     public function accueil()
    {

        $today = new DateTime(date('Y-m-d'));
        $dateguif = new DateTime('2020-12-10');
        $interval = $today->diff($dateguif);
        $days = $interval->format('%a'); //now do whatever you like with $days

        $intervenant =DB::table('intervenants')->where('supprimer',0)->orderBy('ordre')->get();
       
     return view ('pages.index',compact('days','intervenant'));
    }

    public function forum()
    {
       
     return view ('pages.forum');
    }

    public function lieuForum()
    {
       
     return view ('pages.lieuForum');
    }

    public function programmeConference()
    {
         $intervenant =DB::table('intervenants')->where('supprimer',0)->orderBy('ordre')->get();
       
     return view ('pages.programmeConference',compact('intervenant'));
    }

    public function intervenant()
    {
        $intervenant =DB::table('intervenants')->where('supprimer',0)->orderBy('ordre')->get();
       
     return view ('pages.intervenant',compact('intervenant'));
    }

    public function detailsIntervenant($id)
    {
         $intervenant =DB::table('intervenants')->where('id',$id)->get();

         $intervenant2 =DB::table('intervenants')->where('supprimer',0)->orderBy('id')->get();

         $id_intervenant=$id;
       
     return view ('pages.details',compact('intervenant','intervenant2','id_intervenant'));
    }

    public function exposition()
    {
       
     return view ('pages.exposition');
    }

    public function excursion()
    {
       
     return view ('pages.excursion');
    }

    public function partenaire()
    {
       
     return view ('pages.partenaire');
    }

    public function contact()
    {
       
     return view ('pages.contact');
    }

    public function search(Request $request)
    {
       
     return view ('pages.search');
    }


    public function inscriptionGuif()
    {

     $secteur =DB::table('secteur_activite')->get();
        $pays =DB::table('pays')->get();
       
     return view ('pages.formulaireParticipant',compact('secteur','pays'));
    }

    public function AjoutParticipantSimple()
    {

     $secteur =DB::table('secteur_activite')->get();
        $pays =DB::table('pays')->get();
       
     return view ('pages.AjoutParticipantSimple',compact('secteur','pays'));
    }

    public function AjoutPromoteur()
    {

     $secteur =DB::table('secteur_activite')->get();
        $pays =DB::table('pays')->get();
       
     return view ('pages.AjoutPromoteur',compact('secteur','pays'));
    }

    public function AjoutInvestisseur()
    {

     $secteur =DB::table('secteur_activite')->get();
        $pays =DB::table('pays')->get();
       
     return view ('pages.AjoutInvestisseur',compact('secteur','pays'));
    }

    public function AjoutOfficielle()
    {

     $secteur =DB::table('secteur_activite')->get();
        $pays =DB::table('pays')->get();
       
     return view ('pages.AjoutOfficielle',compact('secteur','pays'));
    }

    public function ajoutParticipantGuif(Request $request)
    {
        $this->validate($request,['genre'=>'required',
            'prenom'=>'required',
            'name'=>'required',
            'email'=>'required|string|email|max:255|unique:users',
            'pays'=>'required',
            'ville'=>'required',
            'adresse'=>'required',
            'g-recaptcha-response'=>function($attribute, $value, $fail){
                $secretKey="6LcmvWodAAAAAFhMmTByEAJkbgbOVMkXnzDpV7rb";
                $response=$value;
                $userIP=$_SERVER['REMOTE_ADDR'];
                $url="https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$userIP";
                $response=\file_get_contents($url);
                $response=json_decode($response);
               
                if (!$response->success) {
                    session()->flash('erreur','Verifiez la case "Je ne suis pas un robot" s\'il vous plait!!');
                    $fail('Verifiez la case "Je ne suis pas un robot"');
                }
              

            },

        ]);

      User::create(['genre'=>$request->genre, 'prenom'=>$request->prenom, 'name'=>$request->name, 'email'=>$request->email, 'tel'=>$request->tel, 'userType'=>$request->userType, 'categorie'=>$request->categorie, 'adresse'=>$request->adresse, 'pays'=>$request->pays, 'ville'=>$request->ville, 'entreprise'=>$request->entreprise, 'secteur'=>$request->secteur, 'poste'=>$request->poste, 'description'=>$request->description]);

      if ($request->userType=='Promoteur') {

        $id_user=User::orderBy('id', 'desc')->first()->id;

          $fichierName = time().'.'.$request->fichier->getClientOriginalExtension();
  $request->fichier->move(public_path('Fiche-Projet/GUIF2'), $fichierName);

        Projet::create(['fichier'=>$fichierName, 'libelle'=>$request->libelle, 'id_user'=>$id_user]);
      }

        session()->flash('message','Votre inscription sur notre plâteforme a reussie avec succès');
       
     return view ('pages.formulaireParticipant');
    }

    public function partenariat()
    {
       return view ('pages.devenir_partenaire');
     // return view ('pages.partenariat');
    }

     public function transaction()
    {
       
     return view ('pages.transaction');
    }

    public function venue()
    {
       
     return view ('pages.venue');
    }

     public function covid()
    {
       
     return view ('pages.covid');
    }

    public function infoPratique()
    {
       
     return view ('pages.infoPratique');
    }

     public function formulaireParticipant()
    {
       
     return view ('pages.formulaireParticipant');
    }

    public function formulaireDealRoom()
    {
       
     return view ('pages.formulaireDealRoom');
    }

    public function formulaireStand()
    {
       
     return view ('pages.formulaireStand');
    }

    public function packStand()
    {
       
     return view ('pages.packStand');
    }

    public function formulairePartenaire()
    {
       
     return view ('pages.formulairePartenaire');
    }

     public function galerie()
    {
      $photo =DB::table('albums')->where('supprimer',0)->orderBy('id')->get();
       
     return view ('pages.galerie',compact('photo'));
    }

     public function photo($id)
    {
      $photo =DB::table('photos')->where([['id_album',$id],['suprim_photo',0]])->orderBy('id_photo')->get();
       
     return view ('pages.photo',compact('photo'));
    }

     public function confirm($id,$token)
    {
        $users = User::where('id',$id)->where('confirmation_token',$token)->first();
        
        if ($users) {
     
       initialise_user($id);

            $users->update(['confirmation_token'=>null]);
             session()->flash('success','Votre compte a bien été activé.');
           
                
                return redirect()->route('confirmationReussie');
        }else{
           session()->flash('error','Ce lien ne semble plus valide');
      return redirect()->route('inscription');
        }
    }


    public function confirmationReussie()
    {
       
     return view ('pages.confirmationReussie');
    }

    public function fichePublic()
    {
       
     return view ('pages.fichePublic');
    }


}
