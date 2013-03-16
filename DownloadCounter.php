<?php
	
	class DownloadCounter{

		private $file = null;


		public function __construct($file) {
			$this->file = $file;
		}
		/**
		*
		* Check if file exists in the database
		*
		**/
		public function exists() {
			$ret = false;
			$count = 0;
			if(isset($this->file)) {
				$mysqli = @new mysqli("localhost","root","root","downloads");
				if(mysqli_connect_errno());
				else {
					$sql = 'SELECT COUNT(*) FROM files WHERE file = ?;';
					$stmt = $mysqli->prepare($sql);
					if($stmt) {
						$stmt->bind_param("s",$this->file);
						$stmt->execute();
						$stmt->store_result();
						$stmt->bind_result($count);
						$stmt->fetch();
						if($count >= 1)
							$ret = true;

					}
						
					$stmt->close();
				}
				$mysqli->close();
			}
			return $ret;
		}

		public function increment() {
			$ret = 0;
			if(isset($this->file)){
				$mysqli = @new mysqli("localhost","root","root","downloads");
				if(mysqli_connect_errno());
				else {
					$sql = "UPDATE files SET downloads = downloads + 1 WHERE file = ?;";
					$stmt = $mysqli->prepare($sql);
					if($stmt) {
						$stmt->bind_param('s',$this->file);
						$stmt->execute();
						$ret = $mysqli->affected_rows;
					}
					$stmt->close();
				}
				$mysqli->close();
			}
			return $ret;
		}

		public function add() {
			$ret = 0;
			if(isset($this->file)) {
				$mysqli = @new mysqli("localhost","root","root","downloads");
				if(mysqli_connect_errno());
				else {
					$sql = "INSERT INTO files(file) VALUES(?)";
					$stmt = $mysqli->prepare($sql);
					if($stmt) {
						$stmt->bind_param("s",$this->file);
						$stmt->execute();
						$ret = $mysqli->affected_rows;
					}
					$stmt->close();
				}
				$mysqli->close();
			}
			return $ret;
		}

		public function getCount() {
			$ret = 0;
			if(isset($this->file)) {
				$mysqli = @new mysqli("localhost","root","root","downloads");
				if(mysqli_connect_errno());
				else {
					$sql = 'SELECT downloads FROM files WHERE file = ?;';
					$stmt = $mysqli->prepare($sql);
					if($stmt) {
						$stmt->bind_param("s",$this->file);
						$stmt->execute();
						$stmt->store_result();
						$stmt->bind_result($ret);
						$stmt->fetch();
					}
					$stmt->close();
				}
				$mysqli->close();
			}
			return $ret;
		}

		public function getFileName() {
			return $this->file;
		}
	}

?>