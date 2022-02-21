<?php

namespace App\Http\Controllers;

use App\Models\accounts;
use App\Models\Product;
use App\Models\Invoice;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use PharIo\Manifest\Author;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
//use Session;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //echo '12331';
        return view('login.login',['title'=>'Login']);
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
        $messages = [
            'email.required' => 'Vui lòng nhập email!',
            'password.required' => 'Vui lòng nhập mật khẩu!'
        ];
        $this->validate($request,[
            'email'=>'required:filter',
            'password'=>'required:filter',
        ],$messages);
        
        $user=accounts::where('Email',$request->input('email'))->where('Password',$request->input('password'))->where('isadmin',1)->first();
        //dd($user);
        if($user){
            $request->session()->put('loginId',$user->id);
           if($request->session()->has('loginId')){
               $login=accounts::where('id',$request->session()->get('loginId'))->first();
               $request->session()->put('acc_name',$login->FullName);
              
               return Redirect::route('home');
        }
    
    }
    session()->flash('error','Email hoặc mật khẩu không đúng');
    return redirect()->back();
    
}
    public function logout(){
        if(session()->has('loginId')){

            session()->forget('loginId');
            //dd(session()->get('loginId'));
            return redirect('login');

        }
        
        /* Auth::logout();
        $request->session()->invalidate();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return Redirect::route('login'); */

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
