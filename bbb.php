<?php
ob_start();
//token ro inja vared konid
define('API_KEY','490872521:AAGrQyYG02cMPUHvkmr94rV8n99_ZtneEkg');
//User Chanel Inja Vared Konid
$chanel="@ervix";
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
function send($chat, $text,$key){
	if($key==null){
bot('sendmessage',[
'chat_id'=>$chat,
'text'=>$text,
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat,
'text'=>$text,
'reply_markup'=>$key
]);
}
}


function sendphoto($chat, $photo, $caption){
	if($caption==null){
		bot('sendphoto',[
'chat_id'=>$chat,
'photo'=>new CURLFile($photo),
]);
		}else{
bot('sendphoto',[
'chat_id'=>$chat,
'photo'=>new CURLFile($photo),
'caption'=>$caption
]);
}
}
function get($chat){
$count=file_get_contents($chat);
return $count;
}
function put($chat,$ch){
$count=file_put_contents($chat,$ch);

}
function write($chat,$ch,$a){
$fopen=fopen($chat,$a);
fwrite($fopen,$ch);
fclose($fopen);
	}


$admin = "337087936";
$bot="anti_spam_forbot";
$idbot="428186139";

$update = json_decode(file_get_contents('php://input'));
var_dump($update);
$message = $update->message;
$editm = $update->edited_message;
$message_id = $message->message_id;
$chat_id = $message->chat->id;
$fname = $message->chat->first_name;
$uname = $message->chat->username;
$title=$message->chat->title;
$unamemember = $message->new_chat_member->user->username;
$text1 = $message->text;
$fadmin = $message->from->id;
mkdir("data/$chat_id");
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$reply = $update->message->reply_to_message;
$reply_id = $update->message->reply_to_message->from->id;
$forward = $update->message->forward_from;
$forward_id = $update->message->reply_to_message->forward_from->id;
$forward_f = $update->message->reply_to_message->forward_from->first_name;
$query=$update->callback_query;
$qid=$update->callback_query->id;
$inline=$update->inline_query;
$channel_forward = $update->channel_post->forward_from;
$channel_text = $update->channel_post->text;
$messageid = $update->callback_query->message->message_id;
$file_id=$message->photo[2]->file_id;

$keyhome=json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"??˜ÜÜÿ ÜÜÑæİÜÜÇíáã Ñæ ÜÜ? ?ÑÏå¿"]],
[['text'=>"ÊÚÏÇÏ ããÈÑ åÇí ÇİÒæÏå ÔÏå"],['text'=>"áíä˜ ÏÚæÊ ãä"]]
]
]);


		##ÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜ##
	$js="https://api.telegram.org/bot".API_KEY. "/getchatmember?chat_id=$chanel&user_id=$fadmin";
	$json=json_decode(file_get_contents($js),true);
	$ok=$json['result']['status'];
	if($ok=="kick" or $ok=="left"){
		if(strpos($text1=="/start ") !== false  && $text1 !="/start"){
					$id=str_replace("/start ","",$text1);
					$amar=get("data/$id/amar.txt");
					$exp=explode("\n",$amar);
					if(!in_array($fadmin,$exp) && $fadmin !=$id){
					write("data/$id/amar.txt","$id\n","a+");
					$textid="í˜ ÒíÑ ãÌãæÚå Èå ÒíÑ ãÌãæÚå åÇí ÔãÇ ÇÖÇİå ÔÏ?";
					send($id,$textid);
					}
					}
		$text="?? ÈÑÇí İÚÇá ˜ÑÏä ÑÈÇÊ ÏÑ ˜ÇäÇá ãÍÈæÈ ÇÓÇäÓÑ ÑÈÇÊ ÚÖæ ÔæíÏ 

ÓÓ ÏæÈÇÑå /start ÑÇ áãÓ ˜äíÏ??
????
https://t.me/joinchat/AAAAAEFZH7s6IPwnaOg3zw
ÏÑÕæÑÊ ÚÖæ äÔÏä ÑÈÇÊ İÚÇá äãíÔæÏ ??";
	$key=json_encode([
	'inline_keyboard'=>[
	[['text'=>"?æÑæÏ Èå äá?",'url'=>"https://telegram.me/joinchat/AAAAAEN0siufmyI1ePwJXQ"]]
	]
	]);
			send($fadmin,$text,$key);
			
			return false;
			}
		
if($text1=="/start")	{
	
	$ex=explode("\n",$amar);
	$c=count($ex)-1;
	$text= "ÓáÇã $fname ÚÒíÒ

ÇÒ ØÑíŞ Çíä ÑæÈÇÊ ãíÊæäí ÈÇ ÇÓÊİÇÏå ÇÒ Api Èİåãí ˜íÇ ÑæİÇíáÊæ ˜ ãí˜ää æ ˜íÇ ÍæÇÓÔæä ÈåÊ åÓÊ !

ÇãÇ Èå Ïáíá åÒíäå åÇí Óäíä ØÑÇÍí Api ÈÑäÇãå ¡ ÊÇ ÒãÇäí ˜å 9 äİÑ ÑÇ Èå ÑÈÇÊ ÏÚæÊ ä˜äí ÑÈÇÊ ÈÑÇÊæä İÚÇá äãíÔå !

ÈÑÇí ÏÚæÊ ÇÒ ÏæÓÊÇÊ ˜Çİíå Ñæí /eshterak ˜áí˜ ˜äí æ ÈÚÏ íÇãí Ñæ ˜å ÏÑíÇİÊ ãí˜äí ÈÑÇí 9 äİÑ ÇÑÓÇá ˜äí ÊÇ ãÇ ÈÑäÇãå Ñæ ÇÑÓÇá ˜äíã ÈÑÇÊ

ÔãÇ ÊÇ˜äæä $c äİÑ Ñæ Èå ÑÈÇÊ ÏÚæÊ ˜ÑÏíÏ";
	send($fadmin,$text,$keyhome);
	}elseif($text1=="áíä˜ ÏÚæÊ ãä" or $text1=="/eshterak"){
		$url="http://up2www.com/uploads/720fPicsArt-05-18-06-02-03.jpg";
		$link="telegram.me/profile20robot?start=$fadmin";
		$text="ØæÑí ÈÇ ÇÓÊİÇÏå ÇÒ ÑÈÇÊ ¡ Èİåãíã ˜íÇ Ú˜Ó ÑæİÇíáãæä Ñæ ˜ íÇ ĞÎíÑå ˜ÑÏä ¿ ??

?? åÑ˜Ó Ú˜Ó ÑæİÇíáÊæ ˜ ˜ÑÏ ¡ Çíä ÑÈÇÊ ÏÑÌÇ ÎÈÑÏÇÑÊ ãí˜äå æ ãíå ˜í ÈæÏå !??
$link";
bot('sendphoto',[
'chat_id'=>$fadmin,
'photo'=>$url,
'caption'=>$text,
]);
$text2="ÈÇ ÇÑÓÇá ÈäÑ ÈÇáÇ ÈÑÇí ÏæÓÊÇä ÎæÏ ÒíÑ ãÌãæÚå ÌãÚ ˜äíÏ ÊÇ ÈÊæÇäíÏ ÇÒ ÑÈÇÊ ÇÓÊİÇÏå äãÇííÏ";
send($fadmin,$text2);
		}elseif($text1=="/amarkol"){
			$get=get("data/amarkol.txt");
			$exp=explode("\n",$get);
			$c=count($exp)-1;
			send($fadmin,"amar\n$c");
				}elseif(strpos($text1,"/send") !==false){
					$text=str_replace("/send ","",$text1);
					$get=get("data/amarkol.txt");
					$exp=explode("\n",$get);
					$count=count($exp)-1;
					for($x=0; $x < $count; $x++){
					send($exp[$x],$text);
					
					}
					send($fadmin,"send!");
							}elseif($text1=="ÊÚÏÇÏ ããÈÑ åÇí ÇİÒæÏå ÔÏå"){
			$amar=get("data/$fadmin/amar.txt");
			$ex=explode("\n",$amar);
			$cc=count($ex)-1;
			if($cc < 9){
			$menha = 9 - $cc;
			$text="ÔãÇ ÊÇ˜äæä $cc äİÑ ÑÇ ÚÖæ ˜ÑÏíÏ
ÈÑÇí İÚÇá ÔÏä $menha äİÑ ÏíÑ ÑÇ ÚÖæ ˜äíÏ";
			send($fadmin,$text);
			}else{
			$text="ÔãÇ 9 äİÑ ÑÇ ÈÇ ãæİŞíÊ ÚÖæ ÑÈÇÊ ˜ÑÏå ÇíÏ???";
			send($fadmin,$text);
			}
			}elseif($text1=="??˜ÜÜÿ ÜÜÑæİÜÜÇíáã Ñæ ÜÜ? ?ÑÏå¿"){
				$amar=get("data/$fadmin/amar.txt");
				$exp=explode("\n",$amar);
				$count=count($exp)-1;
				if($count < 9){
					$text="ÔãÇ åäæÒ Èå ÇäÏÇÒå í ˜Çİí ÒíÑ ãÌãæÚå ÌãÚ ä˜ÑÏå ÇíÏ \n\nÈÇ ÏÓÊæÑ /eshterak áíä˜ ãÎÕæÕ ÎæÏ ÑÇ ÈíÑíÏ æ ÈÑÇí ÏæÓÊÇä ÎæÏ ÇÑÓÇá ˜äíÏ\næ ÈÚÏ ÇÒ Çíä˜å 9 äİÑ Ìæíä ÏÇÏäÏ Ï˜ãå ÈÑÇí ÔãÇ ÈÇÒ ÎæÇåÏ ÔÏ ";
						
							send($fadmin,$text);
					}else{
					$text="˜ÓÇäí ˜å ÑæİÇíá ÔãÇ ÑÇ ˜ ˜ÑÏå ÈÇÔäÏ ÈÕæÑÊ íÇã ÇÒ ØÑíŞ ÑÈÇÊ ÈÒÇí ÔãÇ ÇÑÓÇá ÎæÇåÏ ÔÏ?";
					send($fadmin,$text);
					}
				}elseif(strpos($text1=="/start ") !== false  && $text1 !="/start"){
					$id=str_replace("/start ","",$text1);
					$amar=get("data/$id/amar.txt");
					$exp=explode("\n",$amar);
					if(!in_array($fadmin,$exp) && $fadmin !=$id){
					write("data/$id/amar.txt","$id\n","a+");
					$textid="í˜ ÒíÑ ãÌãæÚå Èå ÒíÑ ãÌãæÚå åÇí ÔãÇ ÇÖÇİå ÔÏ?";
					send($id,$textid);
					}
					$amar=get("data/$fadmin/amar.txt");
					$ex=explode("\n",$amar);
	$c=count($ex)-1;
	$text= "ÓáÇã $fname ÚÒíÒ

ÇÒ ØÑíŞ Çíä ÑæÈÇÊ ãíÊæäí ÈÇ ÇÓÊİÇÏå ÇÒ Api Èİåãí ˜íÇ ÑæİÇíáÊæ ˜ ãí˜ää æ ˜íÇ ÍæÇÓÔæä ÈåÊ åÓÊ !

ÇãÇ Èå Ïáíá åÒíäå åÇí Óäíä ØÑÇÍí Api ÈÑäÇãå ¡ ÊÇ ÒãÇäí ˜å 9 äİÑ ÑÇ Èå ÑÈÇÊ ÏÚæÊ ä˜äí ÑÈÇÊ ÈÑÇÊæä İÚÇá äãíÔå !

ÈÑÇí ÏÚæÊ ÇÒ ÏæÓÊÇÊ ˜Çİíå Ñæí /eshterak ˜áí˜ ˜äí æ ÈÚÏ íÇãí Ñæ ˜å ÏÑíÇİÊ ãí˜äí ÈÑÇí 9 äİÑ ÇÑÓÇá ˜äí ÊÇ ãÇ ÈÑäÇãå Ñæ ÇÑÓÇá ˜äíã ÈÑÇÊ

ÔãÇ ÊÇ˜äæä $c äİÑ Ñæ Èå ÑÈÇÊ ÏÚæÊ ˜ÑÏíÏ";
send($fadmin,$text);
					
		}

		$amat=get("data/amarkol.txt");
		$ex=explode("\n",$amat);
		if(!in_array($fadmin,$ex)){
			write("data/amarkol.txt","$fadmin\n","a+");
			}
?>