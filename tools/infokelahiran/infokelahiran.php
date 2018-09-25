<?php
echo "\n*Info";
echo "\nInput : Hari-Tanggal-Tahun ";
echo "\n\nMasukkan TTL    : ";
$ttl = trim(fgets(STDIN));

function curl($url, $var = null) {
      $curl = curl_init($url);
      curl_setopt($curl, CURLOPT_TIMEOUT, 25);
      if ($var != null) {
          curl_setopt($curl, CURLOPT_POST, true);
          curl_setopt($curl, CURLOPT_POSTFIELDS, $var);
      }
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
      curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($curl);
      curl_close($curl);
      return $result;
  }
$curl = curl("https://idsystem404.000webhostapp.com/api/api-cekinfokelahiran.php?ttl=".$ttl);
$cek = json_decode($curl, TRUE);
$hasil = json_decode($curl);
if ($cek['status'] == "success") {   
echo "\nLAHIR : ".$hasil->data->lahir;
echo "\nUSIA : ".$hasil->data->usia;
echo "\nULANG TAHUN : ".$hasil->data->ultah;
echo "\nZODIAK : ".$hasil->data->zodiak."\n\n";
        }
        else {
            echo "\nData yang anda masukkan salah!\n";
        }

?>