<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employe;
use App\Models\Job;
use App\Models\Postulant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function companyDashboard(Request $request)
    {
        $company = Session::get('company');
        return view('companyDashboard',compact('company'));
    }
    public function renseignerInformations()
    {
        $idCompany = Session::get('company')->id;
        $company = Company::find($idCompany);
        return view('companyInformations',compact('company'));
    }
    public function companyUpdated(Request $request)
    {
        $idCompany = Session::get('company')->id;
        $company = Company::find($idCompany);
        $company->name = $request->name;
        $company->email = $request->email;
        if($request->adresse!="")
        {
            $company->adresse = $request->adresse;
        }
        if($request->telephone!="")
        {
            $company->telephone = $request->telephone;
        }
        if($request->description!="")
        {
            $company->description = $request->description;
        }
        if($request->domaine!="")
        {
            $company->domaine = $request->domaine;
        }
        $company->update();
        return view('companyInfosUpdated',compact('company'));


    }
    public function publierOffre()
    {
        return view('publierOffre');
    }
    public function publierTraitement(Request $request)
    {
        $request->validate([
            "titre" => "required",
            "description" => "required",
            "lieu" => "required",
            "competences" => "required",
            "salaire" => "required",
        ]);
        $job = new Job();
        $job->titre = $request->titre;
        $job->description = $request->description;
        $job->lieu = $request->lieu;
        $job->competences = $request->competences;
        $job->salaire = $request->salaire;
        $job->company_id = Session::get('company')->id;
        $job->save();
        return back()->with('success','Votre offre a été publiée !');

    }
    public function voirOffres(Request $request)
    {
        $idCompany = Session::get('company')->id;
        $jobs = Job::where('company_id', $idCompany)->get();   
        return view('company_offres', compact('jobs'));

    }
    public function companyDetailsOffre($id)
    {
        $job = Job::find($id);
        return view('companyDetailsOffre',compact('job'));
    }
    public function voirCandidatures($idJob)
    {
        $employes = DB::table('employes')
            ->join('postulants', 'employes.id', '=', 'postulants.postulant_id_employe')
            ->join('jobs', 'postulants.postulant_id_job', '=', 'jobs.id')
            ->where('jobs.id', '=', $idJob)
            ->select('employes.*')
            ->get();
        $job = Job::find($idJob);
        return view('voirCandidatures',compact('job','employes'));
    }
    public function informationsEmploye($idJob,$id)
    {
        $employe = Employe::find($id);
        $job = Job::find($idJob);
        $postulant = Postulant::where('postulant_id_employe',$id)
                            ->where('postulant_id_job',$idJob)
                            ->first();
        return view('informationsEmploye',compact('job','employe','postulant'));
    }
    public function recruter(Request $request,$idJob,$idEmploye)
    {
        $employe = Employe::find($idEmploye);
        $postulant = Postulant::where('postulant_id_employe', $idEmploye)
                ->where('postulant_id_job', $idJob)
                ->first();

        if($postulant->etat == 2)
        {
            DB::table('postulants')
                ->where('postulant_id_employe', $idEmploye)
                ->where('postulant_id_job', $idJob)
                ->update(['etat' => 1]);
            return back()->with('success','Recrutement effectué avec success !');
        }
        else
        {
            if($postulant->etat == 0)
            {
                DB::table('postulants')
                ->where('postulant_id_employe', $idEmploye)
                ->where('postulant_id_job', $idJob)
                ->update(['etat' => 1]);
                return back()->with('success2','Cette candidature initialement rejetée, vient d\'être acceptée !');
            }
            else
            {
                DB::table('postulants')
                ->where('postulant_id_employe', $idEmploye)
                ->where('postulant_id_job', $idJob)
                ->update(['etat' => 1]);
                return back()->with('error','Ce candidat a deja été recruté !');
            }
        }
        
    }
    public function rejetter(Request $request,$idJob,$idEmploye)
    {
        $employe = Employe::find($idEmploye);
        $postulant = Postulant::where('postulant_id_employe', $idEmploye)
                ->where('postulant_id_job', $idJob)
                ->first();

        if($postulant->etat == 2)
        {
            DB::table('postulants')
                ->where('postulant_id_employe', $idEmploye)
                ->where('postulant_id_job', $idJob)
                ->update(['etat' => 0]);
            return back()->with('successN','Candidature rejettée avec success !');
        }
        else
        {
            if($postulant->etat == 0)
            {
                DB::table('postulants')
                ->where('postulant_id_employe', $idEmploye)
                ->where('postulant_id_job', $idJob)
                ->update(['etat' => 0]);
                return back()->with('errorN','Cette candidature a deja été rejettée !');
            }
            else
            {
                DB::table('postulants')
                ->where('postulant_id_employe', $idEmploye)
                ->where('postulant_id_job', $idJob)
                ->update(['etat' => 0]);
                return back()->with('successN2','Ce candidat initialement recruté vient à présent d\'être rejetté !');
            }
        }
        
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
        //
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
