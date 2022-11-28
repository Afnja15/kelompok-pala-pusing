<?php
class database
{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "db_palapusing";
	var $koneksi;

	function __construct()
	{
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
	}


	function register($name, $email, $username, $password)
	{
		$insert = mysqli_query($this->koneksi, "insert into users values ('$name','$email','$username','$password')");
		return $insert;
	}

	function login($email, $password, $remember)
	{
		$query = mysqli_query($this->koneksi, "select * from users where email='$email'");
		$data_user = $query->fetch_array();
		if (password_verify($password, $data_user['password'])) {

			if ($remember) {
				setcookie('email', $email, time() + (60 * 60 * 24 * 5), '/');
				setcookie('name', $data_user['name'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['email'] = $email;
			$_SESSION['name'] = $data_user['name'];
			$_SESSION['username'] = $data_user['username'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}

	function relogin($email)
	{
		$query = mysqli_query($this->koneksi, "select * from users where email='$email'");
		$data_user = $query->fetch_array();
		$_SESSION['email'] = $email;
		$_SESSION['name'] = $data_user['name'];
		$_SESSION['is_login'] = TRUE;
	}
}
