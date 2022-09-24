<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>OOP PHP 1 || Debi Safa Nurdewanti G.211.21.0078</title>
     <style>
     body {
          background: #cccccc;
          box-sizing: border-box;
          padding: 5px;
          margin: 5px;
     }

     .wrap {
          background: #ffffff;
          width: 650px;
          height: auto;
          border-radius: 5px;
          padding: 5px 10px;
          box-shadow: 5px 5px 5px #fff, -5px -5px 5px #fff;
          position: absolute;
          top: 45%;
          left: 45%;
          transform: translate(-45%, -45%);
     }

     h2 {
          text-align: center;
          font-weight: 700;
     }

     p {
          background: #fff;
          padding: 3px 7px;
          font-weight: 400;
          font-size: 17px;
     }
     </style>
</head>
<body>
<?php
class Product  {   
     protected $name;   
     protected $price;
     protected $discount;        

     public function getPrice()   
     {    
          return $this->price;   
     }   
     public function setPrice($price)   
     {    
          $this->price = $price;   
     }   
     public function getName()   
     {    
          return $this->name;   
     }   
     public function setName($name)   
     {    
          $this->name = $name;   
     }   
     public function getDiscount()   
     {    
          return $this->discount;   
     }   
     public function setDiscount($discount)   
     {    
          $this->discount = $discount;   
     }     
} 

class CDMusic extends Product  
{    
     public $artist;
     public $genre;

     public function __construct($name="nama", $price="harga", $discount="diskon"){
     }
     public function getArtist()   
     {    
          return $this->artist;   
     }  
     public function setArtist($artist)
     {
          $this->artist = $artist;
     }
     public function getGenre()   
     {    
          return $this->genre;   
     }  
     public function setGenre($genre)
     {
          $this->genre = $genre;
     }
     public function setPrice($price){
          $this->price = $price;
     }
     public function getPrice(){
          $harga = $this->price;
          $ppn = ((10/100) * $this->price);
          $discount = ((5/100) * $this->price);
          return ($harga + $ppn) - $discount;
     }
     public function setDiscount($discount){
          $this->discount = $discount;
     }
}   

class CDRack extends Product  
{   
     public $capacity;
     public $model;

     public function getCapacity()   
     {    
          return $this->capacity;   
     }  
     public function setCapacity($capacity)
     {
          $this->capacity = $capacity;
     } 
     public function getModel()   
     {    
          return $this->model;   
     }  
     public function setModel($model)
     {
          $this->model = $model;
     }  
     public function setPrice($price){
          $this->price = $price;
     } 
     public function getPrice(){
          $harga = $this->price;
          $pajak = ((15/100) * $this->price);
          return $harga + $pajak;
     }
} 

?>
    <div class="wrap">
       <h2>Tugas 1 || OOP PHP</h2>
       <p>
          <?php
          $product = new Product();
          $cdmusic = new CDMusic();
          $cdrack = new CDRack();

          $product->setName("CD Lagu");
          $product->setPrice(330000);
          $product->setDiscount("Discount hari ini : <br/> 1. CDMusic = 5% <br/> 2. CDRack = 0 
          (Tidak ada discount)");

          echo "Nama Product : " . $product->getName() . "<br/>";
          echo "Harga : Rp " . $product->getPrice() . ",-<br/>";
          echo $product->getDiscount() . "<br/><hr/>";
     
          $cdmusic->setArtist("Isyana Sarasvati");
          $cdmusic->setGenre("Ballad");
          $cdmusic->setDiscount("5%");
          $cdmusic->setPrice(330000);

          echo "<center><b>Selamat Datang di CDMUSIC </b></center><br/>";
          echo "Nama Product : " . $product->getName() . "<br/>";
          echo "Artis : " . $cdmusic->getArtist() . "<br/>";
          echo "Genre : " . $cdmusic->getGenre() . "<br/>";
          echo "Selamat Anda mendapatkan harga spesial dengan discount sebesar " . $cdmusic->getDiscount() . "<br/><br/>";
          echo "Total harga : Rp " . $cdmusic->getPrice() . ",-<br/>Harga di atas sudah termasuk PPN 10% dan discount sebesar 5%<br/><br/><hr/>";
     
          echo $cdrack->setCapacity("500 MB");
          echo $cdrack->setModel("Album Terbaru");
          echo $cdrack->setPrice(330000); 

          echo "<center><b>Selamat Datang di CDRACK </b></center><br/>"; 
          echo "Kapasitas : " . $cdrack->getCapacity() . "<br/>";
          echo "Model : " . $cdrack->getModel() . "<br/>"; 
          echo "Mohon maaf untuk product ini tidak ada potongan harga <br/></br>";
          echo "Total Harga : Rp " . $cdrack->getPrice() . ",-<br/>Harga di atas sudah termasuk PPN sebesar 15%";
          ?>
       </p>
    </div>
</body>
</html>