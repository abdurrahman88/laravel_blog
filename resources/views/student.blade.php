
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link href="https://datatables.yajrabox.com/css/datatables.bootstrap.css" rel="stylesheet">


<table id="users-table" class="table">
	<thead>
		<tr>
			<td>Student ID</td>
			<td>Name</td>
			<td>Adrees</td>
		</tr>
	</thead>
</table>

<script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
<script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
<script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
<script src="https://datatables.yajrabox.com/js/handlebars.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.0.0/jquery.mark.min.js"></script>

<script type="text/javascript">
	$(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'http://127.0.0.1:8000/student/get_datatable', 
            columns: [
	            {data: 'student_id'},
	            {data: 'name'},
	            {data: 'adrees'},
        	]
        });
    });
</script>