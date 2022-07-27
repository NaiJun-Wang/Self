<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>點餐系統</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row p-3 fixed-top" style="background: #003300;">
			<div class="col-3  d-flex justify-content-center">
				<a class="text-warning fw-bold" href="index.php" title="" style="text-decoration: none">首頁</a>
			</div>
			<div class="col-3 text-warning fw-bold d-flex justify-content-center">最新消息</div>
			<div class="col-3  d-flex justify-content-center">
				<?php
					if(isset($_SESSION['signin']))
						echo '<a class="text-warning fw-bold" href="back.php" title="" style="text-decoration: none">留言板</a>';
					else 
						echo '<a class="text-warning fw-bold" href="" title="" style="text-decoration: none">留言板</a>';
				?>
			</div>
			<div class="col-3  d-flex justify-content-center">
				<form action="" method="POST">
					<?php
						if(isset($_SESSION['signin']))
							echo '<a class="text-warning fw-bold" href="signout.php" style="text-decoration: none">登出</a>';
						else
							echo '<a class="text-warning fw-bold" href="signin.php" style="text-decoration: none">登入</a>';
					?>
				</form>
				
			</div>
		</div>
		<div class="row" style="height: 100px;">	
		</div>
		<form action="index.php" method="get">
			<div class="container " style="">
				<div class="row">
					<div class="col-4">
						<img src="img/food8.jpg" class="w-100" alt="">
						<label class="fw-bold fs-5">NT</label>
						<label class="fw-bold fs-5" value="60" id="foodpay1">60</label>
						<select class="form-select" id="food1">
							<option>1</option>
							<option>2</option>
							<option>3</option>
						</select>
					</div>
					<div class="col-4">
						<img src="img/food8.jpg" class="w-100" alt="">
						<label class="fw-bold fs-5">NT</label>
						<label class="fw-bold fs-5" value="80" id="foodpay2">80</label>
						<select class="form-select" id="food2">
							<option>1</option>
							<option>2</option>
							<option>3</option>
						</select>
					</div>
					<div class="col-4">
						<img src="img/food8.jpg" class="w-100" alt="">
						<label class="fw-bold fs-5">NT</label>
						<label class="fw-bold fs-5" value="230" id="foodpay3">230</label>
						<select class="form-select" id="food3">
							<option>1</option>
							<option>2</option>
							<option>3</option>
						</select>
					</div>
				</div>
				<div class="row pt-3">
					<div class="col-4">
						<img src="img/food8.jpg" class="w-100" alt="">
						<label class="fw-bold fs-5">NT</label>
						<label class="fw-bold fs-5" value="70" id="foodpay4">70</label>
						<select class="form-select" id="food4">
							<option>1</option>
							<option>2</option>
							<option>3</option>
						</select>
					</div>
					<div class="col-4">
						<img src="img/food8.jpg" class="w-100" alt="">
						<label class="fw-bold fs-5">NT</label>
						<label class="fw-bold fs-5" value="120" id="foodpay5">120</label>
						<select class="form-select" id="food5">
							<option>1</option>
							<option>2</option>
							<option>3</option>
						</select>
					</div>
					<div class="col-4">
						<img src="img/food8.jpg" class="w-100" alt="">
						<label class="fw-bold fs-5">NT</label>
						<label class="fw-bold fs-5" value="210" id="foodpay6">210</label>
						<select class="form-select" id="food6">
							<option>1</option>
							<option>2</option>
							<option>3</option>
						</select>
					</div>
				</div>
				<div class="row d-flex justify-content-center p-5">
					<div class="col-5"></div>
					<div class="col-6">
						<input class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" value="確認點餐" name="">
					</div>
				</div>
			</div>
		</form>
		<div class="row d-flex justify-content-center p-3" style="background: #003300;">
			<div class="col-6">
				<div class="row">
					<div class="col-5"></div>
					<div class="col-6 text-white">&copy2022 股份有限公司</div>
				</div>
				<div class="row">
					<div class="col-4"></div>
					<div class="col-1"><img src="img/location.png" class="w-50" alt=""></div>
					<div class="col-6 fw-bold text-warning">台中市北區三民路三段129號</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  	<div class="modal-dialog">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<h5 class="modal-title" id="exampleModalLabel">確認餐點</h5>
	        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      	</div>
	      		<div class="modal-body">
		      		<div class="row" id="refood1"></div>
		      		<div class="row" id="refood2"></div>
		      		<div class="row" id="refood3"></div>
		      		<div class="row" id="refood4"></div>
		      		<div class="row" id="refood5"></div>
		      		<div class="row" id="refood6"></div>
		      		<div class="row" id="total"></div>
		      		<script type="text/javascript">
		      			function getid(a){
		      				return document.getElementById(a);
		      			}
		      			setInterval(function() {
		      				getid('refood1').innerHTML="餐點一:"+getid('food1').value+"份";
							getid('refood2').innerHTML="餐點二:"+getid('food2').value+"份";
							getid('refood3').innerHTML="餐點三:"+getid('food3').value+"份";
							getid('refood4').innerHTML="餐點四:"+getid('food4').value+"份";
							getid('refood5').innerHTML="餐點五:"+getid('food5').value+"份";
							getid('refood6').innerHTML="餐點六:"+getid('food6').value+"份";
							getid('total').innerHTML= "總共"
							+
							(getid('foodpay1').textContent*getid('food1').value
							+getid('foodpay2').textContent*getid('food2').value
							+getid('foodpay3').textContent*getid('food3').value
							+getid('foodpay4').textContent*getid('food4').value
							+getid('foodpay5').textContent*getid('food5').value
							+getid('foodpay6').textContent*getid('food6').value)
							+"元";
		      			}, 500);
		      		</script>
	      		</div>
		      	<div class="modal-footer">
		       		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
		        	<button type="button" class="btn btn-primary" data-bs-dismiss="modal">確認</button>
		      	</div>
	    	</div>
	  	</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>	
</body>
</html>


