<?php

namespace App\Http\Controllers;
use App\Album;

use Illuminate\Http\Request;

class AlbumController extends Controller
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
         $this->validate($request,['image'=>'required']);

          $imageName = time().'.'.$request->image->getClientOriginalExtension();
  $request->image->move(public_path('images/gallerie'), $imageName);

        Album::create(['image'=>$imageName, 'libelle'=>$request->libelle, 'libelleFr'=>$request->libelleFr, 'date'=>$request->date]);
        session()->flash('message','Album ajouté avec succès');
        return redirect()->route ('admingalerie');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flashs = DB::table('flashes')->where('supprimer', '0')->orderBy('id_flash', 'DESC')->get();
        $apips = DB::table('apips')->get();

        $photo = DB::table('photos')->where([['suprim_photo', '0'],['id_album',$id]])->orderBy('id_photo', 'DESC')->get();

        $album = DB::table('albums')->where('id',$id)->get();

        


        return view ('pages/album', compact('photo','album','flashs','apips'));
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
           $photo1 = Album::where('id','=',$id);
         
              $photo1->update(['supprimer'=>1]);
         

          
         session()->flash('message','Suppression effectuée avec succées');

    
        return redirect()->route('admingalerie');
         }else if (isset($request->restaurer)) {
          //restauration
           $photo1 = Album::where('id_photo','=',$id);
         
              $photo1->update(['supprimer'=>0]);
         

          
         session()->flash('message','Restauration effectuée avec succées');

    
        return redirect()->route('corbeillegalerie');
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
