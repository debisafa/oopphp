<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tugas 2 || OOP PHP</title>
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

   h3 {
      text-align: center;
      font-weight: 700;
   }

   p {
      background: #fff;
      padding: 3px 7px;
      font-weight: 400;
      font-size: 18px;
      text-align: justify;
   }
   </style>
</head>

<body>
   <?php

   interface Bintang
   {
      public function Makan();
      public function Berjalan();
      public function Bersuara();
      public function Sepeda();
   }
   class Monyet implements Bintang
   {
      public function Makan()
      {
          return "Monyet dapat berjalan<br/>";
       }
 
       public function Berjalan()
       {
          return "Monyet memakan pisang<br/>";
       }
 
       public function Bersuara()
       {
          return "Monyet dapat bersuara<br/>";
       }
       public function Sepeda()
       {
          return "Monyet juga dapat menaiki sebuah sepeda<br/>";
       }
    }
 
    class Lainnya implements Bintang
    {
       public function Makan()
       {
          return "";
       }
       public function Berjalan()
       {
          return "";
       }
 
       public function Bersuara()
       {
          return "";
       }
       public function Sepeda()
       {
          return "Monyet juga dapat menaiki sebuah sepeda<br/>";
       }
    }

    ?>
    <div class="wrap">
       <h3>Tugas 2 || OOP PHP</h3>
       <p>
          <?php
          $Monyet = new Monyet;
          $Lainnya = new Lainnya;
          echo "<b>Kemampuan Monyet : </b><br/>";
          echo $Monyet->Makan();
          echo $Monyet->Berjalan();
          echo $Monyet->Bersuara();
 
          echo "<br/><b>Kemampuan Lainnya dari Monyet Apabila Dilatih : </b><br/>";
          echo $Monyet->Sepeda();
          ?>
       </p>
    </div>
 </body>
 
 </html>

