@extends('layout')
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="{{ asset('js/firstPage.js') }}"></script>
	<style type="text/css">
		.row{
			padding:0 0 0 5px;
		}
	</style>
</head>
<body>
</body>
</html>
<div class="row">
	<div class="col-md-3">
		<h3>Products List</h3>
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
					<td>{$data->product_variants}</td>
					<td><a href='#'>Update</a></td>
				</tr>";
		}
		@endphp
		</tbody>
	</table>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product Entry Modal</h5>
        <button type="button" class="closeModal btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
        	<div class="row no-gutters">
        		<div class="col-md-3">
        			<label>Bill No
        				<input class="billNo clearInput" type="text" name="">
        			</label>
        		</div>
        		<div class="col-md-3">
        			<label>Product Mrp
        				<input class="productMrp clearInput" type="text" name="">
        			</label>
        		</div>
        		<div class="col-md-3">
        			<label>Product name
        				<input class="productName clearInput" type="text" name="">
        			</label>
        		</div>
        	</div>
        	<hr/>
        	<div class="row no-gutters">
        		<div class="col-md-3">
        			<label>Customer Name
        				<input class="customerName clearInput" type="text" name="">
        			</label>
        		</div>
        		<div class="col-md-3">
        			<label>customer phone number
        				<input class="phoneNumber clearInput"  type="text" name="">
        			</label>
        		</div>
        		<div class="col-md-3">
        			<label>Customer ID
        				<input class="customerId clearInput" type="text" name="">
        			</label>
        		</div>
        	</div>
        	<hr/>
        	<div class="row no-gutters">
        		<div class="col-md-3">
        			<label>Total Amount
        				<input class="totalAmount clearInput" type="text" name="">
        			</label>
        		</div>
        		<div class="col-md-3">
        			<label>Payment Type
        				<input class="paymentType clearInput" type="text" name="">
        			</label>
        		</div>
        		<div class="col-md-3">
        			<label>Product UID
        				<input class="productUid clearInput" type="text" name="">
        			</label>
        		</div>
        	</div>
        	<hr/>
        	<div class="row no-gutters">
        		<div class="col-md-3">
        			<label>Category
        				<input class="category clearInput" type="text" name="">
        			</label>
        		</div>
        		<div class="col-md-3">
        			<label>Code
        				<input class="code clearInput" type="text" name="">
        			</label>
        		</div>
        		<div class="col-md-3">
        			<label>SubCategory
        				<input class="variants clearInput" type="text" name="">
        			</label>
        		</div>
        	</div>		
        </div>	
      </div>
      <div class="modal-footer">
        <button type="button" class="closeModal btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary submitList">Submit</button>
      </div>
    </div>
  </div>
</div>


