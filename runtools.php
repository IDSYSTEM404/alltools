<?php

echo "\e[1;35m=====================================================================\e[0m\r\n";
echo "\e[1;32mALL TOOLS\e[0m\r\n";
echo "\e[1;34m(c)\e[0m \e[1;33m2018 IDSYSTEM404\e[0m\r\n";
echo "\r\n";
echo "\e[1;32mFacebook\e[0m : \e[1;34mhttps://www.facebook.com/warifp\e[0m\r\n";
echo "\e[1;32mFanspage\e[0m : \e[1;34mhttps://www.facebook.com/idsystem404\e[0m\r\n";
echo "\e[1;32mGithub\e[0m   : \e[1;34mhttps://github.com/idsystem404\e[0m\r\n";
echo "\e[1;35m=====================================================================\r\n";
$banner     = "   
\e[1;35m=====================================================================
UPDATE : \e[1;32m5 NOVEMBER 2018\e[0m
\e[1;35m=====================================================================\e[0m\n";

print $banner;
echo "Masukkan password untuk melanjutkan  : ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
if(trim($line) != 'wahyuap'){
    echo "\e[1;31mMAAF! PASSWORD SALAH!\e[0m\n";
    exit;
}
echo "\e[1;92mPassword benar!\e[0m\n";
sleep(1);

$authorceo = 'IDSYSTEM404 | ALL TOOLS';
echo "
List Tools :\n
[1]  [\e[1;32mLIVE\e[0m] \e[0;36mAUTO VISITOR BLOG\e[0m\n
[2]  [\e[1;31mDEAD\e[0m] \e[0;36mBOM SMS HOOQ\e[0m\n
[3]  [\e[1;32mLIVE\e[0m] \e[0;36mBOM SMS THREE\e[0m\n
[4]  [\e[1;32mLIVE\e[0m] \e[0;36mBOM SMS TIKET.COM\e[0m\n
[5]  [\e[1;32mLIVE\e[0m] \e[0;36mBOM SMS JD.ID\e[0m\n
[6]  [\e[1;32mLIVE\e[0m] \e[0;36mBOM SMS PHD\e[0m\n
[7]  [\e[1;32mLIVE\e[0m] \e[0;36mBOM TELP TOKOPEDIA\e[0m\n
[8]  [\e[1;32mLIVE\e[0m] \e[0;36mEMAIL VALID SPOTIFY\e[0m\n
[9]  [\e[1;32mLIVE\e[0m] \e[0;36mEMAIL VALID LAZADA\e[0m\n
[10]  [\e[1;32mLIVE\e[0m] \e[0;36mCEK INFO AKUN INSTAGRAM\e[0m\n
[11] [\e[1;31mDEAD\e[0m] \e[0;36mCEK ALEXA INFO\e[0m\n
[12] [\e[1;32mLIVE\e[0m] \e[0;36mCEK INFO KELAHIRAN\e[0m\n
[13] [\e[1;32mLIVE\e[0m] \e[0;36mCEK INFO IP\e[0m\n
[14] [\e[1;32mLIVE\e[0m] \e[0;36mCEK INFO BIN\e[0m\n
[15] [\e[1;32mLIVE\e[0m] \e[0;36mCEK INFO HLR\e[0m\n
[16] [\e[1;32mLIVE\e[0m] \e[0;36mBOM WA BUKALAPAK\e[0m\n

=> Masukan Pilihanmu (1-16) : ";
$pilih = trim(fgets(STDIN));
if($pilih>16 OR $pilih<1){
    echo "Pilihan Tidak ada, silahkan pilih yang ada!\nMasukan Pilihanmu : ";
    $pilih = trim(fgets(STDIN));
    if($pilih>16 OR $pilih<1) $type = "idsystem404";
}
if($pilih==1){
    $type = "tools/autovisitor/autovisitor";
    $namatools = "\e[1;32mAUTO VISITOR BLOG\e[0m";
}elseif($pilih==2){
    $type = "tools/bomsmshooq/hooq";
    $namatools = "\e[1;32mBOM SMS HOOQ\e[0m";
}elseif($pilih==3){
    $type = "tools/bomsmsthree/three";
    $namatools = "\e[1;32mBOM SMS THREE\e[0m";
}elseif($pilih==4){
    $type = "tools/bomsmstiketdotcom/tiket";
    $namatools = "\e[1;32mBOM SMS TIKET.COM\e[0m";
}elseif($pilih==5){
    $type = "tools/bomsmsjdid/jdid";
    $namatools = "\e[1;32mBOM SMS JD.ID\e[0m";
}elseif($pilih==6){
    $type = "tools/bomsmsphd/bomsmsphd";
    $namatools = "\e[1;32mBOM SMS PHD\e[0m";
}elseif($pilih==7){
    $type = "tools/bomtelptokopedia/tokopedia";
    $namatools = "\e[1;32mBOM TELP TOKOPEDIA\e[0m";
}elseif($pilih==8){
    $type = "tools/emailvalidspotify/EVspotify";
    $namatools = "\e[1;32mEMAIL VALID SPOTIFY\e[0m";
}elseif($pilih==9){
    $type = "tools/emailvalidlazada/laz";
    $namatools = "\e[1;32mEMAIL VALID LAZADA\e[0m";
}elseif($pilih==10){
    $type = "tools/instagramchecker/ig";
    $namatools = "\e[1;32mCEK INFO DETAIL INSTAGRAM\e[0m";
}elseif($pilih==11){
    $type = "tools/alexainfo/alexainfo";
    $namatools = "\e[1;32mCEK INFO ALEXA\e[0m";
}elseif($pilih==12){
    $type = "tools/infokelahiran/infokelahiran";
    $namatools = "\e[1;32mCEK INFO KELAHIRAN\e[0m";
}elseif($pilih==13){
    $type = "tools/cekip/cekip";
    $namatools = "\e[1;32mCEK INFO IP\e[0m";
}elseif($pilih==14){
    $type = "tools/cekbin/cekbin";
    $namatools = "\e[1;32mCEK INFO BIN\e[0m";
}elseif($pilih==15){
    $type = "tools/cekhlr/cekhlr";
    $namatools = "\e[1;32mCEK INFO HLR\e[0m";
}elseif($pilih==16){
    $type = "tools/bomwabukalapak/bomwabl";
    $namatools = "\e[1;32mBOM WA BUKALAPAK\e[0m";
}
if($type=="idsystem404"){
    echo "\e[0;31mKamu Tidak Memilih Tools Manapun.\e[0m\n";
}else{
    echo "Kamu Telah Memilih Tools $namatools , Silahkan Tekan Enter untuk Melanjutkan..";
    $lanjut = trim(fgets(STDIN));
    require_once($type.".php");
}
?>