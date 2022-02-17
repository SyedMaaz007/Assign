<?php

namespace App\Http\Controllers;
use App\Models\User;
use DB;
use Auth;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $email = Auth::user()->email;
        $dat=User::where(['email'=> $email])->first();
        $request['gender'] = $dat->gender;
        $request['price1'] = $dat->price1;
        $request['price2'] =  $dat->price2;
        $family=$dat->family_type;
        $manglik =  $dat->is_manglik;
        $ptr_manglik=$dat->ptr_manglik;

        $data=[];
        $show=[];
        $show2=[];
        $show1=[];
        $show3=[];
        $occ=DB::table('ptr_occupation')->select('*')
        ->join('ptr_family','ptr_family.user_email','=','ptr_occupation.user_email')
        ->where('ptr_occupation.user_email','=' ,$dat->email)
        ->get();
        foreach($occ as $key)
        {

        $req=DB::table('users')->select('*')
        ->where('gender','!=' ,$request['gender'])
        ->where('occupation','=' , $key->occupation)
        ->where('family_type','=' , $key->family_type)
        ->where(function($query) use ($ptr_manglik){
            $query->where('is_manglik','=',$ptr_manglik)
           ->orwhere('ptr_manglik','=',$ptr_manglik);
        })
        ->get();

        $show=DB::table('users')->select('*')
        ->where('gender','!=' ,$request['gender'])

        ->where('occupation','=' , $key->occupation)
        ->where('family_type','=' , $key->family_type)
        ->where(function($query) use ($ptr_manglik){
            $query->where('is_manglik','!=',$ptr_manglik);
        })
        ->get();

        $show1=DB::table('users')->select('*')
        ->where('gender','!=' ,$request['gender'])

        ->where('occupation','=' , $key->occupation)
        ->where('family_type','!=' , $key->family_type)
        ->where(function($query) use ($ptr_manglik){
            $query->where('is_manglik','!=',$ptr_manglik);
        })
        ->get();
        $show2=DB::table('users')->select('*')
        ->where('gender','!=' ,$request['gender'])

        ->where('occupation','!=' , $key->occupation)
        ->where('family_type','=' , $key->family_type)
        ->where(function($query) use ($ptr_manglik){
            $query->where('is_manglik','!=',$ptr_manglik);
        })
        ->get();
        $show3=DB::table('users')->select('*')
        ->where('gender','!=' ,$request['gender'])

        ->where('occupation','!=' , $key->occupation)
        ->where('family_type','!=' , $key->family_type)
        ->where(function($query) use ($ptr_manglik){
            $query->where('is_manglik','!=',$ptr_manglik);
        })
        ->get();
        foreach($req as $keyre)
        {
            $data[]=$keyre;
        }

        }

        return view('home',compact('data','show','show1','show2','show3'));

    }
}
