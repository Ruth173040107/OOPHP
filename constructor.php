<?php 

// jualan produk

class Produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;


	public function __construct($judul = 'judul', $penulis  = 'penulis', $penerbit = 'penerbit' , $harga = 0)
	 {
	 	$this->judul = $judul;
	 	$this->penulis = $penulis;
	 	$this->penerbit = $penerbit;
	 	$this->harga = $harga;
	 } 

	public function getLabel()
	{
		return "$this->penulis, $this->penerbit ";
	}

}

$produk1 = new Produk("naruto", "massashi kisihimoto","shonen jump", 30000);
$produk2 = new Produk("uncarted", "neil Druckmann", " Sony Computer", 250000);

echo "komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();