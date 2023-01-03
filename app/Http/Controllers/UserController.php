<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.order.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function show(Pengguna $pengguna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $name = $request->name;
            $email = $request->email;
            $phone = $request->phone;
            $room = $request->room;
            $street = $request->street;
            $city = $request->city;
            $state = $request->state;
            $zip = $request->zip;

            // $validateData =$request->validate([
            // 'name'=>[
            //     'required',
            //     'string'
            // ],
            // 'email'=>[
            //     'required',
            // ],
            // 'phone'=>[
            //     'required',
            //     'string'
            // ],
            // 'room'=>[
            //     'required',
            //     'integer'
            // ],
            // 'street'=>[
            //     'required',
            //     'string'
            // ],
            // 'city'=>[
            //     'required',
            //     'string'
            // ],
            // 'state'=>[
            //     'required',
            //     'string'
            // ],  
            // 'zip'=>[
            //     'required',
            //     'string'
            // ],

            // ]);
        
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->phone = $phone;
        $user->room = $room;
        $user->street = $street;
        $user->city = $city;
        $user->state = $state;
        $user->zip = $zip;

        $user->save();

        return redirect('home')->with('message', 'Category Update Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengguna $pengguna)
    {
        //
    }
}
