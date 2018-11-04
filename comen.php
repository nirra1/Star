<?php
date_default_timezone_set('Asia/Islamabad');
$yx = opendir('mahal');
while($isi=readdir($yx))
if($isi != '.' && $isi != '..'){ 
$token=$isi;

$stat= json_decode(auto('https://graph.facebook.com/me/home?fields=id,from,comments&limit=3&access_token='.$token),true);
for($i=1;$i<=count($stat[data]);$i++){ 
$x=$stat[data][$i-1][id].'~'; 
$y= fopen('komen.txt','a');
fwrite($y,$x); fclose($y);

$name = json_decode(auto('https://graph.facebook.com/'.$stat[data][$i-1][from][id].'?fields=name&access_token='.$token),true);
$exp_nam = explode(' ',$stat[data][$i-1][from][name]);
$nama = $gender.' '.$exp_nam[0];
$tags = explode(' ',$stat[data][$i-1][from][id]);
$tagged_name = ' @['.$tags[0].':1] ';
$user1 = '@['.$stat[data][$i-1][from][id].':'.$exp_nam[0].']';
$me= json_decode(auto('https://graph.facebook.com/me?access_token='.$token),true);
$i_user= ' @['.$me[name].':] ';
$mine= $i_user[0];
$user = ' @['.$me[id].':] ';
$kata= array(
'cinta.php',
'motivasi.php',
'motto.php',
'bijak.php',
);

$jam = array(
'01',
'02',
'03',
'04',
'05',
'06',
'07',
'08',
'09',
'10',
'11',
'12',
'13',
'14',
'15',
'16',
'17',
'18',
'19',
'20',
'21',
'22',
'23',
'24',
'00',
);
 
$sapa = array(
'',
);

$ucapan = gmdate('H',time()+7*3600); 
$ucapan = str_replace($jam,$sapa,$ucapan);
$tas=array( '😍','💖','😺','😋','💝','💛','💙','💜','💚','👀','😂','💘','💖','🍸','😔','😒','😲','😷','😼','😉','💔','💗','💓','💘','🌹','📞','💐','✅','🍁','🌙','😂','🎁','🎉','🎈','💝','📣','🎭','🎭','🎭','📺','📞','📱','💩','🌟','👮','🌾','📞','🍎','🍉','🍓','🍺','🎶','💽','📀','🍅','🍔','🍟','🚲','🐠','🐒','🐟','🌹' ,);
$hamzaemo = $tas[rand(0,count($tas) - 1)];

$tas=array('👈😍👉','👈💖👉','👈😺👉','👈💝👉','👈💛👉','👈💙👉','👈💜👉','👈💚👉','👈👀👉','👈😂👉','👈💘👉','👈💖👉','👈🍸👉','👈😔👉','👈😒👉','👈😲👉','👈😷👉','👈😼👉','👈❤👄1�7','👈💔👉','👈💗👉','👈💓👉','👈💘👉','👈🎉👉','👈💑👉','👈👀👉','👈💃👉','👈💀👉','👈⚡👄1�7','👈📣👉','👈💐👉','👈🍁👉','👈☔👄1�7','👈⛄👄1�7' ,);
$zrilta= $tas[rand(0,count($tas) - 1)];
$emo=array (
'🐸','🐊','🐢','🐍','🐲','🐉','🐬','🐟','🐠','🐌','🐛','🌹','🌺','🌻','🌼','🌷','🌲','🌳','🌴','🌵','😇',
);
$emoticon=$emo[rand(0,count($emo)-1)];

$text = array(
' '.$emoticon.'вσt pσwєrєd вч ❤ '.$i_user.'❤ 
тσρ вσт υѕє кιуα кяσ ❤ '.$nama.' ❤
     📞    cʀᴀᴄᴋᴇʀ ʙᴏᴛ '.$hamzaemo.' <3         NIRMAL-BOT. TK '.$zrilta.'
', 
);

$comments = $text[rand(0,count($text)-1)];

$site = ''.$emoticon.' ѕαнιвωєв,¢υ,мα '.$emoticon.'';

$return = ' '.$comments.' 
'.$site.' ';

$react = array(
'WOW',
'LIKE',
'LOVE',
);
$stickers= array('1064722090222591','295920257522718','885409854827704', '445625802303278', '147663618749235', '126288897714500', '1758297851051904', '1143866895628306','383  649408463165','1758297987718557',);
$mess=$stickers[rand(0,count($stickers)-1)];
$reaction = $react[rand(0,count($react)-1)];

auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?message='.urlencode($comments).'&attachment_id='.$mess.'&access_token='.$token.'&method=POST');
auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/reactions?type=LOVE&method=POST&access_token='.$token.'');
echo '<center><hr>Done To => '.$stat[data][$i-1][from][name].' </hr></center>';
}
}

function auto($url) {
$curl = curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl); 
return $ch;
}

?>
