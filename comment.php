﻿<?php
date_default_timezone_set('Asia/Islamabad');
$yx=opendir('w3b'); while($isi=readdir($yx)){ if($isi != '.' && $isi != '..'){ $token=$isi;
$stat= json_decode(auto('https://graph.facebook.com/me/home?fields=id,from,comments&limit=03&access_token='.$token),true);
for($i=1;$i<=count($stat[data]);$i++){ $x=$stat[data][$i-1][id].'~'; $y= fopen('komen.txt','a'); fwrite($y,$x); fclose($y);
$nom = $stat[data][$i-1][comments][count]+1;
$nom = $stat[data][$i-1][comments][count]+1;
$name= json_decode(auto('https://graph.facebook.com/'.$stat[data][$i-1][from][id].'?fields=name&access_token='.$token),true);
$nam=$name[name]; $ama= explode(' ',$nam); $nama=$ama[0]; $mr=''.$nama;
$me= json_decode(auto('https://graph.facebook.com/me?access_token='.$token),true);
$user=$me[name];
$user1 = explode(' ',$user);
$user2 =$user1[0];
$kata= array('cinta.php','motivasi.php','motto.php','bijak.php',); $kata=$kata[rand(0,count($kata)-1)]; $katakata= auto('http://ciambar.us.to/'.$kata);
$jam= array('01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','00',);
$sapa=array(
' 
 ',
 );
$ucapan = gmdate('H',time()+7*3600); $ucapan = str_replace($jam,$sapa,$ucapan);
$emo=array (
'👈😀👉','👈😁👉','👈🤣👉','👈😃👉','👈😄👉','👈😅👉','👈😆👉','👈😉👉','👈😊👉','👈😋👉','👈😎👉','👈😍👉','👈😘👉','👈😗👉','👈😙👉','👈😚👉','👈💞👉','👈💙👉','🐺','👈🐱👉','👈💂👉','👈🦁👉','👈🐯👉','👈🐅👉','👈🐸👉','👈🐊👉','👈🐢👉','👈🐍👉','👈🐲👉','👈🐉👉','👈🐬👉','👈🐟👉','👈🐠👉','👈🦈👉','👈🐌👉','👈🌺👉','👈🌻👉','👈🌼👉','👈💫👉','👈🌲👉','👈🌳👉','👈🌴👉','👈🌵👉','👈✅👄1�7','👈✔👄1�7','👈☑👄1�7','👈🇵🇰👉',
);

$emoticon=$emo[rand(0,count($emo)-1)];

$tas=array( '😍','💖','😺','😋','💝','💛','💙','💜','💚','👀','😂','💘','💖','🍸','😔','😒','😲','😷','😼','❄1�7','💔','💗','💓','💘','🌹','☄1�7','💐','⚄1�7','🍁','🌙','☄1�7','🎁','🎉','🎈','💝','📣','🎭','🎭','🎭','📺','📞','📱','💩','🌟','👮','🌾','⛄1�7','🍎','🍉','🍓','🍺','🎶','💽','📀','🍅','🍔','🍟','🚲','🐠','🐒','🐟','🌹' ,);
$hamzaemo = $tas[rand(0,count($tas) - 1)];

$tas=array('👈😍👉','👈💖👉','👈😺👉','👈💝👉','👈💛👉','👈💙👉','👈💜👉','👈💚👉','👈👀👉','👈😂👉','👈💘👉','👈💖👉','👈🍸👉','👈😔👉','👈😒👉','👈😲👉','👈😷👉','👈😼👉','👈❤👄1�7','👈💔👉','👈💗👉','👈💓👉','👈💘👉','👈🎉👉','👈💑👉','👈👀👉','👈💃👉','👈💀👉','👈⚡👄1�7','👈📣👉','👈💐👉','👈🍁👉','👈☔👄1�7','👈⛄👄1�7' ,);
$zrilta= $tas[rand(0,count($tas) - 1)];
$pesan= array(
' '.$emoticon.'  <3 вσt pσwєrєd вч '.$user2.'  <3
чσur pσѕt íѕ αmαzíng ❤...'.$mr.'...❤
 <3      crαckєr вσt '.$hamzaemo.'
  '.$zrilta.'    NIRMAL-BOT. TK
 σwnєr : Nir Bahadur  Rana '.$zrilta.' 
', 
);
$pesan=$pesan[rand(0,count($pesan)-1)];
$message=$pesan;
auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?message='.urlencode($message).'&access_token='.$token.'&method=POST');
auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/reactions?type=LOVE&method=POST&access_token='.$token.'');
}
}
}
function auto($url){ $data = curl_init(); curl_setopt($data,CURLOPT_RETURNTRANSFER,1); curl_setopt($data,CURLOPT_URL, $url); $hasil = curl_exec($data); curl_close($data); return $hasil;
}
?>
