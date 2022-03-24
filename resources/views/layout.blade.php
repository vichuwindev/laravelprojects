<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce Site</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/common.css') }}" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>	
 	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/plugins/dateTimepicker.css') }}" rel="stylesheet">
    <script src="{{ asset('js/plugins/dateTimepicker.js') }}" defer></script>
	<script src="{{ asset('js/app.js') }}"defer></script>
</head>
<body>
	<ul>
		<li><a href="{{route('productList')}}">product</a></li>
		<li><a href="{{route('bankTxnList')}}" target="blank">Transaction</a></li>
	</ul>
	<script type="text/javascript">
		$.ajaxSetup({
		  headers: {
		    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});
	</script>
</body>
</html>