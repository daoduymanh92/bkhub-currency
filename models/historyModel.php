<?php

	function getAllHistory($conn) {
		$sql = 'SELECT * FROM `history`';

		$query_all = $conn->query($sql);

		if($query_all == true) {
			$data = mysqli_query($conn, $sql);
			return $data;
		}
		return null;		
	}
?>