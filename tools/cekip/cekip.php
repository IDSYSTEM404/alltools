<?php
error_reporting(0);
echo "\nMasukkan IP      : ";
$ip = trim(fgets(STDIN, 1024));
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
$curl1 = curl("https://api.petaniilmu.com/api/api-cekip1.php?ip=".$ip);  
$curl2 = curl("https://api.petaniilmu.com/api/api-cekip2.php?ip=".$ip);
$json1 = json_decode($curl1);
$json2 = json_decode($curl2);
print "\n\nIP : ".$json1->query;
print "\nHOSTNAME : ".$json1->as;
print "\nCITY : ".$json1->city;
print "\nCOUNTRY : ".$json1->country;
print "\nCOUNTRY CODE : ".$json1->countryCode;
print "\nISP : ".$json1->isp;
print "\nLAT : ".$json1->lat;
print "\nLON : ".$json1->lon;
print "\nORG : ".$json1->org;
print "\nREGION :".$json1->region;
print "\nREGION NAME : ".$json1->regionName;
print "\nPOSTAL : ".$json1->zip;
print "\nTIMEZONE : ".$json1->timezone;
print "\nPHONE : ".$json2->phone;
print "\n\n";
?>