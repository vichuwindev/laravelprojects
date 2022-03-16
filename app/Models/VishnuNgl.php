<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MasterStore;
use DB;
use Log;
use Response;
use Exception;
class VishnuNgl extends Model
{

    protected $table = "vishnu_ngl";
    protected $fillable = ["sale_id","bill_no","bill","bill_day_count","customer_id","customer_name","customer_phone_number","billing_type","payment_type","bill_date","advance_amount","spl_discount","total_amount","product_uid","pack_or_unit","product_name","short_name","product_category","product_sub_category","product_code","product_brand","product_model","product_variants","product_attributes","product_mrp","product_selling_price","special_discount","igst","cgst","sgst","product_total_amount","created_at","createdBy","updated_at","updatedBy"];

    public function AddItems($data){
    	try{
	    	$column['bill'] = $data['billNo'];
	    	$column['product_mrp'] = $data['productMrp'];
	    	$column['product_name'] = $data['productName'];
	    	$column['customer_name'] = $data['customerName'];
	    	$column['customer_phone_number'] = $data['phoneNumber'];
	    	$column['customer_id'] = $data['customerId'];
	    	$column['total_amount'] = $data['totalAmount'];
	    	$column['payment_type'] = $data['paymentType'];
	    	$column['product_uid'] = $data['productUid'];
	    	$column['product_category'] = $data['category'];
	    	$column['product_code'] = $data['code'];
	    	$column['product_sub_category'] = $data['productSubCategory'];
	    	return $this->create($column);
	    }
	    catch(Exception $e){
	    	Log::warning($e);
	    	return $e;
	    }	
    }
}    
