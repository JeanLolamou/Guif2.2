<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Photo;
use App\User;
use auth;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['images'=>'required']);

          $fichier = $request->file('images');

           if($request->hasFile('images'))
            {
                 foreach ($fichier as $fichiers) 
                 {
                    $fichierName = $fichiers->getClientOriginalName().'.'.$fichiers->getClientOriginalExtension();
                    $fichiers->move(public_path('images/gallerie'), $fichierName);

                 Photo::create(['lien'=>$fichierName, 'nom_photoFr'=>$request->nom_photoFr, 'nom_photo'=>$request->nom_photo, 'status'=>'gallerie','id_album'=>$request->album, 'suprim_photo'=>0]);
                 }

                   session()->flash('message','Photo ajoutée avec succés');
           }
    


        
        return redirect()->route ('adminphotos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         if (isset($request->sup)) {
          //suppression
           $photo1 = Photo::where('id','=',$id);
         
              $photo1->update(['supprimer'=>1]);
         

          
         session()->flash('message','Suppression effectuée avec succées');

    
        return redirect()->back();
         }else if (isset($request->restaurer)) {
          //restauration
           $photo1 = Photo::where('id','=',$id);
         
              $photo1->update(['supprimer'=>0]);
         

          
         session()->flash('message','Restauration effectuée avec succées');

    
        return redirect()->route('corbeillePhotos');
         }else{ 
         //modification

       

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
