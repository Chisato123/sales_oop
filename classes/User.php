<?php
include 'Connection.php';

class User extends Connection
{
	public function register($request)
	{
		$first_name = $request['first_name'];
		$last_name = $request['last_name'];
		$username = $request['username'];
		$password = password_hash($request['password'], PASSWORD_DEFAULT);

		$sql = "INSERT INTO Users (first_name,last_name,username,password) VALUES('$first_name','$last_name','$username','$password')";

		if ($this->conn->query($sql)) {
			header('location: ../views/login.php');
		} else {
			die("ERROR: " . $this->conn->error);
		}
	}

	public function login($request)
	{
		$username = $request['username'];
		$password = $request['password'];

		$sql =  "SELECT * FROM Users WHERE username = '$username'";

		if ($result = $this->conn->query($sql)) {
			if ($result->num_rows  == 1) {
				$user = $result->fetch_assoc();

				if (password_verify($password, $user['password'])) {

					session_start();

					$_SESSION['username'] = $user['username'];
					$_SESSION['id'] = $user['id'];

					header('location:../views/dashboard.php');
					exit;
				} else {
					die("ERROR: password dont match");
				}
			} else {
				die("ERROR: username dont match");
			}
		}
	}

	public function getAllProducts()
	{

		$sql =  "SELECT id,product_name,price,quantity FROM products";

		if ($result = $this->conn->query($sql)) {
			return $result;
		} else {
			die('error of retrieving all users' . $this->conn->error);
		}
	}

	public function addProducts($request)
	{
		$product_name = $request['product_name'];
		$price = $request['price'];
		$quantity = $request['quantity'];

		$sql = "INSERT INTO products (product_name, price, quantity)
             VALUES ('$product_name', '$price', '$quantity')";

		if ($result = $this->conn->query($sql)) {
			header("location: ../views/dashboard.php");
			exit;
		} else {
			die('Error adding a new product: ' . $this->conn->error);
		}
	}

	public function EditProduct($request)
	{
		$id = $_SESSION['id'];

		$product_name = $request['product_name'];
		$price = $request['price'];
		$quantity = $request['quantity'];

		$sql = "UPDATE products SET product_name = '$product_name', price = '$price',quantity = '$quantity' WHERE id = $id";

		if ($result = $this->conn->query($sql)) {
			header("location: ../views/dashboard.php");
			exit;
		} else {
			die('cancel' . $this->conn->error);
		}
	}

	public function Delete($id)
	{

		$sql = "DELETE FROM products WHERE id = $id";

		if ($this->conn->query($sql)) {
			session_destroy();
			header("location: ../views/dashboard.php");
			exit;
		} else {
			die('cancel' . $this->conn->error);
		}
	}
}
