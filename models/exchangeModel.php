<?php
	function getAll($conn) {
		// echo "getAll"; die();
		$sql = 'SELECT * FROM `exchanges`';

		$query_all = $conn->query($sql);

		if($query_all == true) {
			$data = $query_all->fetch_assoc();
			return $data;
		}
		return null;

	}
?>