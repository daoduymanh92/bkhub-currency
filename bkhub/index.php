<?php 
	if(isset($_POST["input_money"])) {
		echo $_POST["input_money"]; die();
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Money Exchange	
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style type="text/css">
	.footer {
		position: absolute;
		bottom: 0;
		width: 100%;
		background: #D6DBDF;
	}
	.exchange-money {
		margin: 40px auto;
	}
</style>
<body>
	<?php include('layouts/navbar.php') ?>

	<!-- Input exchange money -->
	<div class="container exchange-money">
		<h3>Đổi tiền</h3>
		<form method="POST" action="">
			<div class="form-row">
			    <div class="col-sm-12 col-md-4 mb-3">
			      <input type="number" class="form-control" id="input_money" name="input_money" placeholder="Nhập số tiền" required>
			    </div>
			    <div class="col-sm-12 col-md-3 mb-3">
					<select class="custom-select" id="input_code" name="input_code">
						<option selected>Loại tiền nhập</option>
						<option value="vnd">VND</option>
						<option value="eur">EUR</option>
						<option value="aud">AUD</option>
					</select>
			    </div>
			    <div class="col-sm-12 col-md-3 mb-3">
					<select class="custom-select" id="output_code" name="output_code">
						<option selected>Loại tiền đổi</option>
						<option value="vnd">VND</option>
						<option value="eur">EUR</option>
						<option value="aud">AUD</option>
					</select>
			    </div>
				<div class="col-sm-12 col-md-2 mb-3">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</form>
	</div>
	<!-- History of exchange money -->
	<div class="container">
		<h3>Lịch sử đổi tiền</h3>
		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">First</th>
		      <th scope="col">Last</th>
		      <th scope="col">Handle</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">1</th>
		      <td>Mark</td>
		      <td>Otto</td>
		      <td>@mdo</td>
		    </tr>
		    <tr>
		      <th scope="row">2</th>
		      <td>Jacob</td>
		      <td>Thornton</td>
		      <td>@fat</td>
		    </tr>
		    <tr>
		      <th scope="row">3</th>
		      <td colspan="2">Larry the Bird</td>
		      <td>@twitter</td>
		    </tr>
		  </tbody>
		</table>		
	</div>
	<?php include('layouts/footer.php') ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>