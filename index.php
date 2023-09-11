<?php

// Trait untuk alamat
trait Alamat {
    private $alamat;

    public function setAlamat($alamat) {
        $this->alamat = $alamat;
    }

    public function getAlamat() {
        return $this->alamat;
    }
}

// Kelas dasar yang merepresentasikan seorang manusia
class Manusia {
    private $nama;
    protected $umur;

    use Alamat; // Menggunakan trait Alamat

    public function __construct($nama, $umur) {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getUmur() {
        return $this->umur;
    }
}

// Kelas turunan yang merepresentasikan seorang siswa
class Siswa extends Manusia {
    public $kelas;

    public function __construct($nama, $umur, $kelas) {
        parent::__construct($nama, $umur);
        $this->kelas = $kelas;
    }

    public function getInfoSiswa() {
        echo "Nama: " . $this->getNama() . "<br>";
        echo "Umur: " . $this->getUmur() . " tahun<br>";
        echo "Kelas: " . $this->kelas . "<br>";
        echo "Alamat: " . $this->getAlamat() . "<br>";
    }
}

// Kelas turunan lain yang merepresentasikan seorang guru
class Guru extends Manusia {
    private $mataPelajaran;

    public function __construct($nama, $umur, $mataPelajaran) {
        parent::__construct($nama, $umur);
        $this->mataPelajaran = $mataPelajaran;
    }

    public function getInfoGuru() {
        echo "Nama: " . $this->getNama() . "<br>";
        echo "Umur: " . $this->getUmur() . " tahun<br>";
        echo "Mata Pelajaran: " . $this->mataPelajaran . "<br>";
        echo "Alamat: " . $this->getAlamat() . "<br>";
    }
}

// Membuat objek siswa
$siswa = new Siswa("Arisu", 16, "XII-A");
$siswa->setAlamat("Jl. ABC No. 123");
echo "<b>Info Siswa:</b><br>";
$siswa->getInfoSiswa();
echo "<br>";

// Membuat objek guru
$guru = new Guru("Kazuto", 35, "Matematika");
$guru->setAlamat("Jl. XYZ No. 456");
echo "<b>Info Guru:</b><br>";
$guru->getInfoGuru();
?>
