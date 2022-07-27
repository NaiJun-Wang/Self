<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<title>Document</title>
</head>
<body>
	<div class="modal fade" >	
	  	<div class="modal-dialog">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<h5 class="modal-title" id="exampleModalLabel">確認餐點</h5>
	        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      	</div>
	      		<div class="modal-body">
	      		<?php  
	      			echo $_POST['food1'];
	      		?>
	      		</div>
		      	<div class="modal-footer">
		       		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
		        	<button type="button" class="btn btn-primary" data-bs-dismiss="modal">確認</button>
		      	</div>
	    	</div>
	  	</div>
	</div>
</body>
</html>