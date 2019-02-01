<?php 


class produk {
			public $judul = "judul",
				$penulis = "penulis",
				$harga = 0;


public function getLabel() {
			return "$this->penulis, $this->penerbit";


   	  }
}	


$produk3 = new produk();
$produk3->judul = "Sheiland";
$produk3->penulis = "Satriani";
$produk3->penerbit = "Media Kita";
$produk3->harga = "55000";

$produk4 = new produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = "350000";

echo "Komik :". $produk3->getLabel();
echo "<br>";
echo "Game:". $produk4->getLabel();