<?php  

class Produk {
	public  $merk,
			$penemu,
			$perusahaan,
			$harga;

	// CONSTRUCTOR		
	public function __construct($merk, $penemu, $perusahaan, $harga){
		$this->merk = $merk;
		$this->penemu = $penemu;
		$this->perusahaan = $perusahaan;
		$this->harga = $harga;
	}		

	// SETTER
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

	// GETTER
	public function getMerk() {
		return $this->merk;
	}
	public function getPenemu(){
		return $this->penemu;
	}
	public function getPerusahaan(){
		return $this->perusahaan;
	}
	public function getHarga(){
		return $this->harga;
	}
} 
$apple = new Produk("OS X", "Steve Jobs", "Apple inc", 3000000000);
$microsoft = new Produk("Windows", "Bill Gates", "Microsoft Inc.", 12000000000);
var_dump($apple);