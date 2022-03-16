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
			$datas = DB::select('select * from vishnu_ngl where customer_id is not null');
			return view('firstPage')->with(['datas'=>$datas]);
    }
 	public function AddItems(Request $request){
 		$data = $request->input('data');
		$result = $this->vishnu_ngl->AddItems($data);
		return $result;	
    }   
}
