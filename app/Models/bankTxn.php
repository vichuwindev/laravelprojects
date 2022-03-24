<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Log;
use Response;
use Exception;
class VishnuNgl extends Model
{

    protected $table = "bank_tnx_table";
    public function AddItems($data){
    	try{
	    	$column['bank_txn_ref_id'] = $data['billNo'];
	    	$column['sale_ref_id'] = $data['productMrp'];
	    	$column['bill_date'] = $data['productName'];
	    	$column['txn_date'] = $data['customerName'];
	    	$column['store_code'] = $data['phoneNumber'];
	    	$column['mode_of_payment'] = $data['customerId'];
	    	$column['merchant'] = $data['totalAmount'];
	    	$column['card_machine'] = $data['paymentType'];
	    	$column['amount'] = $data['productUid'];
	    	$column['is_deleted'] = $data['category'];
	    	$column['created_by'] = $data['code'];
	    	$column['updated_by'] = $data['productSubCategory'];
	    	return $this->create($column);
	    }
	    catch(Exception $e){
	    	Log::warning($e);
	    	return $e;
	    }	
    }
}   