var bankTxnTable = $(".bankTxnTable").DataTable({
	'fixedHeader':true,
	'bLengthChange':false,
    "searching":false,
    'destroy':true,
    "pageLength": 50,
    "serverMethod":'post',
	 "ajax": {
	    "url":"/bankTxnListDatas",
	    'data': function(data){
	    },  
	    "dataSrc" : function (json) {
	    	console.log(json.bankTxnResult);
	    	let i = 0;
	        $.each(json.bankTxnResult,function(i,v) {
	       		i++;
	       		v.no = i;
	       		v.store_code = v.store_code;
	       		v.payment_type = v.mode_of_payment;
	       		v.amount = v.amount;
	       		v.is_deleted = v.is_deleted; 	

        	})
        	return json.bankTxnResult;
        },
    },
    'columns': [
        {'data':'no'},
        {'data':'store_code'},
        {'data':'payment_type'},
        {'data':'amount'},
        {'data':'is_deleted'},             
    ],               
});
let addTnxButtton = document.querySelector(".addBankTxnList");
let bankTxnModal = document.getElementsByClassName('bankTnxModal');
let closeModals= document.getElementsByClassName('closeModal');
addTnxButtton.addEventListener("click",function(){
    console.log(bankTxnModal);
})
for(let i =0;i<closeModals.length;i++){
    closeModals[i].addEventListener("click",function(){

    })
}    