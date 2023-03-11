<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employe;
use App\Models\Job;
use App\Models\Postulant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function employeDashboard(Request $request)
    {
        //$employe = $request->session()->get('employe');
        $employe = Session::get('employe');
        return view('employeDashbord',compact('employe'));

    }
    public function employeCV()
    {
        $id = Session::get('employe')->id;
        $employe = Employe::find($id);
        return view('employeCV',compact('employe'));
    }
    public function employeUpdate(Request $request,$id)
{
    $employeUpdated = Employe::find($id);
    $employeUpdated->name = $request->name;
    $employeUpdated->email = $request->email;
    if($request->adresse!="")
    {
        $employeUpdated->adresse = $request->adresse;
    }
    if($request->telephone!="")
    {
        $employeUpdated->telephone = $request->telephone;
    }
    if($request->about!="")
    {
        $employeUpdated->about = $request->about;
    }
    if($request->experience!="")
    {
        $employeUpdated->experience = $request->experience;
    }
    if($request->photo!="")
    {
        $employeUpdated->photo = $request->photo;
    }
    
    $employeUpdated->update();
    return view('employeCVUpdated',compact('employeUpdated'));

}
public function offresEmploi()
{
    $offresEmploi = Job::all();
    return view('offresEmploi',compact('offresEmploi'));
}
public function detailsOffre($id)
{
    $job = Job::find($id);
    $idCompany = $job->company_id;
    $company = Company::find($idCompany);
    return view('detailsOffre',compact('job','company'));
}
public function postuler($id)
{
    if(DB::table('postulants')->where('postulant_id_employe', Session::get('employe')->id)->where('postulant_id_job', $id)->exists()) {
        // L'enregistrement existe
        return back()->with("error","Votre candidature a deja été enregistrée pour cette offre ! ");
    } else {
        // L'enregistrement n'existe pas
        $postulant = new Postulant();
    $postulant->postulant_id_employe = Session::get('employe')->id;
    $postulant->postulant_id_job = $id;
    $postulant->save();
    return back()->with("success","Candidature enregistrée ! ");

    }
}
public function candidaturesEnCours()
{
    $employe = Session::get('employe');
$jobs = DB::table('jobs')
    ->join('postulants', 'jobs.id', '=', 'postulants.postulant_id_job')
    ->where('postulants.postulant_id_employe', '=', $employe->id)
    ->where('postulants.etat', '=', 2)
    ->get();

return view('candidaturesEnCours', compact('jobs'));


}
public function detailsCandidatureEnCours($id)
{
    $job = Job::find($id);
    $idCompany = $job->company_id;
    $company = Company::find($idCompany);
    return view('detailsCandidature',compact('job','company'));
}
public function detailsCandidatureRejetee($id)
{
    $job = Job::find($id);
    $idCompany = $job->company_id;
    $company = Company::find($idCompany);
    return view('detailsCandidatureRejetee',compact('job','company'));
}
public function detailsCandidatureAcceptee($id)
{
    $job = Job::find($id);
    $idCompany = $job->company_id;
    $company = Company::find($idCompany);
    return view('detailsCandidatureAcceptee',compact('job','company'));
}
public function supprimerCandidature($id)
{
    Postulant::where('postulant_id_employe', Session::get('employe')->id)
            ->where('postulant_id_job', $id)
            ->delete();
    $job = Job::find($id)->refresh();
    return back()->with('success','Candidature Supprimée avec succes ! ');
}
public function candidaturesRejetees()
{
    $employe = Session::get('employe');
$jobs = DB::table('jobs')
    ->join('postulants', 'jobs.id', '=', 'postulants.postulant_id_job')
    ->where('postulants.postulant_id_employe', '=', $employe->id)
    ->where('postulants.etat', '=', 0)
    ->get();

return view('candidaturesRejetees', compact('jobs'));
}
public function candidaturesAcceptees()
{
    $employe = Session::get('employe');
$jobs = DB::table('jobs')
    ->join('postulants', 'jobs.id', '=', 'postulants.postulant_id_job')
    ->where('postulants.postulant_id_employe', '=', $employe->id)
    ->where('postulants.etat', '=', 1)
    ->get();

return view('candidaturesAcceptees', compact('jobs'));
}
public function deconnexion(Request $request)
{
    
}

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function show(Employe $employe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function edit(Employe $employe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employe $employe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employe $employe)
    {
        //
    }
}
