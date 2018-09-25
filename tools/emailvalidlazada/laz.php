<?php
echo "\n\e[1;35m============================[ EMAIL VALID LAZADA ]==========================\e[0m\r\n";
echo "\n\e[1;35m*INFO\e[0m\r";
echo "\n\e[1;35mUSER : MEMBER LAZADA\e[0m\r";
echo "\n\e[1;35mNONE : BUKAN MEMBER LAZADA\e[0m\r\n";
echo "\nEmail : ";
$email = trim(fgets(STDIN));
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
$curl = file_get_contents("https://idsystem404.000webhostapp.com/api/api-cekemaillazada.php?email=".$email);
$data = json_decode($curl);
echo "\nHASILNYA ADALAH : ";
echo $data->module->result;
echo "\n\n";
?>