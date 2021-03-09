<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Statement;

class Ledger_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = new Statement();
        $rs_statement = $data->get_statement();
        return view('Ledger.v_ledger')->with('result',$rs_statement);
    }

    public function show_ledger_detail()
    {
        return view('Ledger.v_ledger_detail');
    }

    public function show_ledger_add()
    {
        return view('Ledger.v_add_ledger');
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
        $this->validate($request,[
            'product_name'=> ['required','unique:Statement_log'],
            'type'=> ['required','unique:Statement_log'],
            'balance'=>'required',
            'description'=>'required'
        ]);
       
        $qu_user = new Statement_log([
            // 'date' =>  $date,
            'product_name' => $product_name,
            'type' => $type,
            'balance' => $balance,
            'description' => $description
        ]);
        
        $qu_user->save();
        return response()->json(['success'=>'Ajax successfilly']);
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
