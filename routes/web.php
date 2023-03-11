<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get("/login",[App\Http\Controllers\PersonneController::class,'login'])->name('login');
Route::get("/register",[App\Http\Controllers\PersonneController::class,'register'])->name('register');
Route::post("/register",[App\Http\Controllers\PersonneController::class,'registerTraitement'])->name('registerTraitement');
Route::post("/login",[App\Http\Controllers\PersonneController::class,'loginTraitement'])->name('loginTraitement');
Route::get("/employeDashboard",[App\Http\Controllers\EmployeController::class,'employeDashboard'])->name('employeDashboard');
Route::get("/companyDashboard",[App\Http\Controllers\CompanyController::class,'companyDashboard'])->name('companyDashboard');
Route::get("/employeDashboard/cv",[App\Http\Controllers\EmployeController::class,'employeCV'])->name('employeCV');
Route::put("/employeDashboard/cv/update/{employe}",[App\Http\Controllers\EmployeController::class,'employeUpdate'])->name('employeUpdate');
Route::get("/employeDashboard/offresEmploi",[App\Http\Controllers\EmployeController::class,'offresEmploi'])->name('offresEmploi');
Route::get("/employeDashboard/offresEmploi/Details/{id}",[App\Http\Controllers\EmployeController::class,'detailsOffre'])->name('detailsOffre');
Route::get("/employeDashboard/offresEmploi/Details/postuler/{id}",[App\Http\Controllers\EmployeController::class,'postuler'])->name('postuler');
Route::get("/deconnexion",function()
{
    session()->flush();
    return redirect('/');
})->name('deconnexion');
Route::get("/companyDashboard/informations",[App\Http\Controllers\CompanyController::class,'renseignerInformations'])->name('renseignerInformations');
Route::put("/companyDashboard/informations/updated",[App\Http\Controllers\CompanyController::class,'companyUpdated'])->name('companyUpdated');
Route::get("/companyDashboard/publier",[App\Http\Controllers\CompanyController::class,'publierOffre'])->name('publierOffre');
Route::post("/companyDashboard/publier/traitement",[App\Http\Controllers\CompanyController::class,'publierTraitement'])->name('publierTraitement');
Route::get("/companyDashboard/offres",[App\Http\Controllers\CompanyController::class,'voirOffres'])->name('voirOffres');
Route::get("/companyDashboard/offres/details/{id?}",[App\Http\Controllers\CompanyController::class,'companyDetailsOffre'])->name('companyDetailsOffre');
Route::get("/companyDashboard/offres/{id?}/candidatures",[App\Http\Controllers\CompanyController::class,'voirCandidatures'])->name('voirCandidatures');
Route::get("/companyDashboard/offres/{id_job?}/candidature/{id_employe?}",[App\Http\Controllers\CompanyController::class,'informationsEmploye'])->name('informationsEmploye');
Route::get("/companyDashboard/offres/{idJob?}/candidature/recruter/{idEmploye?}",[App\Http\Controllers\CompanyController::class,'recruter'])->name('recruter');
Route::get("/companyDashboard/offres/{idJob?}/candidature/rejetter/{idEmploye?}",[App\Http\Controllers\CompanyController::class,'rejetter'])->name('rejetter');
Route::get("/employeDashboard/candidaturesEnCours",[App\Http\Controllers\EmployeController::class,'candidaturesEnCours'])->name('candidaturesEnCours');
Route::get("/employeDashboard/candidaturesRejetées",[App\Http\Controllers\EmployeController::class,'candidaturesRejetees'])->name('candidaturesRejetees');
Route::get("/employeDashboard/candidaturesAcceptees",[App\Http\Controllers\EmployeController::class,'candidaturesAcceptees'])->name('candidaturesAcceptees');

Route::get("/employeDashboard/candidaturesEnCours/Details/{id?}",[App\Http\Controllers\EmployeController::class,'detailsCandidatureEnCours'])->name('detailsCandidatureEnCours');
Route::get("/employeDashboard/candidaturesRejetees/Details/{id?}",[App\Http\Controllers\EmployeController::class,'detailsCandidatureRejetee'])->name('detailsCandidatureRejetee');
Route::get("/employeDashboard/candidaturesAcceptees/Details/{id?}",[App\Http\Controllers\EmployeController::class,'detailsCandidatureAcceptee'])->name('detailsCandidatureAcceptee');

Route::get("/employeDashboard/candidaturesEnCours/{id?}/supprimer",[App\Http\Controllers\EmployeController::class,'supprimerCandidature'])->name('supprimerCandidature');









