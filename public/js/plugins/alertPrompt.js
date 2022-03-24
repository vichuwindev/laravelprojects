function miruAlert (options) {
var deferredObject = $.Deferred();
var defaults = {
type: "alert", //alert, prompt,confirm
modalSize: 'modal-sm', //modal-sm, modal-lg
okButtonText: 'Ok',
cancelButtonText: 'Cancel',
yesButtonText: 'Yes',
noButtonText: 'No',
headerText: 'Attention',
messageText: 'Message',
alertType: 'default', //default, primary, success, info, warning, danger
inputFieldType: 'text', //could ask for number,email,etc
inputSelectValues: {}, //could ask for number,email,etc
defaultValue:'',
extraNote:false,
modalokbtn:'',
extraClass:''
}
$.extend(defaults, options);
   
var _show = function(){
var headClass = "navbar-default";
switch (defaults.alertType) {
case "primary":
headClass = "alert-primary";
break;
case "success":
headClass = "alert-success";
break;
case "info":
headClass = "alert-info";
break;
case "warning":
headClass = "alert-warning";
break;
case "danger":
headClass = "alert-danger";
break;
        }
$('BODY').append(
'<div id="ezAlerts" class="modal fade">' +
'<div class="modal-dialog" class="' + defaults.modalSize + '">' +
'<div class="modal-content">' +
'<div id="ezAlerts-header" class="modal-header ' + headClass + '">' +
'<h4 id="ezAlerts-title" class="modal-title">Modal title</h4>' +
'<button id="close-button" type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>' +
'</div>' +
'<div id="ezAlerts-body" class="modal-body">' +
'<div id="ezAlerts-message" ></div>' +
'<div id="ezAlerts-extraNote" ></div>' +
'</div>' +
'<div id="ezAlerts-footer" class="modal-footer">' +
'</div>' +
'</div>' +
'</div>' +
'</div>'
);

$('.modal-header').css({
'padding': '15px 15px',
'-webkit-border-top-left-radius': '5px',
'-webkit-border-top-right-radius': '5px',
'-moz-border-radius-topleft': '5px',
'-moz-border-radius-topright': '5px',
'border-top-left-radius': '5px',
'border-top-right-radius': '5px'
});
   
$('#ezAlerts-title').text(defaults.headerText);
$('#ezAlerts-message').html(defaults.messageText);
$('#ezAlerts-extraNote').html(defaults.extraNote)
var keyb = false, backd = "static";
var calbackParam = "";

switch (defaults.type) {
case 'alert':
keyb = true;
backd = "true";
$('#ezAlerts-footer').html('<button class="btn btn-' + defaults.alertType + '">' + defaults.okButtonText + '</button>').on('click', ".btn", function () {
calbackParam = true;
$('#ezAlerts').modal('hide');
});
break;
case 'confirm':
var btnhtml = '<button id="ezok-btn" class="btn btn-primary">' + defaults.yesButtonText + '</button>';
if (defaults.noButtonText && defaults.noButtonText.length > 0) {
btnhtml += '<button id="ezclose-btn" class="btn btn-default">' + defaults.noButtonText + '</button>';
}
$('#ezAlerts-footer').html(btnhtml).on('click', 'button', function (e) {
if (e.target.id === 'ezok-btn') {
calbackParam = true;
$('#ezAlerts').modal('hide');
} else if (e.target.id === 'ezclose-btn') {
calbackParam = false;
$('#ezAlerts').modal('hide');
}
});
break;
case 'prompt':
switch(defaults.inputFieldType){
case "textarea":
input = '<textarea class="form-control" id="prompt"></textarea>'
break;
case "select":
var options = ""
$.each(defaults.inputSelectValues,function(i,v){
options += `<option value=${i}>${v}</option>`
})
input = `<select class="form-control ${defaults.extraClass}" id="prompt">${options}</select>`
break;
default:
input = '<input type="' + defaults.inputFieldType + '" class="form-control" id="prompt" value="'+defaults.defaultValue+'"/>'
break;

}
$('#ezAlerts-message').html(defaults.messageText + '<br /><br /><div class="form-group">'+input+'</div>');
$('#ezAlerts-footer').html('<button class="btn btn-primary successBtn">' + defaults.okButtonText + '</button><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>').on('click', ".successBtn", function () {
calbackParam = $('#prompt').val();
$('#ezAlerts').modal('hide');
});
break;
}
if(defaults.modalokbtn == "hideclass"){    
    $(".successBtn").css("display","none");
   }else{
    $(".successBtn").css("display","block")
   }
$('#ezAlerts').modal({
          show: false,
          backdrop: backd,
          keyboard: keyb
        }).on('hidden.bs.modal', function (e) {
$('#ezAlerts').remove();
if ($('.modal:visible').length) {
       $('body').addClass('modal-open');
   }
if (calbackParam) {
deferredObject.resolve(calbackParam);
}
else{
deferredObject.reject()
}
}).on('shown.bs.modal', function (e) {
if ($('#prompt').length > 0) {
$('#prompt').focus();
}
}).modal('show');
}
   
  _show();  
  return deferredObject.promise();    
}