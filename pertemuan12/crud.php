<?php
// memanggil class database.php
require_once 'Database.php';
// class crud
class Crud
{
    // deklarasi variabel
    private $db;
    // pembuatan fungsi constructor
    public function __construct()
    {
        $this->db = new Database();
    }
    // fungsi create
    public function create($jabatan, $keterangan)
    {
        // menambahkan query untuk menambahkan data ke jabatan
        $query = "INSERT INTO jabatan(jabatan, keterangan) VALUES('$jabatan', '$keterangan')";
        $result = $this->db->conn->query($query);
        return $result;
    }
    // fungsi read
    public function read()
    {
        // query untuk mengambil dari tabel jabatan
        $query = "SELECT * FROM jabatan ";
        $result = $this->db->conn->query($query);
        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    // fungsi readById
    public function readById($id)
    {
        // fungsi untuk mengambil data tabel jabatan berdasarkan id
        $query = "SELECT * FROM jabatan WHERE id = $id";
        $result = $this->db->conn->query($query);
        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
    // fungsi update
    public function update($id, $jabatan, $keterangan)
    {
        // query untuk update data tabel jabatan
        $query = "UPDATE jabatan SET jabatan ='$jabatan', keterangan='$keterangan' WHERE id =$id";
        $result = $this->db->conn->query($query);
        return $result;
    }
    // fungsi delete
    public function delete($id)
    {
        // query untuk menghapus data tabel jabatan berdasarkan id
        $query = "DELETE FROM jabatan WHERE id =$id";
        $result = $this->db->conn->query($query);
        return $result;
    }
}