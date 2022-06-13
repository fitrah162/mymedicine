<?php

namespace App\Http\Controllers;

use App\category;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selectCategory = category::all();
        //Query RAW
        $res = DB::select(DB::raw('SELECT * FROM products'));
        //dd($listData);

        //Query Builder
        $res = DB::table('products')->get();
        //dd($listData);

        //Eloquent Model
        $res = product::all();
        //dd($listData);

        return view('product.index', compact('res','selectCategory'));

        //         -- Tugas Week 4
        // -- Query 1 table
        // -- 1.tampilkan seluruh data katergori obat
        // select * from categories;

        // -- 2.tampilkan seluruh nama medicines, formula, dan harga
        // select generic_name, form, price from products;

        // -- query inner join 2 table
        // -- 1.tampilkan seluruh nama medicines, formula, dan nama kategori
        // select p.generic_name, p.form, c.name from products p 
        // inner join categories c on p.category = c.id;

        // -- ada agregasi sum, count dengan 2 table
        // -- 1. Tampilkan jumlah kategori yang memiliki data medicines
        // select COUNT(DISTINCT(p.category)) from products p 
        // inner join categories c on p.category = c.id;

        // -- 2. Tampilkan nama kategori yang tidak memiliki data medicines satupun
        // select name from categories 
        // where id not in (select DISTINCT(category) from products);

        // -- 3. Tampilkan rata-rata harga setiap kategori obat. Bila tidak ada obat maka berikan 0
        // select c.id, c.name, IFNULL(avg(p.price), 0) AS average from products p 
        // right join categories c on p.category = c.id 
        // group by c.id;

        // -- 4. Tampilkan kategori obat yang memiliki 1 produk medicines saja
        // select c.name from products p
        // inner join categories c on p.category = c.id 
        // group by c.name having count(p.category) = 1;

        // -- 5. Tampilkan obat yang memiliki satu form
        // select generic_name from products group by generic_name having count(form) = 1;

        // -- 6. Tampilkan kategori dan nama obat yang memiliki harga termahal
        // select p.generic_name, c.name, p.price from products p 
        // inner join categories c on p.category = c.id 
        // where p.price = (select max(price) from products)
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selectCategory = category::all();
        
        return view("insert.product",compact('selectCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new product();
        $data->generic_Name = $request->get('generic_Name');
        $data->form = $request->get('form');
        $data->restriction_Formula= $request->get('formula');
        $data->description = $request->get('description');
        $files = $request->file('img');
        $imgFolder = 'img';
        $imgFiles = time()."_".$files->getClientOriginalName();
        $files->move($imgFolder,$imgFiles);
        $data->img= $imgFiles;
        $data->price = $request->get('price');
        $data->faskes_TK1 = $request->get('faskes1');
        $data->faskes_TK2 = $request->get('faskes2');
        $data->faskes_TK3 = $request->get('faskes3');
        $data->category = $request->get('category');
        $data->save();
        return redirect()->route('medicines.index')->with('status','Medicine is added');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        $res = product::find($product);
        $message = "";
        if ($res) {
            $message = $res;
        } else {
            //apabila result null
            $message = NULL;
        }
        //parsing
        return view('product.view', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        $res = product::find($product);
        $pCategory = category::all();
        return view('edit.product',compact('res','pCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product)
    {
        $res = product::find($product);
        $res->form = $request->get('form');
        $res->generic_Name = $request->get('generic_Name');
        $res->restriction_Formula= $request->get('formula');
        $res->description = $request->get('description');
        $res->img = $request->get('img');
        $res->price = $request->get('price');
        $res->faskes_TK1 = $request->get('faskes1');
        $res->faskes_TK2 = $request->get('faskes2');
        $res->faskes_TK3 = $request->get('faskes3');
        $res->category = $request->get('category');
        $res->save();
        return redirect()->route('medicines.index')->with('status','Medicine is changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        $res = product::find($product);
        //dd($res);
        try{
            $res->delete();
            return redirect()-> route('medicines.index')->with('status','Data Product berhasil dihapus');
        }catch(\PDOException $e){
            $msg = "Data gagal dihapus. Pastikan data yang bersangkutan sudah hilang";
            return redirect()->route('medicines.index')->with('error',$msg);
        }

    }
    public function listProduct()
    {
        $res = product::select('generic_Name', 'restriction_Formula', 'price')
            ->get();
        $res = DB::table('products')
            ->select('generic_Name', 'restriction_Formula', 'price')
            ->get();
        return view('report.viewCat', compact('result'));
    }
    public function listProductWithCategory()
    {

        $res = product::join('categories', 'product.category', '=', 'categories.id')
            ->select('product.generic_Name', 'product.form', 'categories.name')
            ->get();


        $res = DB::table('medicines')
            ->join('categories', 'medicines.category_id', '=', 'categories.id')
            ->select('medicines.generic_name', 'medicines.form', 'categories.name')
            ->get();

        return view('', compact('$res'));
    }

    public function avgPrice()
    {
        $avgEl = product::leftjoin('categories as c', 'products.category', '=', 'c.id')
            ->groupby('c.id')
            ->select(DB::Raw('IFNULL(AVG(products.price), 0'))
            ->get();
        $avgTb = DB::table('products as p')
            ->leftjoin('categories as c', 'p.category', '=', 'id')
            ->groupBy('c.id')
            ->select(DB::Raw('IFNULL(AVG(m.price),0)'))
            ->get();

        return view('report.viewCat', compact('$res'));
    }

    public function productOneForm()
    {

        $res = DB::table('products')
            ->groupby('generic_Name')
            ->having(DB::raw('count(form)'), 1)
            ->select('generic_Name', DB::raw('count(form)'))
            ->get();


        $res = product::groupby('generic_Name')
            ->having(DB::raw('count(form)'), 1)
            ->select('generic_Name', DB::raw('count(obat160419162.harga)'))
            
            ->get();

        //dd($data);

        return view('', compact('$res'));
    }

    public function highestMedicine()
    {
        $maxPrice = product::max('price');
        $res = product::join('categories as c', 'products.category', '=', 'c.id')
            ->where('products.price', $maxPrice)
            ->select('c.name', 'products.generic_Name', 'products.price')
            ->get();

        $res = DB::table('products as p')
            ->join('categories as c', 'm.category', '=', 'c.id')
            ->where('p.price', $maxPrice)
            ->select('c.name', 'p.generic_Name', 'p.price')
            ->get();

        return view('report.viewCat', compact('$res'));
    }
    public function showInfo()
    {
        $result = product::orderBy('price', 'DESC')->first();
        return response()->json(array(
            'status' => 'oke',
            'msg' => "<div class='alert alert-info'>
    Did you know? <br>The most expensive product is " . 
    $result->generic_Name . "</div>"
        ), 200);
    }
    public function getEditForm(Request $request)
    {
        $id = $request->get('id');
        $data = product::find($id);
        $selectCategory = category::all();
        return response()->json(array(
            'status' => 'oke',
            'msg' => view('product.getEditMedicine', compact('data','selectCategory'))->render()
        ), 200);
    }
    public function front_index(){
        $products = product::all();
        return view('frontend.product',compact('products'));
    }
    public function addToCart($id){
        $p = product::find($id);
        $cart = session()->get('cart');
        if(!isset($cart[$id])){
            $cart[$id] =[
                "name"=>$p->generic_Name,
                "quantity"=>1,
                "price"=>$p->price,
                "photo"=>$p->img

            ];
        }else{
            $cart[$id]['quantity']++;
        }

        session()->put('cart',$cart);
        return redirect()->back()->with('success','Product added to cart successfully!');
    }
    public function cart(){
        return view('frontend.cart');
    }
    public function saveDataField(Request $request){
        $id = $request->get('id');
        $name = $request->get('name');
        $value = $request->get('value');

        $medicines = product::find($id);
        $medicines->$name= $value;
        $medicines->save();
        return response()->json(array(
            'status'=>'ok',
            'msg'=>'medicine data updated'
        ),200);
    }
}
