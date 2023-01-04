<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\UserServiceRequest;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class UseeServiceController extends Controller
{
    public function index()
    {
        // return view('user.service.index');
        $service = Service::all();
        return view('user.service.index', [
            // 'kategori' => $kategori,
            'service'=>$service
        ]);
    }

    // public function store(UserServiceRequest $request)
    // {
    //     return view('user.service.index');
    // }

    // public function store(Request $request)
    // {
    //    // dd($request);
    //     $category = $request->category;
    //     $product = $request->product;
    //     $price = $request->price;
    //     $image = $request->image;

    //     $validateData =$request->validate([
    //         'category'=>[
    //             'string'
    //         ],
    //         'product'=>[
    //             'required',
    //             'string'
    //         ],
    //         'price'=>[
    //             'required',
    //             'integer'
    //         ],
    //         'image'=>'mimes:jpg,jpeg,png|image|max:2048'


    //     ]);

    //     $service = new Service();
    //     if($request->hasFile('image')){
    //         $file = $request->file('image');
    //         $ext = $file->getClientOriginalExtension();
    //         $filename= time().'.'.$ext;
    
    //         $file->move('uploads/layanan', $filename);
    //         $service->image = $filename;
    //         }
    
    //     $service ->category=$category;
    //     $service ->product=$product;
    //     $service ->price=$price;
    
    //     $service->save();

    //     // return redirect('service')->with('message', 'Service Added Succesfully');
    // }
}

