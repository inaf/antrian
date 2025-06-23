<?php

  $ip = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
  $tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
  $waktu = time();
  $s = mysql_query("SELECT * FROM statistik WHERE ip='$ip' AND tanggal='$tanggal'"); // Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini

  if(mysql_num_rows($s) == 0){ // Kalau belum ada, simpan data user tersebut ke database

    mysql_query("INSERT INTO statistik(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
  
  }

  else {
  	
    mysql_query("UPDATE statistik SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
  
  }

  $pengunjung = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE tanggal='$tanggal' GROUP BY ip"));
  $totalpengunjung = mysql_result(mysql_query("SELECT COUNT(hits) FROM statistik"), 0);
  $hits = mysql_fetch_assoc(mysql_query("SELECT SUM(hits) as hitstoday FROM statistik WHERE tanggal='$tanggal' GROUP BY tanggal"));
  $totalhits = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0);
  $tothitsgbr = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0);
  $bataswaktu = time() - 300;
  $pengunjungonline = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE online > '$bataswaktu'"));
  //$path = "counter/";
  //$ext = ".png";
  $tothitsgbr = sprintf("%06d", $tothitsgbr);
  
  for ( $i = 0; $i <= 9; $i++ ){

    $tothitsgbr = str_replace($i, "", $tothitsgbr);
    
    }

?>