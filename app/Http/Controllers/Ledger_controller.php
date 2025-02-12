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
        $data = new Statement_log();
        $rs_log = $data->get_log();
        $rs_date = $data->get_date();
        return view('Ledger.v_ledger',[
            'result'=> $rs_log,
            'result_date'=> $rs_date
        ]);
    }

    public function show_ledger_detail($created_at){
        $data = new Statement_log();
        $rs_statement_log = $data->get_log_id($created_at);
        return view('Ledger.v_ledger_detail')->with('result',$rs_statement_log);
    }

    public function show_ledger_add(){
        return view('Ledger.v_add_ledger');
    }

    public function show_ledger_edit($log_id){
        $data = new Statement_log();
        $rs_edit = $data->get_log_by_id($log_id);
        return view('Ledger.v_edit_ledger')->with('result',$rs_edit);
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
            'description'=>'required',

        ]);
       
        $rs_log = new Statement_log([
            // 'date' =>  $date,
            'product_name' => $request->get('product_name'),
            'log_type_id' => $request->get('type'),
            'balance' => $request->get('balance'),
            'description' => $request->get('description')
        ]);
        $rs_log->log_user_id = Auth::user()->user_id;
        $rs_log->is_active = 0;
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
    public function update(Request $request)
    {
        $data = new Statement_log();
        $rs_created = $data->get_created_at($request->log_id);
        // dd();
        $rs_log = Statement_log::find($request->log_id);
        $rs_log->product_name = $request->get('product_name');
        $rs_log->log_type_id = $request->get('type');
        $rs_log->balance = $request->get('balance');
        $rs_log->description = $request->get('description');
        $rs_log->save();
        return redirect()->action('Ledger_controller@show_ledger_detail',$rs_created[0]->created_at);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($log_id)
    {
        $qu_log = Statement_log::find($log_id);
        $qu_log->is_active = 1;
        $qu_log->save();
        $data = new Statement_log();
        $rs_created = $data->get_created_at($log_id);
        return redirect()->action('Ledger_controller@show_ledger_detail',$rs_created[0]->created_at);
    }
}
