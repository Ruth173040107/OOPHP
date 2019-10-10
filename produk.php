<?php 

// jualan produk

class Produk {
	public $judul = 'judul',
		   $penulis = 'penulis',
		   $penerbit = 'penerbit',
		   $harga = 0; 

	public function getLabel()
	{
		return "$this->penulis, $this->penerbit ";
	}

}

// $produk1 = new produk();
// $produk1->judul ="naruto";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul ="uncarted";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "naruto";
$produk3->penulis = "massashi kisihimoto";
$produk3->penerbit = "shonen jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "uncarted";
$produk4->penulis = "neil Druckmann";
$produk4->penerbit = " Sony Computer";
$produk4->harga = 250000;

echo "komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();