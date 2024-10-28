<?php 

class db {
	
	private $db_host = "localhost";
	private $db_user = "root";
	private $db_pass = "";
	private $db_name = "db_sekolah";

	private $conn;

	public function GetConnection() {
		$connection = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
		$this->conn = $connection;

		if ($connection)
			return "Koneksi Berhasil";
		else 
			return "Koneksi Gagal : ". mysqli_connect_error();
	}

	public function GetAll()
	{
		return mysqli_query($this->conn,"SELECT * FROM tbl_siswa");
	}

	public function Get($id)
	{
		return mysqli_query($this->conn,"SELECT * FROM tbl_siswa WHERE id_siswa = $id LIMIT 1");
	}

	public function Add($nisn, $nama_lengkap, $alamat)
	{
		$query = "INSERT INTO tbl_siswa (nisn, nama_lengkap, alamat) VALUES ('$nisn', '$nama_lengkap', '$alamat')";
		$this->conn->query($query);
	}

	public function Update($nisn, $nama_lengkap, $alamat, $id_siswa)
	{
		$query = "UPDATE tbl_siswa SET nisn = '$nisn', nama_lengkap = '$nama_lengkap', alamat = '$alamat' WHERE id_siswa = '$id_siswa'";
		$this->conn->query($query);
	}

	public function Delete($id)
	{
		$query = "DELETE FROM tbl_siswa WHERE id_siswa = '$id'";
		$this->conn->query($query);
	}
}

$database = new db();
$database->GetConnection();

?>

