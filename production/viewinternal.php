
<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

<!-- Latest compiled JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
<?php 
    include "config.php";
    session_start();

		
    $Sql = "SELECT * FROM internals";
    $result = mysqli_query($conn, $Sql);  
    $i = 1;
     
	 ?>

	 <div class="col-md-12 table-responsive" >
	 	<table class="table table-striped display nowrap" id="example">
	 		<thead>
	 			<tr>
	 			<th>S.No</th>
	 			<th>rollno</th>
	 			<th>sem</th>
	 			<th>studentname</th>
	 			<th>desc1</th>
	 			<th>obj1</th>
	 			<th>assg1</th>
	 			<th>desc2</th>
	 			<th>obj2</th>
	 			<th>assg2</th>
	 			<th>desc3</th>
	 			<th>obj3</th>
	 			<th>assg3</th>
	 			<th>desc4</th>
	 			<th>obj4</th>
	 			<th>assg4</th>
	 			<th>desc5</th>
	 			<th>obj5</th>
	 			<th>assg5</th>
	 			<th>desc6</th>
	 			<th>obj6</th>
	 			<th>assg6</th>
	 			<th>desc7</th>
	 			<th>obj7</th>
	 			<th>assg7</th>
	 			<th>gr_total</th>
	 			<th>status</th>
	 			</tr>
	 			
	 		</thead>
	 		<tbody>
	 			<?php while($row = mysqli_fetch_assoc($result)) {
	 			 ?>
	 			<tr>
	 				<td><?php echo $i; ?></td>
	 				<td><?php echo $row['rollno']; ?></td>
	 				<td><?php echo $row['sem']; ?></td>
	 				<td><?php echo $row['studentname']; ?></td>
	 				<td><?php echo $row['desc1']; ?></td>
	 				<td><?php echo $row['obj1']; ?></td>
	 				<td><?php echo $row['assg1']; ?></td>
	 				<td><?php echo $row['desc2']; ?></td>
	 				<td><?php echo $row['obj2']; ?></td>
	 				<td><?php echo $row['assg2']; ?></td>
	 				<td><?php echo $row['desc3']; ?></td>
	 				<td><?php echo $row['obj3']; ?></td>
	 				<td><?php echo $row['assg3']; ?></td>
	 				<td><?php echo $row['desc4']; ?></td>
	 				<td><?php echo $row['obj4']; ?></td>
	 				<td><?php echo $row['assg4']; ?></td>
	 				<td><?php echo $row['desc5']; ?></td>
	 				<td><?php echo $row['obj5']; ?></td>
	 				<td><?php echo $row['assg5']; ?></td>
	 				<td><?php echo $row['desc6']; ?></td>
	 				<td><?php echo $row['obj6']; ?></td>
	 				<td><?php echo $row['assg6']; ?></td>
	 				<td><?php echo $row['desc7']; ?></td>
	 				<td><?php echo $row['obj7']; ?></td>
	 				<td><?php echo $row['assg7']; ?></td>			
	 				<td><?php echo $row['gr_total']; ?></td>
	 				<td><?php echo $row['status']; ?></td>
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
<!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>


	
	 
    

 
 
