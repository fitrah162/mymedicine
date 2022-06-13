<?php

namespace App\Http\Controllers;

use App\category;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Query RAW
        // $listData = DB::select(DB::raw('SELECT * FROM categories'));
        //dd($listData);

        //Query Builder
        //$listData = DB::table('categories')->get();
        //dd($listData);

        //Eloquent Model
        $listData = category::all();
        //dd($listData);

        //$listDataProduct = product::all();
        return view('category.index',compact('listData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("insert.category");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new category();
        $data->name = $request->get('name');
        $data->description = $request->get('description');
        $data->save();
        return redirect()->route('category_Medicine.index')->with('status','Category is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
    }
    public function showCategory(){
        $res = category::all();
        return view('category.list',compact('res'));
    }
    public function listCategory(){
        $res = category::get();
        $res = DB::table('categories')->get();
        return view('report.viewCat',compact('result'));  
    }
    public function countCategoryWithProduct(){
        $res = category::join('products as p','categories.id','=','p.category')
            ->distinct()->count('categories.id');
        $res = DB::table('products as p','categories.id','=','p.category')
            ->distinct()->count('categories.id');
        return view('report.viewCat',compact('$res'));
        
    }
    public function countCategoryWithoutProduct(){
        $res = category::leftjoin('products as p','categories.id','=','p.category')
        ->where('p.category')->select('categories.name')->get();
        $res = DB::table('categories as c')
            ->leftJoin('products as p','c.id','=','m.category')
            ->where('p.category')->select('c.name')->get();
        
        return view('report.viewCat',compact('$res'));
    }
    public function categoryWithOnly1Med(){
        $res =category::join('products as p','categories.id','=','p.category')
            ->groupBy('categories.id','categories.name')
            ->having(DB::raw('count(p.category)'),1)
            ->select('categories.name')
            ->get();
        $res = DB::table('categories as c')
            ->join('products as p','categories.id','=','p.category')
            ->groupBy('c.id','c.name')
            ->having(DB::raw('count(m.category)'),1)
            ->select('c.name')
            ->get();
        dd($res);
        return view('report.viewCat',compact('$res'));
    }
    public function getEditForm(Request $request)
    {
        $id = $request->get('id');
        $data = category::find($id);
        return response()->json(array(
            'status' => 'oke',
            'msg' => view('category.getEditForm', compact('data'))->render()
        ), 200);
    }
}
