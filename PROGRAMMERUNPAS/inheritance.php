<?php 

class Produk{
	public  $judul,
			$penulis,
			$penerbit,
			$harga = 0,
			$jmlHalaman,
			$waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk(){
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

class Komik extends Produk{
	public function getInfoProduk(){
		$str = "Komik : {$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}
class Game extends Produk{
	public function getInfoProduk(){
		$str = "Game : {$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
		return $str;
	}	
}
class cetakInfoProduk{
	public function cetak(Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()}, {$produk->harga}";
		return $str;
	}
}

$Produk1 = new Komik("Naruto", "Masashi kishimoto", "Shonen jump", 3000, 100, 0, "Komik");
$Produk2 = new Game("Uncharted", "Neil druckman", "Sony computer", 250000, 0, 50, "Game");

echo "Komik : {$Produk1->getLabel()}";
echo "<br>";
echo "Game : {$Produk2->getLabel()}";
echo "<br>";


// Komik : Naruto | Masashi Kishimoto, shonen jump (Rp. 30000) - 100 halaman
// Game : Uncharted | Neil druckman, Sony Computer (Rp. 250000) ~ 50 jam
echo "{$Produk1->getInfoProduk()}";
echo "<br>";
echo "{$Produk2->getInfoProduk()}";