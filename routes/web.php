<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', 'PageController@temporaire')->name('temporaire');


Route::get('/', 'PageController@accueil')->name('accueil');

Route::get('/Forum', 'PageController@forum')->name('forum');
Route::get('/Lieu-du-Forum', 'PageController@lieuForum')->name('lieuForum');
Route::get('/Programme-&-Conference', 'PageController@programmeConference')->name('programmeConference');
Route::get('/Intervenant', 'PageController@intervenant')->name('intervenant');
Route::get('/Details-Intervenant/{id}', 'PageController@detailsIntervenant')->name('detailsIntervenant');
Route::get('/Partenaires', 'PageController@exposition')->name('exposition');
Route::get('/Excursion', 'PageController@excursion')->name('excursion');
Route::get('/Partenaire', 'PageController@partenaire')->name('partenaire');
Route::get('/Contact', 'PageController@contact')->name('contact');
Route::post('/Recherche', 'PageController@search')->name('search');
Route::get('/Inscription-GUIF', 'PageController@inscriptionGuif')->name('inscriptionGuif');
Route::get('/Inscription-Participant-Simple', 'PageController@AjoutParticipantSimple')->name('AjoutParticipantSimple');
Route::get('/Inscription-Promoteur', 'PageController@AjoutPromoteur')->name('AjoutPromoteur');
Route::get('/Inscription-Investisseur', 'PageController@AjoutInvestisseur')->name('AjoutInvestisseur');
Route::get('/Inscription-Officielle', 'PageController@AjoutOfficielle')->name('AjoutOfficielle');
Route::post('/Ajout-Participant-GUIF', 'PageController@ajoutParticipantGuif')->name('ajoutParticipantGuif');
Route::get('/Devenir-partenaire', 'PageController@partenariat')->name('partenariat');
Route::get('/Transaction', 'PageController@transaction')->name('transaction');
Route::get('/Séjour-en-Guinée', 'PageController@venue')->name('venue');
Route::get('/Pack-stand', 'PageController@packStand')->name('packStand');
Route::get('/Formulaire-inscription-participant', 'PageController@formulaireParticipant')->name('formulaireParticipant');
Route::get('/Formulaire-inscription-dealRoom', 'PageController@formulaireDealRoom')->name('formulaireDealRoom');
Route::get('/Formulaire-inscription-stand', 'PageController@formulaireStand')->name('formulaireStand');
Route::get('/Formulaire-inscription-partenaire', 'PageController@formulairePartenaire')->name('formulairePartenaire');
Route::get('/Galerie', 'PageController@galerie')->name('galerie');
Route::get('/Liste-Photos/{id}', 'PageController@photo')->name('photo');
Route::get('/Covid-19', 'PageController@covid')->name('covid');
Route::get('/Infos-pratiques', 'PageController@infoPratique')->name('infoPratique');
Route::get('/Projets-publiques', 'PageController@fichePublic')->name('fichePublic');

Route::post('/Sendmail', [
        'as' => 'sendmail', 
        'uses' => 'PageController@sendmail'
    ]);

Route::get('/Langue-Fr', [
        'as' => 'changelangueFr', 
        'uses' => 'PageController@changelangueFr'
    ]);

Route::get('/Langue-En', [
        'as' => 'changelangueEn', 
        'uses' => 'PageController@changelangueEn'
    ]);

Route::resource('User','UserController');
Route::resource('Photos','PhotoController');
Route::resource('Gallerie','AlbumController');


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Ajout-Utilisateur', 'PageController@inscriptionGuif')->name('inscription');

Route::get('/Admin-Galerie', 'HomeController@admingalerie')->name('admingalerie');

Route::get('/Admin-Corbeille-Galerie', 'HomeController@corbeilleGalerie')->name('corbeilleGalerie');

Route::get('/Admin-Photos', 'HomeController@photos')->name('adminphotos');

Route::get('/Admin-Corbeille-Photos', 'HomeController@corbeillePhotos')->name('corbeillePhotos');

Route::get('/Admin-Videos', 'HomeController@videos')->name('adminvideos');

Route::get('/Admin-Corbeille-Videos', 'HomeController@corbeilleVideos')->name('corbeilleVideos');

Route::get('/Admin-Utilisateurs', 'HomeController@allUsers')->name('allUsers');

Route::get('/Bloqué', 'HomeController@refus')->name('refus');