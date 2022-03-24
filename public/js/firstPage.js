var productTable = $(".productTable").DataTable({
						"searching":false,
						"pageLength":30,
						"bLengthChange":false,
					});

$(document).on('click','.addList',function(){
	$('.clearInput').val('');
	$(".exampleModal").modal('show');
	$(document).find('.submitList').html('Submit');
	$(document).find('.submitList').attr('data-type','add').attr('data-id','new');
})
$(document).on('click','.closeModal',function(){
	$(".exampleModal").modal('hide');
	$('.clearInput').val('');
})
$(document).on('click','.submitList',function(){
	var mode = $(this).attr('data-type');
	let id = $(this).attr('data-id');
    var data = inputGet();
    console.log(id)
    console.log(mode)
    console.log(data)
    $.ajax({
        async: false,
        type: "POST",
        url: "/AddItems",
        data: {'data':data,'mode':mode,'id':id},
        success: function(json){
    		alert('Bill created succesfully');
    		$('.closeModal').click();
    		location.reload();
    		// sproductTable.ajax.reload();
        }
    })	
})
$(document).on("click","#editList",function(){
	$(".exampleModal").modal('show');
	let listValues = JSON.parse($(this).attr('data-values'));
	let id = $(this).attr('data-id');
	$(document).find('.submitList').html('Update');
	$(document).find('.submitList').attr('data-type','edit').attr('data-id',id);
	$(document).find('.clearInput').each(function(i,v){
		let inputClassNames = v.className.split(' ')[0];
		$("."+inputClassNames).val(listValues[inputClassNames]);
	})

})
// let updateButton = document.getElementById("editList");
// updateButton.onclick =()=>{
// 	$(".exampleModal").modal('show');
// 	$(document).find('.submitList').html('Update');
// 	$(document).find('.submitList').attr('data-type','edit');
// 	$(document).find('.clearInput').each(function(i,v){
// 		console.log(v.className);
// 	})
// }
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
    var productSubCategory = $('.subCategory').val();
    var fromDate = $(".from_Date").val();
    var toDate = $(".to_Date").val();
    console.log(fromDate)
    console.log(toDate)
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
		'billDate':fromDate + toDate
	}
	return data;
}
