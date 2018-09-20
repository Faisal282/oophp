<?php  
class Produk{
	public 	$barang,
			$harga, 
			$pabrik,
			$tipe, 
			$jmlStik,
			$jmlRam;

	public function __construct ($barang = "Barang belum diisi", $harga = "Harga belum diisi", $pabrik = "Pabrik belum diisi", $tipe = "Tipe belum diisi", $stik = "Stik Belum diisi", $ram = "Ram Belum diisi") {
		$this->barang = $barang;
		$this->harga = $harga;
		$this->pabrik= $pabrik;
		$this->tipe = $tipe;
		$this->jmlStik = $stik;
		$this->jmlRam = $ram;
	}

	public function getBarang(){
		return $this->barang;
	}
	public function getHarga(){
		return $this->harga;
	}
	public function getPabrik(){
		return $this->pabrik;
	}
	public function getTipe(){
		return $this->tipe;
	}
	public function getJmlStik(){
		return $this->jmlStik;
	}
	public function getJmlRam(){
		return $this->jmlRam;
	}

	public function getInfoProduk(){
		$str = "{$this->getBarang()}";
		return $str;
	}

}

class Laptop extends Produk {
	public function __construct($barang = "Barang belum diisi", $harga = "Harga belum diisi", $pabrik = "Pabrik belum diisi", $tipe = "Tipe belum diisi", $jmlRam = "Ram Belum diisi"){
		parent::__construct($barang, $harga, $pabrik, $tipe);
		$this->jmlRam = $jmlRam;
	}

	public function getInfoProduk(){
		$str = "Anda membeli Laptop ". parent::getInfoProduk() ." {$this->getTipe()} dengan harga {$this->getHarga()} Merk {$this->getPabrik()} Dengan ram {$this->getJmlRam()}"; 
		return $str;
	}
}

class Console extends Produk {
	public function __construct($barang = "Barang belum diisi", $harga = "Harga belum diisi", $pabrik = "Pabrik belum diisi", $tipe = "Tipe belum diisi", $jmlStik = "Stik Belum diisi"){
		parent::__construct($barang, $harga, $pabrik, $tipe);
		$this->jmlStik = $jmlStik;
	}

	public function getInfoProduk()	{
		$str = "Anda membeli Console ". parent::getInfoProduk() ." {$this->getTipe()} dengan harga {$this->getHarga()} Merk {$this->getPabrik()} Dengan Stik {$this->getJmlStik()}";
		return $str;
	}
}
$LaptopGaming = new Laptop("Gaming", "22 Juta", "Asus", "GL702ZC", "32 GB");
var_dump($LaptopGaming->getInfoProduk());
$PS4 = new Console("PS4", "7 Juta", "Sony", "PRO", "2");
var_dump($PS4->getInfoProduk());
?>