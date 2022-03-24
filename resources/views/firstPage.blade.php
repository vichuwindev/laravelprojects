@extends('layout')
<!DOCTYPE html>
<html>
<head>
	<script src="{{ asset('js/firstPage.js') }}"defer></script>
	<style type="text/css">
		.row{
			padding:0 0 0 5px;
		}
	</style>
</head>
<body>
<div class="row">
	<div class="col-md-3">
		<h3 class="">Products List</h3>
	</div>
</div>
<div class="marginBody">	
	<form>
		<div class="flexParent">
			<div class="lastFlexChild">
				<a href="#" class="addList">Add</a>
			</div>
		</div>
	</form>
	<table class="productTable" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>Bill No</th>
				<th>Customer Id</th>
				<th>Customer Name</th>
				<th>Customer Phone NO</th>
				<th>Payment Type</th>
				<th>Total Amount</th>
				<th>Product Uid</th>
				<th>Product Name</th>
				<th>Product Category</th>
				<th>Product Variants</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		@php
			foreach($datas as $data){
			echo "<tr>
					<td>{$data->bill_no}</td>
					<td>{$data->customer_id}</td>
					<td>{$data->customer_name}</td>
					<td>{$data->customer_phone_number}</td>
					<td>{$data->payment_type}</td>
					<td>{$data->total_amount}</td>
					<td>{$data->product_uid}</td>
					<td>{$data->product_name}</td>
					<td>{$data->product_category}&nbsp;/&nbsp;{$data->product_code}</td>
					<td class='variantsTd' data-id='$(data->bill_no}'>{$data->product_variants}</td>
					<td><a href='#' data-id='$data->bill_no' data-type='add' data-values='{\"billNo\":\"{$data->bill_no}\",\"customerId\":\"{$data->customer_id}\",\"customerName\":\"{$data->customer_name}\",\"phoneNumber\":\"{$data->customer_phone_number}\",\"customerId\":\"{$data->customer_id}\",\"totalAmount\":\"{$data->total_amount}\",\"productUid\":\"{$data->product_uid}\",\"paymentType \":\"{$data->payment_type}\",\"productName\":\"{$data->product_name}\",\"category\":\"{$data->product_category}\",\"code\":\"{$data->product_code}\",\"productMrp\":\"{$data->product_mrp}\",\"subCategory\":\"{$data->product_sub_category}\"}' id='editList'>Update</a></td>
					<input type='hidden' value='sss' class='hiddenInput'> 
				</tr>";
		}
		@endphp
		</tbody>
	</table>
</div>
<div class="modal fade exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header flexParent">
        <h5 class="modal-title" id="exampleModalLabel">Product Entry Modal</h5>
        <div class="lastFlexChild">
            <label>Date</label>
            <input class="form-control from_Date" style="width:100px;" type="date" name=""/>
        </div>
        <div>    
            <label>Time</label>
            <input class="form-control to_Date flexChild" style="width:100px;" type="time" name=""/>
        </div>       
        <button type="button" class="closeModal btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="listDetailForm">
        	<div class="row no-gutters">
        		<div class="col-sm-4">
        			<label>Bill No
        				<input class="billNo clearInput" type="text" name="">
        			</label>
        		</div>
        		<div class="col-sm-4">
        			<label>Product Mrp
        				<input class="productMrp clearInput" type="text" name="">
        			</label>
        		</div>
        		<div class="col-sm-4">
        			<label>Product name
        				<input class="productName clearInput" type="text" name="">
        			</label>
        		</div>
        	</div>
        	<hr/>
        	<div class="row no-gutters">
        		<div class="col-sm-4">
        			<label>Customer Name
        				<input class="customerName clearInput" type="text" name="">
        			</label>
        		</div>
        		<div class="col-sm-4">
        			<label>customer phone number
        				<input class="phoneNumber clearInput"  type="text" name="">
        			</label>
        		</div>
        		<div class="col-sm-4">
        			<label>Customer ID
        				<input class="customerId clearInput" type="text" name="">
        			</label>
        		</div>
        	</div>
        	<hr/>
        	<div class="row no-gutters">
        		<div class="col-sm-4">
        			<label>Total Amount
        				<input class="totalAmount clearInput" type="text" name="">
        			</label>
        		</div>
        		<div class="col-sm-4">
        			<label>Payment Type
        				<input class="paymentType clearInput" type="text" name="">
        			</label>
        		</div>
        		<div class="col-sm-4">
        			<label>Product UID
        				<input class="productUid clearInput" type="text" name="">
        			</label>
        		</div>
        	</div>
        	<hr/>
        	<div class="row no-gutters">
        		<div class="col-sm-4">
        			<label>Category
        				<input class="category clearInput" type="text" name="">
        			</label>
        		</div>
        		<div class="col-sm-4">
        			<label>Code
        				<input class="code clearInput" type="text" name="">
        			</label>
        		</div>
        		<div class="col-sm-4">
        			<label>SubCategory
        				<input class="subCategory clearInput" type="text" name="">
        			</label>
        		</div>
        	</div>		
        </form>	
      </div>
      <div class="modal-footer">
        <button type="button" class="closeModal btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary submitList">Submit</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>


