<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
		<div class="row">
		<table class="table" id="products-table">
		<thead>
			<tr>
			<th scope="col">#</th>
			<th scope="col">Product Name</th>
			<th scope="col">Description</th>
			<th scope="col">Price</th>
            <th scope="col">Actions</th>
			</tr>
		</thead>
		</table>
		</div>
	</div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#products-table').DataTable({
            searching: true,
			      type:'GET',
            ajax: '{{ route("getProducts") }}',
            columns: [
                { data: 'id', name: 'id'},
                { data: 'name', name: 'name'},
                { data: 'description', name: 'description'},
                { data: 'price', name: 'price', orderable: false, seachable: false},
                { data: 'action', name: 'action', orderable: false, seachable: false },
            ],
        });
    });
    </script>
  </body>
</html>