@extends('layout')
<!DOCTYPE html>
<html>
<head>
	<script src="{{ asset('js/bankTxn.js') }}"defer></script>
	<style type="text/css">
		.row{
			padding:0 0 0 5px;
		}
		.dateTimeWidth{
            width: 50px;
        }
	</style>
</head>
<body>
	<div class="row">
		<div class="col-md-3">
			<h3>Bank Transaction List</h3>
		</div>
	</div>
	<div class="marginBody">
		<form>
			<div class="flexParent">
				<div class="lastFlexChild">
					<a href="#" class="addBankTxnList" data-toggle="modal" data-target=".bankTnxModal">Add</a>
				</div>
			</div>
		</form>
		<table width="100%" class="bankTxnTable" cellspacing="0">
			<thead>
				<tr>
					<th>No</th>
					<th>Store Code</th>
					<th>Payment Type</th>
					<th>Amount</th>
					<th>Is Deleted</th>
				</tr>	
			</thead>
			<tbody>
				
			</tbody>
		</table>
		<div class="modal fade bankTnxModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header flexParent">
                <h5 class="modal-title" style="margin-right: auto;" id="exampleModalLabel">Product Entry Modal</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <form class="listDetailForm">
                	<div class="row no-gutters">
                		<div class="col-sm-4">
                			<label>Bank Transaction Id
                				<input class="billNo clearInput" type="text" name="">
                			</label>
                		</div>
                		<div class="col-sm-4">
                			<label>Sales Reference Id
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
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitList">Submit</button>
              </div>
            </div>
          </div>
        </div>
	</div>	
</body>
</html>