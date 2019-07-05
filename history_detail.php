<?php 
//http://localhost/bkhub-currency/history_detail.php?id=1
	require 'connection.php';
	require 'models/HistoryModel.php';

	$history = new HistoryModel($conn);

	$id = $_GET['id'];

	$historyRecord = $history->getRecordByID($id);

	// var_dump($historyRecord); die();
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Money Exchange ABC
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
		<div class="row">
			<div class="col-12">
				<p><b>ID</b></p>
				<p><b>Số tiền cần chuyển</b><?php echo $historyRecord['']?> </p>
				<p><b>Số tiền sau chuyển</b> </p>
				<p><b>Created_at</b> </p>	
				<p><b>Updated_at</b> </p>	
			</div>

		</div>
	</div>
	<?php include('layouts/footer.php') ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>