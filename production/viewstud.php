
<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

<!-- Latest compiled JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 --><link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
<?php 
    include "config.php";
    session_start();

		
    $Sql = "SELECT * FROM studentdata";
    $result = mysqli_query($conn, $Sql);  
    $i = 1;
     
	 ?>

	 <div class="col-md-12">
	 	<table class="table table-striped display nowrap" id="example">
	 		<thead>
	 			<tr>
	 			<th> S.no</th>
	 			<th> RollNo</th>
	 			<th> Phone</th>
	 			<th> Email</th>
	 			</tr>
	 			
	 		</thead>
	 		<tbody>
	 			<?php while($row = mysqli_fetch_assoc($result)) {
	 			 ?>
	 			<tr>
	 				<td><?php echo $i; ?></td>
	 				<td><?php echo $row['rollno']; ?></td>
	 				<td><?php echo $row['phoneno']; ?></td>
	 				<td><?php echo $row['email']; ?></td>
	 			</tr>
	 			 <?php 
			 	$i++;
					}
			  ?>
	 		</tbody>
	 	</table>
	 </div>

	 <script type="text/javascript">
			$(document).ready(function() {
		    $('#example').DataTable( {
		        dom: 'Bfrtip',
		        buttons:[
		            'copy', 'csv', 'excel', 'pdf', 'print'
		        ]
		    } );
		} );
	 </script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>


	
	 
    

 
 
