
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

		
    $Sql = "SELECT * FROM flash_news";
    $result = mysqli_query($conn, $Sql);  
    $i = 1;
    if($_GET['message']=="recordDeleted"){
    	?>
    	<div class="alert alert-success alert-dismissible fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo "News Deleted Successfully"; ?>
         </div>
          
    	<?php
    }
     
	 ?>
     

	 <div class="col-md-12 table-responsive" >
	 	<table class="table table-striped display nowrap" id="example">
	 		<thead>
	 			<tr>
	 			<th>S.No</th>
	 			<th>category</th>
	 			<th>textarea</th>
	 			<th>text_heading</th>
	 			<th>link</th>
	 			<th>DATE_TIME</th>
	 			<th>STATUS</th>
	 			<th>ACTION</th>
	 	
	 			</tr>
	 			
	 		</thead>
	 		<tbody>
	 			<?php while($row = mysqli_fetch_assoc($result)) {
	 			 ?>
	 			<tr>
	 				<td><?php echo $i; ?></td>
	 				<td><?php echo $row['category']; ?></td>
	 				<td><?php echo $row['textarea']; ?></td>
	 				<td><?php echo $row['text_heading']; ?></td>
	 				<td><?php echo $row['link']; ?></td>
	 				<td><?php echo $row['DATE_TIME']; ?></td>
	 				<td><?php echo $row['STATUS']; ?></td>
	 				
	 				<td><a href="?pages=news_update&id=<?php echo $row['id'];?>" id=update>Update</a></td>
	 				<td><a href="?pages=news_delete&action=delete&id=<?php echo $row['id'];?>" id=delete>Delete</a></td>
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


	
	 
    

 
 
