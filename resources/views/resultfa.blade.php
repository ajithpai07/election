<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
	<link rel="stylesheet" type="text/css" href="{{ asset('frontside/css/bootstrap.css')}}">
</head>
<body>
<form method="post"  style="width: 45%">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<table class="table table-bordered">
		<tr>
			<th>S.No</th>
			<th>Name</th>
			<th>Regno</th>
			<th>votes</th>
		</tr>
		@foreach($fnl as $items)
		
		<tr>

			<td>{{ $no++ }}</td>
			<td>{{ $items->name }}</td>
			<td>{{ $items->Regno }}</td>
			<td>{{ $items->votes }}</td>
		</tr>
	
		@endforeach
	</table>
		<!-- <input type="submit" name="add" class="btn btn-info" value="Back to Main Menu"> -->
		<a href="http://localhost:8000/home">Back to Main Menu</a>
	</form>
</body>
</html>