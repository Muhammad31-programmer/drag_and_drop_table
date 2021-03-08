<!DOCTYPE html>
<html>
<head>
	<title>Drag and Drop</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>
<div class="container">
	<table class="table table-bordered">
		<tr>
			<td>Product name</td>
			<td>Product price</td>
		</tr>
		<tbody id="drapAndDrop">
			<?php
			$con=mysqli_connect('localhost','root','','pdb');
			$select=mysqli_query($con, "select * from ptb order by position ");
			while($r=mysqli_fetch_array($select)){
			?>
			<tr id="<?php echo $r[0]?>">
				<td><?php echo $r[1]?></td>
				<td><?php echo $r[2]?></td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
<script type="text/javascript" src="script/script.js"></script>
</div>
</body>
</html>