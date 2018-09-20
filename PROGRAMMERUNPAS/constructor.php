<?php 

class Produk{
	public  $judul,
			$penulis,
			$penerbit,
			$harga = 0;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
}

// $Produk1 = new Produk();
// $Produk1->judul = "Naruto";
// var_dump($Produk1);

// $Produk2 = new Produk();
// $Produk2->judul = "Uncharted";
// var_dump($Produk2->judul);

$Produk1 = new Produk("Naruto", "Masashi kishimoto", "Shonen jump", 3000);
$Produk2 = new Produk("Uncharted", "Neil druckman", "Sony computer", 250000);

echo "Komik : {$Produk1->getLabel()}";
echo "<br>";
echo "Game : {$Produk2->getLabel()}";