<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\VishnuNgl;
use Log;
use DB;
use Exception;

class ReportController extends Controller
{
    function __construct()
    {
    	$this->vishnu_ngl =new VishnuNgl();
    }
    public function listItems(Request $request){
			DB::select('use vishnudevdb');
			DB::select('show tables');
			$datas = DB::select('select * from vishnu_ngl');
			return view('firstPage')->with(['datas'=>$datas]);
    }
 	public function AddItems(Request $request){
 		$data = $request->input('data');
        $mode=$request->input('mode');
        $id=$request->input('id');
        Log::warning($data);
		$result = $this->vishnu_ngl->AddItems($data,$mode,$id);
		return $result;	
    }   
    public function listBankTxn(Request $request){
    	return view('bankTxn');
    }
    public function listBankTxnData(Request $request){
    	$bankTxnSql = 'select * from bank_tnx_table';
    	$bankTxnResult = DB::select($bankTxnSql);
    	Log::warning($bankTxnResult);
    	return response()->json(["status"=>true,"bankTxnResult"=>$bankTxnResult]);
    }
}
