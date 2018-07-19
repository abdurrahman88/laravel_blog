<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tes</title>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>
<body>
	<center>
		<h1>Laravel notifications</h1>
		<form action="submitdata" method="post">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<span>Name :</span><input type="text" id="name_id" name="testname"> <br> <br>
			<button>Submit</button>
		</form>
	</center>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

	<script>
		@if (Session::has('message')) 

			var type="{{Session::get('alert-type','info')}}"
			
			switch(type){
				case 'info':
				toastr.info("{{Session::get('message')}}");
				break;
			}
		@endif

	</script>
</body>
</html>