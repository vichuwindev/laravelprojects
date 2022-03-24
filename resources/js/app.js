$(function () {
    $('.datepics').datetimepicker({
        format: 'Y-m-d H:i:s'
    });
    var date = new Date();
    var month_first_dates = new Date(date.getFullYear(), date.getMonth(), 1);
    month_first_dates = formatDate(month_first_dates)
    var local = date.toLocaleString('en-GB')
    var this_time = local.split(',')[1];
    var todays = formatDate(date)
    $(document).find(".fromDate").datetimepicker({format:'Y-m-d', value:month_first_dates, timepicker:false})
    $(document).find(".toDate").datetimepicker({format:'Y-m-d', value:todays, timepicker:false})
    $(document).find(".fromTime").datetimepicker({format: 'H:i:00',formatTime:'H:i:00', value:"00:00:00", datepicker:false})
    $(document).find(".toTime").datetimepicker({format: 'H:i:59',formatTime:'H:i:59', value:"23:23:59", datepicker:false})
});