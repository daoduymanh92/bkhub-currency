<?php
	/**
	 * 
	 */
	class HistoryModel
	{	
		//table: history
		public $conn;
		function __construct($conn)
		{
			$this->conn = $conn;
		}

		public function getAll() {
			$sql = "SELECT * FROM `history`";
			$result = mysqli_query($this->conn, $sql);
			$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $data;
		}

	}
?>