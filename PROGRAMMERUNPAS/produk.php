<?php 

class Produk{
	public  $judul = "judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0;

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

$Produk3 = new Produk();
$Produk3->judul = "Naruto";
$Produk3->penulis = "Masashi kishimoto";
$Produk3->penerbit = "Shonen jump";
$Produk3->harga = 3000;

$Produk4 = new Produk();
$Produk4->judul = "Uncharted";
$Produk4->penulis = "Neil druckman";
$Produk4->penerbit = "Sony computer";
$Produk4->harga = 250000;

echo "Komik : {$Produk3->getLabel()}";
echo "<hr>";
echo "Game : {$Produk4->getLabel()}";