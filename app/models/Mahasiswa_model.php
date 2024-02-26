<?php 

class Mahasiswa_model {
    private $dbh; //database handler
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    // private $mhs = [
    //     [
    //         "nama" => "Sandhika Galih",
    //         "nrp" => "937363738",
    //         "email" => "sandhikagalih@unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Doddy Ferdiansyah",
    //         "nrp" => "529292729",
    //         "email" => "doddy@gmail.com",
    //         "jurusan" => "Teknik Mesin"
    //     ],
    //     [
    //         "nama" => "Erik Doank",
    //         "nrp" => "137363738",
    //         "email" => "erik@yahoo.com",
    //         "jurusan" => "Teknik Industri"
    //     ]

    // ];


    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}