<?php session_start();	 
	if(!isset($_SESSION['signin'])) {
    	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>登入</title>
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
		<?php
			$host = 'localhost';
			$dbuser ='root';
			$dbpassword = '';
			$dbname = 'database';
			$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname); 
		 ?>
		<div class="container" style="height: 800px;">
			<div class="row">
				<div class="col d-flex justify-content-center">
					<table class="table table-striped" border="4" width="200">
						<tr>
							<th>帳號</th>
							<th>評分</th>
							<th>留言資訊</th>
							<th>日期</th>
						</tr>
						<?php
						$sql="SELECT * FROM `blog`"; 
						$result = mysqli_query($link, $sql);
						while($row=mysqli_fetch_assoc($result))
						{
							echo '<tr>';
							echo '<td>'.$row['acc'].'</td>';
							echo '<td>'.$row['num'].'</td>';
							echo '<td>'.$row['content'].'</td>';
							echo '<td>'.$row['time'].'</td>';
							echo '</tr>';
						}
						?>
					</table>
				</div>
			</div>
		</div>
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
</body>
</html>