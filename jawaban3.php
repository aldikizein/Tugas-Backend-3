<?php

$nilai = array(75, 65, 54, 32, 0, 90, 100, 32, 43, 37, 0, 0, 87, 58, 78,);
foreach ($nilai as $nil){
  if ($nil >= 80){
    echo "Nilai : ".$nil."<br> Predikat : (A) <br> Keterangan : Lulus <br><br>";
  }elseif ($nil >= 70){
    echo "Nilai : ".$nil."<br>Predikat : (B) <br> Keterangan : Lulus <br><br>";
  }elseif ($nil >= 60){
    echo "Nilai : ".$nil."<br>Predikat : (C) <br> Keterangan :  Lulus <br><br>";
  }elseif ($nil >= 50){
    echo "Nilai : ".$nil."<br> Predikat : (D) <br> Keterangan : Tidak Lulus <br><br>";
  }else {
    echo "Nilai : ".$nil."<br> Predikat : (E) <br> Keterangan : Tidak Lulus <br><br>";
  }
}

$total = array_sum($nilai);
$total = $total/count($nilai);
echo "Nilai Akhir : ".round($total,2)."<br>";

$ip = $total/25;
echo "Indeks Prestasi : ".round($ip,2)."<br>";

if ($total >= 80){
  echo "Predikat A, Pinter banget dah";
}elseif ($total >= 70){
  echo "Predikat B, Udah baguss";
}elseif ($total >= 60){
  echo "Predikat C, Selamat kamu ga ngulang";
}elseif ($total >= 50){
  echo "Predikat D, HP TROSSSS, Belajar sana";
}else {
  echo "Predikat E, Selamatkan Kartu Keluarga segera";
}