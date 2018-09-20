<?php 

class Produk{
	public  $judul,
			$penulis,
			$penerbit,
			$harga = 0,
			$jmlHalaman,
			$waktuMain,
			$tipe;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = null) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap(){
		// Komik : Naruto | Masashi Kishimoto, shonen jump (Rp. 30000) - 100 halaman
		$str = "{$this->tipe} : {$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";
		if ($this->tipe === "Komik") {
			$str .= " - {$this->jmlHalaman} Halaman.";
		} elseif ($this->tipe === "Game") {
			$str .= " - {$this->waktuMain} Jam.";
		}
		return $str;
	}
}

class cetakInfoProduk{
	public function cetak(Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()}, {$produk->harga}";
		return $str;
	}
}

$Produk1 = new Produk("Naruto", "Masashi kishimoto", "Shonen jump", 3000, 100, 0, "Komik");
$Produk2 = new Produk("Uncharted", "Neil druckman", "Sony computer", 250000, 0, 50, "Game");

echo "Komik : {$Produk1->getLabel()}";
echo "<br>";
echo "Game : {$Produk2->getLabel()}";
echo "<br>";


// Komik : Naruto | Masashi Kishimoto, shonen jump (Rp. 30000) - 100 halaman
// Game : Uncharted | Neil druckman, Sony Computer (Rp. 250000) ~ 50 jam
echo "{$Produk1->getInfoLengkap()}";
echo "<br>";
echo "{$Produk2->getInfoLengkap()}";