<?php
   include "dao/pdo.php";
   include "dao/sanpham.php";
   $ds=get_top5tour();

   // echo var_dump($ds);

   $dstourhon5ngay="";
   $i=1;
   foreach ($ds as $item) {
      extract($item);
      $dstourhon5ngay.='<h1>'.$i.'. '.$name.'</h1>';
      $dstourhon5ngay.='<img src="img/'.$img.'" width="200">';
      if($khoihanh!=""){
         $dstourhon5ngay.='Ngày khởi hành: '.$khoihanh;
      }
      
      $i++;
   }

   echo $dstourhon5ngay;


?>