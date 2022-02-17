<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->has('ADMIN_LOGIN')){
            return redirect('admin/dashboard');
        }
        else{
            return view('adminlogin');
        }
        return view('adminlogin');
    }

    public function auth(Request $request)
    {
        $name=$request->post('name');
        $password=$request->post('password');

        $result=DB::table('admins')->where(['name'=>$name])->first();
        if($result){
            if($password==$result->password){
                $request->session()->put('ADMIN_LOGIN',true);
                $request->session()->put('ADMIN_ID',$result->id);
                return redirect('admin/dashboard');
            }else{
                $request->session()->flash('error','Please enter Valid password');
                return redirect('admin');
            }

        }else{
            $request->session()->flash('error','Please enter Valid login details');
            return redirect('admin');
        }
    }
    public function dashboard($item='')
    {
        $result['data']=DB::table('users')->select('*')
        ->get();
        $result['Female']='Female';
        return view('dashboard',$result);
    }
    public function filter(Request $request ,$item)
    {

        $result['data']=DB::table('users')->select('*')
        ->where('gender','LIKE','%'.$item.'%' )
        ->orWhere('family_type','LIKE','%'.$item.'%' )
        ->orWhere('occupation','LIKE','%'.$item.'%' )
        ->orWhere('Is_manglik','LIKE','%'.$item.'%' )

        ->get();

        return view('dashboard',$result);
    }
}
