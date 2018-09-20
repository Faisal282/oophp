<?php  

class Produk {
	public  $merk = "merk",
			$penemu = "penemu",
			$perusahaan = "perusahaan",
			$harga;

	public function ubahMerk($merk) {
		$this->merk = $merk;
	}
	public function ubahPenemu($penemu) {
		$this->penemu = $penemu;
	}
	public function ubahPerusahaan($perusahaan) {
		$this->perusahaan = $perusahaan;
	}
	public function ubahHarga($harga) {
		$this->harga = $harga;
	}
} 
$apple = new Produk();
$apple -> ubahMerk("Apple");
$apple -> ubahPenemu("Steve Jobs");
$apple -> ubahPerusahaan("Apple inc");
$apple -> ubahHarga(3000000000);


$Microsoft = new Produk();
$Microsoft -> ubahMerk("Microsoft");
$Microsoft -> ubahPenemu("Bill Gates");
$Microsoft -> ubahPerusahaan("Microsoft inc");
$Microsoft -> ubahHarga(5000000000);

var_dump($apple);	