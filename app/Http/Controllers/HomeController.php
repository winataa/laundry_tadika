<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    public function index()
    {
        $user=User::all();
        return view('user.order.index', compact('user'));
        // return view('user.home.profile');
    }


    public function profile()
    {
        $user=User::all();
        return view('user.home.index', compact('user'));
        // return view('user.home.profile');
    }
    public function update(Request $request)
    {
        $user = auth()->user();
            $this->validate($request,[
            'name'=>[
                'required',
                'string'
            ],
            'email'=>[
                'required',
            ],
            'phone'=>[
                'required',
                'string'
            ],
            'room'=>[
                'required',
                'integer'
            ],
            'street'=>[
                'required',
                'string'
            ],
            'city'=>[
                'required',
                'string'
            ],
            'state'=>[
                'required',
                'string'
            ],  
            'zip'=>[
                'required',
                'string'
            ],

            ]);
        
        // $user->name =$request->name;
        // $user->email =$request->email;
        // $user->phone =$request->phone;
        // $user->room =$request->room;
        // // $user->password =$request->password;
        // $user->street =$request->street;
        // $user->city =$request->city;
        // $user->state =$request->state;
        // $user->zip =$request->zip;
        // $user->save();

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'room' => $request->room,
            'phone' => $request->phone,
            'street' => $request->street,
            // 'password' => $request->password,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,

        ]);



        return redirect('home')->with('message', 'Profile Update Succesfully');
    }
}
