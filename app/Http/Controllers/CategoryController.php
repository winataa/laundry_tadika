<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $categories = DB::table('categories')->get();
       // return view('admin.category.index',['categories'=>$categories]);
        $kategori=Category::all();
        return view('admin.category.index',compact('kategori'));
    
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $description = $request->description;
        $image = $request->image;

        $validateData =$request->validate([
            'name'=>[
                'required',
                'string'
            ],
            'description'=>[
                'required',
            ],
            'image'=>'mimes:jpg,jpeg,png|image|max:2048',  
            'status'=>[
                //'required',
                //'string'
            ]


        ]);
        $category = new Category();
        $category->name = $name;
        $category->description = $description;

        if($request->hasFile('image')){
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename= time().'.'.$ext;

        $file->move('uploads/category', $filename);
        $category->image = $filename;
        }

        $category->save();
        return redirect('category')->with('message', 'Category Added Succesfully');
    }

    public function edit(Category $category)
    {

        return view('admin.category.edit', compact('category'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
            $this->validate($request,[
            'name'=>[
                'required',
                'string'
            ],
            'description'=>[
                'required',
            ],
            'image'=>'mimes:jpg,jpeg,png|image|max:2048'

            ]);

        $category->name =$request->name;
        $category->description =$request->description;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
    
            $file->move('uploads/category', $filename);
            $category->image = $filename;
            }
       
        $category->save();

        return redirect('category')->with('message', 'Category Update Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('categories')->where('id', $id)->delete();
        return redirect('category')->with('message', 'Category Added Succesfully');
    }
}
