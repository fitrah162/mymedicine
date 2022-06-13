<?php

namespace App\Http\Controllers;

use App\transaction;
use Illuminate\Http\Request;
use PDO;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaction $transaction)
    {
        //
    }
    public function listTransaction(){
        $res = transaction::all();
        //dd($res);
        return view('transaction.list',compact('res'));
    }
    public function showAjax(Request $request){
        $id = ($request->get('id'));
        $data = transaction::find($id);
        $products = $data->products;
        // dd($products);
        return response()->json(array(
            'msg'=> view('transaction.showmodal',compact('data','products'))->render()
        ),200);
    }
    public function form_submit_front(){
        $this->authorize('checkmember');
        return view('frontend.checkout');
    }

    public function submit_front(){
        $this->authorize('checkmember');
    }
}
