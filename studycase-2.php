<?php
class Nilai {
    public $mapel;
    public $nilai;

    public function __construct($mapel, $nilai) {
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }
}

class Siswa {
    public $nrp;
    public $nama;
    public $daftarNilai = [];

    public function __construct($nrp, $nama, $daftarNilai) {
        $this->nrp = $nrp;
        $this->nama = $nama;
        $this->daftarNilai = $daftarNilai;
    }
}

function generateRandomString($length = 10) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}

$mapelList = ["Inggris", "Indonesia", "Jepang"];

$siswaList = [];
for ($i = 1; $i <= 10; $i++) {
    $nrp = str_pad($i, 3, '0', STR_PAD_LEFT);
    $nama = generateRandomString(10);
    $daftarNilai = [];
    for ($j = 0; $j < 3; $j++) {
        $mapel = $mapelList[array_rand($mapelList)];
        $nilai = rand(0, 100);
        $daftarNilai[] = new Nilai($mapel, $nilai);
    }
    $siswaList[] = new Siswa($nrp, $nama, $daftarNilai);
}

foreach ($siswaList as $siswa) {
    echo "NRP: {$siswa->nrp}, Nama: {$siswa->nama}" . PHP_EOL;
    foreach ($siswa->daftarNilai as $nilai) {
        echo "- Mapel: {$nilai->mapel}, Nilai: {$nilai->nilai}" . PHP_EOL;
    }
    echo PHP_EOL;
}
?>