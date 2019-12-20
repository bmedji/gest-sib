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
/**Route Authentication**/
//Auth::routes();

Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login');

Route::group(['middleware' => ['auth']], function () {
    Route::get('logout','Auth\LoginController@logout')->name('logout');

    Route::get('/', 'HomeController@index');

    /**Routes reclamations**/

    Route::get('superviseur/reclamation','ReclamationController@afficher_toutes_les_reclamations');

    Route::get('superviseur/reclamation','ReclamationController@afficher_toutes_les_reclamations');

    Route::get('{reclamation}','ReclamationController@show');

    Route::post('/', 'ReclamationController@store');

    Route::post('update','ReclamationController@update');

    Route::delete('{reclamation}', 'ReclamationController@destroy');


    /**Routes user **/
    Route::get('admin/showUser/{user}','UserController@show');

    Route::post('enregistrer_user','UserController@store');

    Route::post('admin/update/user','UserController@update');

    Route::delete('admin/delete_user/{user}','UserController@destroy');


    /**Routes direction **/

    Route::get('admin/showDirection/{direction}','DirectionController@show');

    Route::post('enregistrer_direction','DirectionController@store');

    Route::post('admin/update/direction','DirectionController@update');

    Route::delete('admin/delete_direction/{direction}','DirectionController@destroy');

    /**Routes type service **/

    Route::get('admin/showTypeService/{type_service}','TypeServiceController@show');

    Route::post('enregistrer_type_service','TypeServiceController@store');

    Route::post('admin/update/type_service','TypeServiceController@update');

    Route::delete('admin/delete_type_service/{type_service}','TypeServiceController@destroy');

    /**Routes service **/

    Route::get('superviseur/services','ServiceController@afficher_tout_les_services');

    Route::get('admin/showService/{service}','ServiceController@show');

    Route::post('enregistrer_service','ServiceController@store');

    Route::post('admin/update/service','ServiceController@update');

    Route::delete('admin/delete_service/{service}','ServiceController@destroy');

    /**Routes gestionnaire **/

    Route::get('admin/showGestionnaire/{gestionnaire}','GestionnaireController@show');

    Route::post('enregistrer_gestionnaire','GestionnaireController@store');

    Route::post('admin/update/gestionnaire','GestionnaireController@update');

    Route::delete('admin/delete_gestionnaire/{gestionnaire}','GestionnaireController@destroy');

    /**Routes client **/

    Route::get('admin/showClient/{client}','ClientController@show');

    Route::post('enregistrer_client','ClientController@store');

    Route::post('admin/update/client','ClientController@update');

    Route::delete('admin/delete_client/{client}','ClientController@destroy');

    /**Routes agence **/

    Route::get('admin/showAgence/{agence}','AgenceController@show');

    Route::post('enregistrer_agence','AgenceController@store');

    Route::post('admin/update/agence','AgenceController@update');

    Route::delete('admin/delete_agence/{agence}','AgenceController@destroy');

    /**Routes fonctionnalite **/

    Route::get('admin/showFonctionnalite/{fonctionnalite}','FonctionnaliteController@show');

    Route::post('enregistrer_fonctionnalite','FonctionnaliteController@store');

    Route::post('admin/update/fonctionnalite','FonctionnaliteController@update');

    Route::delete('admin/delete_fonctionnalite/{fonctionnalite}','FonctionnaliteController@destroy');


    //Routes verification

    Route::get('verification/reclamation','VerificationController@retourner_toutes_reclamations');

    //Routes storage

    Route::get('find/{file}','ReclamationController@getFile');    
});

