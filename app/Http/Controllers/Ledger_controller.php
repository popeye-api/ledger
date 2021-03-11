<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Statement;
use App\Statement_log;
use App\Ledger_account;


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

    public function show_ledger_detail($statement_id){
        $data = new Statement_log();
        $rs_statement_log = $data->get_log($statement_id);
        return view('Ledger.v_ledger_detail')->with('result',$rs_statement_log);
    }

    public function show_ledger_add(){
        return view('Ledger.v_add_ledger');
    }

    public function show_ledger_edit($log_id){
        return view('Ledger.v_edit_ledger')->with('result',$log_id);
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
            'product_name'=> 'required',
            'type'=> 'required',
            'balance'=>'required',
            'description'=>'required'
        ]);
       
        $rs_log = new Statement_log([
            // 'date' =>  $date,
            'product_name' => $request->get('product_name'),
            'log_type_id' => $request->get('type'),
            'balance' => $request->get('balance'),
            'description' => $request->get('description')
        ]);
        // $rs_statement = new Statement([
        //     'statement_balance' => 
        // ]);
        // $rs_statement->statement_balance
        // $rs_statement->save();
        // $rs_log = new Statement_log([
        //     // 'date' =>  $date,
        //     'product_name' => $request->get('product_name'),
        //     'log_type_id' => $request->get('type'),
        //     'balance' => $request->get('balance'),
        //     'description' => $request->get('description')
        // ]);

        $rs_log->save();
        return redirect("v_ledger");
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
