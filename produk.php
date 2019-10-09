<?php 

// jualan produk
// komik 
// game
class Produk{//sebuah class
	public $judul = "judul",
			$penulis ="penulis",
			$penerbit ="penerbit",
			$harga = 0;

	public function getLabel(){
		return "$this->penulis,$this->penerbit";
	}

		// public function sayHello(){
		// 	return "hello World";
		// }
}

	// $produk1 = new Produk();
	// $produk1->judul = "Naruto";
	// var_dump($produk1);

	// $produk2 = new Produk();
	// $produk2-> judul="uncharted";
	// $produk2->tambahProperty = "hahhah";
	// var_dump($produk2);


	$produk3 = new Produk();
	$produk3->judul = "Naruto";
	$produk3->penulis="Masashi Kishimoto";
	$produk3->penerbit="Shonen Jump";
	$produk3->harga=30000;
	

	// echo "Komik : $produk3->penulis,$produk3->penerbit";
	// echo "<br>";
	// echo $produk3->getLabel();

	// echo "<hr>";

	$produk4 = new Produk();
	$produk4->judul = "Unceharted";
	$produk4->penulis="Neil Druckmann";
	$produk4->penerbit="Sony Computer";
	$produk4->harga=250000;

	echo "komik : " . $produk3->getLabel();
	echo "<br>";
	echo "Game : " . $produk4->getLabel();
?>