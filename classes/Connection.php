<?php
class Connection
{
	private $servername = 'localhost';
	private $username = 'root';
	private $password = 'root';
	private $db_name = 'sales_oop';
	public $conn;


	public function __construct()
	{
		$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db_name);

		//validate
		if ($this->conn->connect_error) {
			die("ERROR: " . $this->conn->connect_error);
		}
	}
}
