<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $kategori=Category::all();
        $service = Service::all();
        return view('admin.layanan.index', [
            // 'kategori' => $kategori,
            'service'=>$service
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     
    public function create()
    {
        // $kategori=Category::all();;
        //$service = Service::all();
        return view('admin.layanan.create', [
            // 'kategori' => $kategori,
            // 'service'=>$service
        ]);


    }
    // public function store()
    // {
    //     $data=$this->request->getPost();
    //     $this->model->insert($data);
    //     return redirect('service')->with('message', 'Service Added Succesfully');
        

    // }

    public function store(Request $request)
    {
       // dd($request);
        $category = $request->category;
        $product = $request->product;
        $price = $request->price;
        $image = $request->image;

        // // $table->bigIncrements('service_id');
        // //     $table->unsignedBigInteger('id_category');
        // //     $table->string('product');
        // //     $table->integer('laundry_price');
        // //     $table->integer('dryclean_price');
        // //     $table->integer('wash_price');
        // //     $table->integer('dry_price');
        // //     $table->integer('iron_price');
        // //     $table->integer('image')->nullable();
        // //     $table->timestamps();
        // // });
        $validateData =$request->validate([
            'category'=>[
                'string'
            ],
            'product'=>[
                'required',
                'string'
            ],
            'price'=>[
                'required',
                'integer'
            ],
            'image'=>'mimes:jpg,jpeg,png|image|max:2048'


        ]);
        // $service = new Service([
        //     'id_category' => $request->get('id_category'),
        //     'product' => $request->get('product'),
        //     'laundry_price' => $request->get('laundry_price'),
        //     'dryclean_price' => $request->get('dryclean_price'),
        //     'wash_price' => $request->get('wash_price'),
        //     'dry_price' => $request->get('dry_price'),
        //     'iron_price' => $request->get('iron_price')
        // ]);
        
        // if(Service::create([
        //     'id_category' => $request->get('id_category'),
        //     'product' => $request->get('product'),
        //     'laundry_price' => $request->get('laundry_price'),
        //     'dryclean_price' => $request->get('dryclean_price'),
        //     'wash_price' => $request->get('wash_price'),
        //     'dry_price' => $request->get('dry_price'),
        //     'iron_price' => $request->get('iron_price')
        // ]))
        $service = new Service();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
    
            $file->move('uploads/layanan', $filename);
            $service->image = $filename;
            }
    
        $service ->category=$category;
        $service ->product=$product;
        $service ->price=$price;
    
        $service->save();


        // $data =$this->request()->getPost();
        // $this->service->insert($data);

        // if(Service::create([
        //     'id_category' => $request->id_category,
        //     'product' => $request->product,
        //     'laundry_price' => $request->laundry_price,
        //     'dryclean_price' => $request->dryclean_price,
        //     'wash_price' => $request->wash_price,
        //     'dry_price' => $request->dry_price,
        //     'iron_price' => $request->iron_price,
        //     'image'=>$request->image
        // ]))


        return redirect('service')->with('message', 'Service Added Succesfully');

      
    }



    public function update(Request $request, Service $service)
    {
            $this->validate($request,[
                'category'=>[
                    'string'
                ],
                'product'=>[
                    'required',
                    'string'
                ],
                'price'=>[
                    'required',
                    'integer'
                ],
                'image'=>'mimes:jpg,jpeg,png|image|max:2048'
    
            ]);

          
            // $category->name =$request->name;
            // $category->description =$request->description;
            // if($request->hasFile('image')){
            //     $file = $request->file('image');
            //     $ext = $file->getClientOriginalExtension();
            //     $filename= time().'.'.$ext;
        
            //     $file->move('uploads/category', $filename);
            //     $category->image = $filename;
            //     }
           
            // $category->save();    
            $service ->category=$request->category;
            $service ->product=$request->product;
            $service ->price=$request->price;
    
            if($request->hasFile('image')){
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename= time().'.'.$ext;
        
                $file->move('uploads/layanan', $filename);
                $service->image = $filename;
                }
            $service->save();

        return redirect('service')->with('message', 'Service Update Succesfully');
    }

    public function edit(Service $service)
    {
        // $kategori=Category::all();
       // dd($service);
        // return view('admin.layanan.edit', compact(['kategori''service' ]));
        return view('admin.layanan.edit', compact('service'));
       // return view('admin.layanan.edit', compact('service'));
    }

    public function delete($service_id)
    {
        DB::table('services')->where('service_id', $service_id)->delete();
        return redirect('service')->with('message', 'Service Delete Succesfully');
    }

    // public function delete($id)
    // {
    //     DB::table('categories')->where('id', $id)->delete();
    //     return redirect('category')->with('message', 'Category Added Succesfully');
    // }
    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Service  $service
    //  * @return \Illuminate\Http\Response
    //  */
    public function show(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
