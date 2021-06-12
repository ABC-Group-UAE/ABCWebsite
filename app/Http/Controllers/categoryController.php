<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Category = Category::all()->where('Status','Active');
        return view('Category.CategoryHome', compact('Category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Category.CategoryAdd');
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
        //dd($request->all());
        $attributes = $request->validate([
            'Category_ID'=> 'required',
            'Category_Name'=>'required',
            'Description'=>'required'
        ]);
        //dd($attributes);
        $category  = new Collection;
        $category=Category::findorfail($request->get('Category_ID'));
        return $category;
        if($category->count()){
            $category->update([
                'Category_ID'=>$request->get('Category_ID'),
                'Category_Name'=>$request->get('Category_Name'),
                'Description'=>$request->get('Description'),
                'Status'=>'Active'
                ]);
        }else{
            Category::create($attributes);
        }    
        
     
        return redirect('category');
    }
       // $category = new Category;
        // $category->Category_ID = $request->get('Category_ID');
        // $category->Category_Name = $request->get('Category_Name');
        // $category->Description = $request->get('Description');
        // $category->Status = 'Active';
        // $category->save();
        //dd($attributes);

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
       // dd($category);
        $category->update([
            'Status'=>'Inactive'
        ]);
        //dd($category);
            return redirect('category');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $Category)
    {
       
       //dd($category);
       return view('Category.CategoryEdit',compact('Category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $category->update([
        'Category_ID'=>$request->get('Category_ID'),
        'Category_Name'=>$request->get('Category_Name'),
        'Description'=>$request->get('Description')
        ]);

       // dd('Updated Successfully');
        return redirect('category');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category->update([
            'Status'=>'Inactive',
            ]);
            return redirect('category');
    }
}
