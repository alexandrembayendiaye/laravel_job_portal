<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employe;
use Illuminate\Http\Request;
use App\Models\Personne;
use Illuminate\Pagination\Paginator;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;




class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function registerTraitement(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'profil' => 'required',
        ]);
        $personne = new Personne(); 
        $personne->name = $request->name; 
        $personne->email = $request->email;
        $personne->password = $request->input('password'); 
        $personne->profil = $request->input('profil'); 
        $personne->save();
        if($request->input('profil') == "demandeur")
        {
            $employe = new Employe();
            $employe->id = $personne->id;
            $employe->name = $request->name; 
            $employe->email = $request->email;
            $employe->password = $request->input('password'); 
            $employe->save();
        }
        else
        {
            $company = new Company();
            $company->id = $personne->id;
            $company->name = $request->name; 
            $company->email = $request->email;
            $company->password = $request->input('password'); 
            $company->save();
        }
        return back()->with("success","Inscription réussie !");
        
    }
    public function loginTraitement(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $personne = new Personne();
        $personne->email = $request->email;
        $personne->password = $request->password;
        $personneConcernee = DB::table('personnes')->where('email', $personne->email)->first();
        if ($personneConcernee && $personne->password == $personneConcernee->password) {
            // L'utilisateur existe et le mot de passe correspond
            if($personneConcernee->profil=="demandeur")
            {
                //return view('employeDashbord',compact('personneConcernee'));
                //return redirect()->route('employeDashboard')->with('employe', $personneConcernee);
                Session::put('employe', $personneConcernee);
                return redirect()->route('employeDashboard');
            }
            else
            {
                Session::put('company', $personneConcernee);
                return redirect()->route('companyDashboard');   
            }
        }
        else
        {
            return back()->with('echec','Email ou mot de passe incorrect !');
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
