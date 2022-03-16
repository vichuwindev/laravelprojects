$(document).ready(function() {
	$(".productTable").DataTable({
		"searching":false,
		"pageLength":30,
		"bLengthChange":false,
	});
})
$(document).on('click','.addList',function(){
	$("#exampleModal").modal('show');
})
$(document).on('click','.closeModal',function(){
	$("#exampleModal").modal('hide');
	$('.clearInput').val('');
})
$(document).on('click','.submitList',() => {
    var data = inputGet();
    $.ajax({
        async: false,
        type: "POST",
        url: "/AddItems",
        data: {'data':data},
        success: function(json){
    		alert('Bill created succesfully');
    		$('.closeModal').click();
        }
    })    	
})
function inputGet(){
	var billNo = $('.billNo').val();
    var productMrp = $('.productMrp').val();
    var productName = $('.productName').val();
    var customerName = $('.customerName').val();
    var phoneNumber = $('.phoneNumber').val();
    var customerId = $('.customerId').val();
    var totalAmount = $('.totalAmount').val();
    var paymentType = $('.paymentType').val();
    var productUid = $('.productUid').val();
    var category = $('.category').val();
    var code = $('.code').val();
    var productSubCategory = $('.variants').val();
    var data = {
		'billNo':billNo,
		'productMrp':productMrp,
		'productName':productName,
		'customerName':customerName,
		'phoneNumber':phoneNumber,
		'customerId':customerId,
		'totalAmount':totalAmount,
		'paymentType':paymentType,
		'productUid':productUid,
		'category':category,
		'code':code,
		'productSubCategory':productSubCategory,
	}
	return data;
}