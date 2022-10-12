<?php
class Person{
    public $nama;
    public $alamat;
    public $jurusan;

    // Membuat function setNama
    public function setNama($data){
        $this->nama=$data;
    }
    // Membuat function getNama
    public function getNama(){
        return $this->nama;
    }
    public function setAlamat($data){
        $this->alamat=$data;
    }
    public function getAlamat(){
        return $this->alamat;
    }
}
// Eksekusi new person dengan menambahkan data baru pada beberapa function diatas
    $jundi = new Person();
    $jundi->setNama("Jundi");
    $jundi->setAlamat("Bogor");
    // bisa juga seperti ini $jundi->nama="Jundi";  
    echo $jundi->nama;
    echo "<br>";
    echo "<h2>$jundi->alamat</h2>";
    echo "<br>";

    $bagus = new Person();
    $bagus->setNama("Bagus");
    // bisa juga seperti ini $bagus->nama="Bagus"; 
    $bagus->setAlamat("Bengkulu"); 
    echo $bagus->nama;
    echo "<br>";
    echo $bagus->alamat;

echo "<hr>";
// Eksekusi new person dengan cara array push
$mahasiswa = [
        [
        'nama' => 'Edo Riansyah',
        'alamat' => 'Depok',
        ],
        [
        'nama' => 'Ismail Marzuki',
        'alamat' => 'Jakarta',
        ],
    ];
// Mencetak new person dari array diatas
foreach ($mahasiswa as $mhs) {
    $maha = new Person();
    $maha->setNama($mhs['nama']);
    $maha->setAlamat($mhs['alamat']);
    echo $maha->getNama();
    echo "<br>";
    echo $maha->getAlamat();
    echo "<br>";
}
?>