<?php
if ($data == "gparabi" ){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo ) {
     file_put_contents("data/$cllchatid/lang.txt", "arabi");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"`تم تفعيل المجموعة 🤖
وتم اختبار اللغة العربية 🇮🇶`", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  	 [
		['text'=>"الاوامر",'callback_data'=>"bag"]
	  ],
	   [
	  ['text'=> "تالع 💡" ,'url'=>"https://foxlearn.ir"]
	  ]
   ]
   ])
   ]);
   }   
   }
   
 if( $lang12 == "arabi" ){  
     if($data == "settingslang" ){
  if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo  ){
	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>"`من فضلك اختر لغتك المناسبة `",
 'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	   [
 		['text'=>"🇮🇶العربية🇮🇶",'callback_data'=>"gparabi"],		
	  ],
	  [
		['text'=>"🇦🇺English🇦🇺",'callback_data'=>"gpenglish"],
	  ],
	  [
	   ['text'=>"🇭🇺فارسی🇮🇷",'callback_data'=>"gppersian"]
	  ]
   ]
   ])
   ]);
    }
    }
    }
   //================العداد==============

if ($from_id == $sudo  ) {
if ($text == "العداد"){
$allgp_get = file_get_contents('data/allgp.txt');
		$get_gp= explode("\n",$allgp_get);
		$geted = count($get_gp) - 1;
		$allmem_ = file_get_contents('data/members.txt');
		$get_all= explode("\n",$allmem_);
		$getall = count($get_all) - 1;
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🎋`عداد رسائل المجموعات ~» $allmsg
🎋عداد رسائل الخاص ~» $allmsgpv
🎋 عدد اعضاء البوت ~» $getall
🎋عدد المجموعات المفعلة ~» $geted`",
 'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"تابع", 'url'=>"https://telegram.me/https://foxlearn.ir"]
    ]
    ]
    ])
    ]);
    }
}
if( $lang1 == "arabi" ){
if ($text == "ايدي"   ){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍁` اسمك : $name
🍁 ايديك : $from_id
🍁 معرفك `: @$user `
•~~~~~~ـ~~~~~~•
🍁اسم مجموعة : $gp_name
🍁 ايدي المجموعة : $chat_id 
•~~~~~~ـ~~~~~~•
🍁 تحذيراتك : ($warn_1 | $warn)`",
	'reply_to_message_id'=>$message->message_id,
	 'parse_mode'=>'MARKDOWN',
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ]
   ]
   ])
   ]); //by  < Munir > @wonds1
   }    
   }
//========================== الطرد ===============
if( $lang1 == "arabi" ){
if($you == "creator" or $you == "administrator" or $from_id == $sudo  ) {
if($re && $text =="طرد"){
sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"تم طرد العضو بنجاح 👞",
	'reply_to_message_id'=>$message->message_id,
	 'parse_mode'=>'html',
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	 [
	  ['text'=> $re_name ,'url'=>"http://telegram.me/" . $re_user]
	  ]
   ]
   ])
   ]);
   }    
   }
   }
   if( $lang1 == "arabi" ){
 if($re && $you == "creator" or $you == "administrator" or $from_id == $sudo  ) {
 if (strpos($textmessage,"طرد") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "") {
  sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
      ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"تم طرد العضو بنجاح 👞",
             'reply_to_message_id'=>$message->message_id,
    ]);
    }    
    }
    }
    }
if( $lang1 == "arabi" ){
 if($you == "creator" or $you == "administrator" or $from_id == $sudo  ) {
if($re && $text =="حظر"){
sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id, // by @wounds1 = mounir
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"تم حظر العضو بنجاح 🚫",
	'reply_to_message_id'=>$message->message_id,
	 'parse_mode'=>'html',
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	 [
	  ['text'=> $re_name ,'url'=>"http://telegram.me/" . $re_user]
	  ]
	  ]
   ])
   ]);
   }    
   }
   }
 if( $lang1 == "arabi" ){
 if($re && $you == "creator" or $you == "administrator" or $from_id == $sudo  ) {
 if (strpos($textmessage,"حظر") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "" && $text['1'] != "الحظر" && $text['1'] != "حظر") {
  sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
      ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"تم حظر العضو بنجاح  🚫",
             'reply_to_message_id'=>$message->message_id,
     ]);
     }    
     }
     }
     }
     if( $lang1 == "arabi" ){
     if($you == "creator" or $you == "administrator" or $from_id == $sudo   ) {
 if($message->reply_to_message && $text == "الغاء الحظر" ){
bot('unbanChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id,
   ]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'💡 العضو تم رفع الحظر عنه 🔚',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
     [
     ['text'=>$message->reply_to_message->from->first_name, 'url'=>"https://telegram.me/".$message->reply_to_message->from->username]
     ]
     ]
     ])
     ]);
     } 
     }
     }
     if( $lang1 == "arabi" ){
 if($you == "creator" or $you == "administrator" or $from_id == $sudo   ) {
 if (strpos($textmessage,"الغاء الحظر") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "") {
 	bot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
        ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
          'text'=>'💡 العضو تم رفع الحظر عنه 🔚',
             'reply_to_message_id'=>$message->message_id,
   ]);   
   }    
   }
   }
   }
// ====================== الكتم =================
if( $lang1 == "arabi" ){
if($text == "كتم" && $re && !in_array($re_id, $super_silent)){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo  ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🤐 تم تفعيل الصامت عليك ✋🏻
⚠️ من فضلك التزم قوانين ❗️",
'reply_to_message_id'=>$re_msgid,
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ]
    ]
    ])
]);

file_put_contents("data/$chat_id/silent.txt", "\n" . $re_id, FILE_APPEND);
}
}
}
if( $lang1 == "arabi" ){
if($text == "كتم" && $re && in_array($re_id, $super_silent)){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo  ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"♣️ العضو انه بلفعل مكتم ➖",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ]
    ]
    ])
]);
}
}
}
if( $lang1 == "arabi" ){
if($text == "الغاء كتم" && $re && in_array($re_id, $super_silent)){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo  ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"😬 تم فتح الكتم عنك ✅
🚸 لا تكرر ما فعلته سابقاً ❌",
'reply_to_message_id'=>$re_msgid,
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ]
    ]
    ])
]);

$super_api = file_get_contents("data/$chat_id/silent.txt");
$super_api = str_replace($re_id,'',$super_api);
$super_api = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $o);
file_put_contents("data/$chat_id/silent.txt", $super_api);
}
}
}
if( $lang1 == "arabi" ){
if($text == "الغاء كتم" && $re && !in_array($re_id, $super_silent)){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo  ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👁‍🗨 انه بلفعل ليس مكتوم 💢",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ]
    ]
    ])
]);
}
}
}
 //========================== وضع ترحيب ===============
    
     if( $lang12 == "arabi" ){
     if ($data == "welcom" ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo  ){
     file_put_contents("data/$cllchatid/welcome.txt", "setwelcom");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"_من فضلك ارسل الان الترحيب_ 🔃 ", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> "تالع 💡" ,'url'=>"http://telegram.me/super_api"]
	  ],
	  	 [
		['text'=>"العودة 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
     ]);
     } 
     }
         }
     if( $lang1 == "arabi" ){
  if ($getwelcome == "setwelcom" ){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo  ){
     file_put_contents("data/$chat_id/welcome.txt", $text);  sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" تم الحفظ بنجاح ✅", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ],
	  [
 		['text'=>"العودة 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
   }
    }
    
     if( $lang1 == "arabi" ){   
    if($new_member  ){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"$getwelcome", 
      'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ]
 		]
  		])
   ]);
   } 
}
 //========================== المساعدة ===============  
    
     if( $lang1 == "arabi" ){
     if ($you == "creator" or $you == "administrator" or $from == $sudo   ){
if($text == 'مساعدة'){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"هذه قائمة الاومر للدمنية فقط 🤠
اضغط على ما تريد وتحكم في اوامر مجموعتك ♋️
 عن طريق لمس الكيبورد ✋🏻",
                           'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	 	['text'=>"~»  المديا 🔒",'callback_data'=>"help"]
	  ],
	  [
  	['text'=>"~»  الادارة 🕴",'callback_data'=>"ss"]
	  ],
	   [
  	['text'=>"اعدادت اللغة 🗣",'callback_data'=>"settingslang"]
	  ],
   [
  	['text'=>"~»  المطورين 🎭",'callback_data'=>"dev"]
	  ]
   ]
   ])
   ]);
   } 
   }
   }
   if ( $lang12 == "arabi"){
  if($data == 'bag'){
  if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo ){
	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>" هذه قائمة الاومر للدمنية فقط 🤠
اضغط على ما تريد وتحكم في اوامر مجموعتك ♋️
 عن طريق لمس الكيبورد ✋🏻",
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	  [
	  	['text'=>"~»  المديا 🔒",'callback_data'=>"help"]
 	  ],
	   [
  		['text'=>"~»  الادارة 🕴",'callback_data'=>"ss"]
 	  ],
 	  [
  	['text'=>"اعدادت اللغة 🗣",'callback_data'=>"settingslang"]
	  ],
	   [
	  	['text'=>"~»  المطورين 🎭",'callback_data'=>"dev"]
	   ]
    ]
    ])
    ]);
    }
    else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
       ]);
       }
       } 
       }
       elseif ($data == 'dev' )
      {
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"bot programmer by @wounds1 😊",
       ]);
       }   
//==========================تسهيل عمل ويبهوك ===============
 
 elseif (strpos($textmessage,"/setweb") !== false) {
  $text = explode(" ",$textmessage);
  if ($text['2'] != "" && $text['1'] != "") {
    $web = "https://api.telegram.org/bot" . $text['1'] . "/setwebhook?url=" . $text['2'];
    sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" تم انشاء ويبهوك بنجاح اضغط على في الاسفل", 
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
	   ['text'=>"من فضلك اضغط هنا🌐" ,'url'=>"$web"]
 	  ]
    ]
    ])
    ]);
    }    
    }
//========================== المطور ===============
  if($text == 'المطور' or $text == '/dev')
{
 $phone = '+9647700491819';
 $nameea = 'HAMOSHE';
bot('sendContact',[
 'chat_id'=>$chat_id,
 'phone_number'=>$phone,
 'first_name'=>$nameea
     ]);
     }
 //========================== القوانين ===============
    
     if( $lang12 == "arabi" ){
      if ($data == "rules" ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ){
     file_put_contents("data/$cllchatid/rules.txt", "setrules");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"_من فضلك ارسل الان القوانين_ 🔃", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> "تالع 💡" ,'url'=>"http://telegram.me/super_api"]
	  ],
	  [
	 	['text'=>"العودة 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
     ]);
     } 
     }
         }
     if( $lang1 == "arabi" ){
  if ($getruels == "setrules" ){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo   ){
     file_put_contents("data/$chat_id/rules.txt", $text);  sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" تم الحفظ بنجاح ✅", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ],
	  [
 		['text'=>"العودة 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
   }
    }
     if( $lang1 == "arabi" ){
 if($text == 'القوانين'){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"$getruels",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=>"تابع 🌐" ,'url'=>"http://telegram.me/super_api"]
	  ]
   ]
   ])
   ]);
   }
   }
 //==========================الرابط ===============
    
if( $lang12 == "arabi" ){ 
     if ($data == "setlink" ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ){
     file_put_contents("data/$cllchatid/gplink.txt", "setlink");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"_من فضلك ارسل الان الرابط_ 🔃
*Please now send new go link* 🌐", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> "تالع 💡" ,'url'=>"http://telegram.me/super_api"]
	  ],
	  [
		['text'=>"العودة 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
     ]);
     } 
     }
     }
     if( $lang1 == "arabi" ){
  if ($gplink == "setlink" ){
if ($you == "creator" or $you == "administrator" or $from == $sudo   ){
     file_put_contents("data/$chat_id/gplink.txt", $text);  sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" تم الحفظ بنجاح ✅", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=>"تابع 💡" ,'url'=>"http://telegram.me/super_api"]
	  ],
	  [
 		['text'=>"العودة 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
   }
   }
if( $lang1 == "arabi" ){
if($text == 'الرابط'){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
              'text' =>"$gplink",
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ]
   ]
   ])
   ]);
   }    
   }  
if( $lang12 == "arabi" ){
if($data == 'help'){
sendaction($chat_id, typing);
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
					[
					['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
					[
					['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
     	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
    	 ],
      [
	     ['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	     ],
      [
     	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	     ],
      [
	     ['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	     ],
      [
     	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	     ],
	     [
     	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	     ],
	     [
	     ['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	     ],
	 	   [
	     ['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	     ],
	     [
	     ['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	     ],
	 	   [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
      ]
      ])
      ]);
      }    }
if( $lang12 == "arabi" ){
 if ( $data == "link" && $link12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/link.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
    	 [
    	 ['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"✅",'callback_data'=>"link"]
							],
					[
					['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
     	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
    	 ],
      [
	     ['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	     ],
      [
     	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	     ],
      [
	     ['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	     ],
      [
     	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	     ],
	     [
     	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	     ],
	     [
	     ['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	     ],
	 	   [
	     ['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	     ],
	     [
	     ['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	     ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
 	    ]
      ])
      ]);
      } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "arabi" ){
 if ( $data == "link" && $link12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/link.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
		 			[
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"❌",'callback_data'=>"link"]
 					],
						[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
		 			],
		 			[
      	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
     	 ],
       [
      	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
     	 ],
       [
      	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
     	 ],
       [
      	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
     	 ],
       [
      	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
     	 ],
     	 [
      	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	      ],
	      [
      	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
     	 ],
   	 	 [
      	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
     	 ],
    	  [
      	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
     	 ],
       [
    		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
    	  ]
       ]
       ])
       ]);   
       }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}

   }
if( $lang12 == "arabi" ){
if ( $data == "tag" && $tag12 == "❌") {
 if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/tag.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"✅",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "arabi" ){
 if ( $data == "tag" && $tag12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/tag.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"❌",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}   }
if( $lang12 == "arabi" ){
if ( $data == "photo" && $photo12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/photo.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"✅",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "arabi" ){
 if ( $data == "photo" && $photo12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/photo.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"❌",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}


   }
if( $lang12 == "arabi" ){
if ( $data == "fwd" && $fwd12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/fwd.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"✅",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "arabi" ){
 if ( $data == "fwd" && $fwd12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/fwd.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"❌",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
//by  < Munir > @wonds1




   }
if( $lang12 == "arabi" ){
if ( $data == "game" && $game12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/game.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"✅",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]		
      ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "arabi" ){
 if ( $data == "game" && $game12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/game.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"❌",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
   }
if( $lang12 == "arabi" ){
if ( $data == "video" && $video12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/video.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"✅",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "arabi" ){
 if ( $data == "video" && $video12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/video.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"❌",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
   }
if( $lang12 == "arabi" ){
if ( $data == "voice" && $voice12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/voice.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"✅",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "arabi" ){
 if ( $data == "voice" && $voice12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/voice.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"❌",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}

   }
if( $lang12 == "arabi" ){
if ( $data == "audio" && $audio12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/audio.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"✅",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "arabi" ){
 if ( $data == "audio" && $audio12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/audio.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],

					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"❌",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}

   }
if( $lang12 == "arabi" ){
if ( $data == "file" && $doc12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/doc.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],

					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"✅",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "arabi" ){
 if ( $data == "file" && $doc12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/doc.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"❌",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}


   }
if( $lang12 == "arabi" ){
if ( $data == "all" && $text12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/text.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					], //the file by mounir
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],

					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"✅",'callback_data'=>"all"]
	 ],
	 	  [//by  < Munir > @wonds1
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "arabi" ){
 if ( $data == "all" && $text12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/text.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"❌",'callback_data'=>"all"]
	 ],
	  [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
   }
if( $lang12 == "arabi" ){
if ( $data == "sticker" && $sticker12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/sticker.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"✅",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "arabi" ){
 if ( $data == "sticker" && $sticker12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/sticker.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"الروابط 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"الملصقات 🦊",'callback_data'=>"sticker"],['text'=>"❌",'callback_data'=>"sticker"]
					],
					[
	['text'=>"الصور 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"التاك (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"اعادة توجيه 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"الالعاب 🎮",'callback_data'=>"game"],	 ['text'=>"$game12 ",'callback_data'=>"game"]
	 ],
    [
	['text'=>"الفيدوات 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"البصمات 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"الاغاني 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"الملفات 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"المحادثة 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"],['text'=>"🔜التالي",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
}







  
if( $lang12 == "arabi" ){
if ( $data == "next") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	      [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
 
   }
if( $lang12 == "arabi" ){
  if ( $data == "location" && $location12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/location.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"❌",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
 
   }
if( $lang12 == "arabi" ){
 if ( $data == "location" && $location12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/location.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"✅",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
   }
if( $lang12 == "arabi" ){
 if ( $data == "contact" && $contact12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/contact.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"❌",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				], //by  < Munir > @wonds1
	 				[
						['text'=>"️العربية 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "arabi" ){
if ( $data == "contact" && $contact12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/contact.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"✅",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "arabi" ){
if ( $data == "edit" && $edit12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/edit.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"✅",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }  }
if( $lang12 == "arabi" ){
if ( $data == "edit" && $edit12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/edit.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"❌",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "arabi" ){
if ( $data == "marabi" && $marabi12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/marabi.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇮🇶",'callback_data'=>"marabi"],['text'=>"❌",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }  }
if( $lang12 == "arabi" ){
if ( $data == "marabi" && $marabi12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/marabi.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇮🇶",'callback_data'=>"marabi"],['text'=>"✅",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "arabi" ){
if ( $data == "mpersian" && $mpersian12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/mpersian.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"❌",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "arabi" ){
if ( $data == "mpersian" && $mpersian12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/mpersian.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"✅",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }

  }
if( $lang12 == "arabi" ){
if ( $data == "menglish" && $menglish12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/menglish.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$menglish12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"❌",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "arabi" ){
if ( $data == "menglish" && $menglish12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/menglish.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"✅",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }

  }
if( $lang12 == "arabi" ){
if ( $data == "Long_list" && $long_list12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/long_list.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"❌",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }

  }
if( $lang12 == "arabi" ){
if ( $data == "Long_list" && $long_list12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/long_list.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"✅",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }  } //by  < Munir > @wonds1
if( $lang12 == "arabi" ){
if ( $data == "gif" && $gif12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/gif.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"❌",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }  }
if( $lang12 == "arabi" ){
if ( $data == "gif" && $gif12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/gif.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"الموقع ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"جهات الاتصال 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"التعديل 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️العربية 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"الفارسية 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"الانكليزية 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"الكلايش الطويلة 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"صور متحركة 💠️",'callback_data'=>"gif"],['text'=>"✅",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"العودة 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }


  }
if( $lang12 == "arabi" ){
if($data == "ss"  ){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
if (!file_exists("data/$cllchatid/warn/helll.txt")) {
    mkdir("data/$cllchatid/warn");   
     bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  هذه اوالامر المدراء 📛
طرد [ايدي / بلرد ] لطرد عضو 👞
حظر [ايدي / بلرد ] لحظر عضو ⛓
الغاء الحظر [ايدي/ بلرد] لرفع الحظر ⚖
 مسح [ بلرد ] لمسح رسالة بواسطة الرد 🗑
         «~~~~~~~~~~~~~~»
تحذير [ بلرد ] لتحذير عضو 📍
مسح التحذيرات [بلرد] لحذف التحذيرات ♣️
كتم [ بلرد ] لكتم عضو 🤐
الغاء كتم [ بلرد ] لرفع الكتم عن عضو 😬 ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"🔲 الترحيب 🔳",'callback_data'=>"welc"]
					],
					[
	 	 			['text'=>"📍رابط المجموعة 📍",'callback_data'=>"gplink"]
		  			],
					[
						['text'=>"🗒 القوانين  📜",'callback_data'=>"rul"]
					],
         [
						['text'=>"♣️ تحديد التحذير ⬇️",'callback_data'=>"muner"]
					],
	 [
						['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
					],
					 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"]
	  ]
      ]
    ])
  ]);
  }   
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
  }
  elseif ($data == '#' )
{
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"هذا هو الحد الاقصى لعدد التحذيرات ♣️",
]);
}   
 elseif ($data == 'muner' )
{
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قم بلضغط على 
➕ ليزادة التحذير
➖ لتقليل التحذير️",
]);
}   
  
if( $lang12 == "arabi" ){
if($data == '+'){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
        $newwarn = $warn_ + 1;
         $warn_1 = $warn_ + 1;
        file_put_contents("data/$cllchatid/warn/warn.txt", $newwarn);
	bot('editmessagetext',[
         'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  هذه اوالامر المدراء 📛
طرد [ايدي / بلرد ] لطرد عضو 👞
حظر [ايدي / بلرد ] لحظر عضو ⛓
الغاء الحظر [ايدي/ بلرد] لرفع الحظر ⚖
 مسح [ بلرد ] لمسح رسالة بواسطة الرد 🗑
         «~~~~~~~~~~~~~~»
تحذير [ بلرد ] لتحذير عضو 📍
مسح التحذيرات [بلرد] لحذف التحذيرات ♣️
كتم [ بلرد ] لكتم عضو 🤐
الغاء كتم [ بلرد ] لرفع الكتم عن عضو 😬 ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
      [
						['text'=>"🔲 الترحيب 🔳",'callback_data'=>"welc"]
					],
					[
	 	 			['text'=>"📍رابط المجموعة 📍",'callback_data'=>"gplink"]
		  			],
					[
						['text'=>"🗒 القوانين  📜",'callback_data'=>"rul"]
					],
        [
						['text'=>"♣️ تحديد التحذير⬇️",'callback_data'=>"muner"]
					],
	 [
						['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_1",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
					],
					 [
		['text'=>"العودة 🔙",'callback_data'=>"bag"]
	  ]
      ]
    ])
  ]);
  }   
  else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
  }
if( $lang12 == "arabi" ){
 if($data == '-' ){
 if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
        $newwarn = $warn_ - 1;
        $warn_1 = $warn_ - 1;
        file_put_contents("data/$cllchatid/warn/warn.txt", $newwarn);
	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  هذه اوالامر المدراء 📛
طرد [ايدي / بلرد ] لطرد عضو 👞
حظر [ايدي / بلرد ] لحظر عضو ⛓
الغاء الحظر [ايدي/ بلرد] لرفع الحظر ⚖
 مسح [ بلرد ] لمسح رسالة بواسطة الرد 🗑
         «~~~~~~~~~~~~~~»
تحذير [ بلرد ] لتحذير عضو 📍
مسح التحذيرات [بلرد] لحذف التحذيرات ♣️
كتم [ بلرد ] لكتم عضو 🤐
الغاء كتم [ بلرد ] لرفع الكتم عن عضو 😬 ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
         [
			 			['text'=>"🔲 الترحيب 🔳",'callback_data'=>"welc"]
  					],
  					[
	 	 			['text'=>"📍رابط المجموعة 📍",'callback_data'=>"gplink"]
		  			],
	   			[
						['text'=>"🗒 القوانين  📜",'callback_data'=>"rul"]
						],
        [
       	['text'=>"♣️ تحديد التحذير ⬇️",'callback_data'=>"muner"]
  					],
  	     [
	   			['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_1",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
			  		],
         [
         ['text'=>"العودة 🔙",'callback_data'=>"bag"]
         ]
         ]
         ])
         ]);
         }   else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
 } 
$warns = $warn - 1;  
if( $lang1 == "arabi" ){
if ($warns != $warn_2){ 
 if($re &&$text == "تحذير"){  
 if($you == "creator" or $you == "administrator" or $from_id == $sudo  ){     
 $nnwarn = $warn_2 + 1;
        file_put_contents("data/$chat_id/warn/$re_id.txt", $nnwarn);
        sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"عذرا يا صديقي 😒✋🏻
انتبه لتصرفاتك داخل المجموعة 👥
هذا تحذير من قبل الدارة 👨‍🏫
عدد تحذيراتك هية ( $nnwarn | $warn )",
'reply_to_message_id'=>$re_msgid,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
	  ['text'=>"$re_name" ,'url'=>"http://telegram.me/$re_user"]
	  ]
      ]
    ])
  ]);
  }  
 } //by  < Munir > @wonds1
 }
 }
 $warns = $warn - 1;   
if( $lang1 == "arabi" ){
 if ($warns == $warn_2){
if($re && $text == "تحذير"){     
if($you == "creator" or $you == "administrator" or $from_id == $sudo  ){     
 file_put_contents("data/$chat_id/warn/$re_id.txt", "0");
        sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"اسف يا صديقي 💂
لم تلتزمم بلقواعد في المجموعة 👨‍💼
وصلت الى الحد الاقصى من التحذيرات وتم طردك 👞
تحذيراتك هية ( $warn | $warn )",
'reply_to_message_id'=>$re_msgid,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
	  ['text'=>"$re_name" ,'url'=>"http://telegram.me/$re_user"]
	  ]
      ]
    ])
  ]);
  sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
  }
  }
  }
    }
if( $lang1 == "arabi" ){
  if($re && $text == "مسح التحذيرات"){     
if($you == "creator" or $you == "administrator" or $from_id == $sudo  ){     
 file_put_contents("data/$chat_id/warn/$re_id.txt", "0");
        sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"يا له من يوم جديد تم حذف تحذيراتك ",
                'reply_to_message_id'=>$re_msgid,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
	  ['text'=>"$re_name" ,'url'=>"http://telegram.me/$re_user"]
	  ]
      ]
    ])
  ]);
  } }  }
if( $lang12 == "arabi" ){
  if($data == "bagg"  ){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  هذه اوالامر المدراء 📛
طرد [ايدي / بلرد ] لطرد عضو 👞
حظر [ايدي / بلرد ] لحظر عضو ⛓
الغاء الحظر [ايدي/ بلرد] لرفع الحظر ⚖
 مسح [ بلرد ] لمسح رسالة بواسطة الرد 🗑
         «~~~~~~~~~~~~~~»
تحذير [ بلرد ] لتحذير عضو 📍
مسح التحذيرات [بلرد] لحذف التحذيرات ♣️
كتم [ بلرد ] لكتم عضو 🤐
الغاء كتم [ بلرد ] لرفع الكتم عن عضو 😬 ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"🔲 الترحيب 🔳",'callback_data'=>"welc"]
		 			],
		 			[
						['text'=>"📍رابط المجموعة 📍",'callback_data'=>"gplink"]
		 			],
	 				[
		 			['text'=>"🗒 القوانين 📜",'callback_data'=>"rul"]
	  			],
       [
  				['text'=>"♣️ تحديد التحذير⬇️",'callback_data'=>"muner"]
	  			],
	      [
			 		['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
	 				],
					 [
     		['text'=>"العودة 🔙",'callback_data'=>"bag"]
	      ]
       ]
       ])
       ]);
       }   
       else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
  
  }
if( $lang12 == "arabi" ){  
if($data == "welc"  ){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"هذه قائمة اعدادات الترحيب 🤗
اضغط على (⬛️ تعديل الترحيب  ⬜️) لتعديل الترحيب الخاص بلمجموعة 😄",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"⬛️ تعديل الترحيب ⬜️",'callback_data'=>"welcom"]
					],
					 [
		['text'=>"العودة 🔙",'callback_data'=>"bagg"]
	  ]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
  }
if( $lang12 == "arabi" ){
// by @wounds1 = mounir
if($data == "rul"  ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo  ){
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"اهلا بك في قائمة القوانين 👁‍🗨
اضغط على ♣️👇🏻
(تعديل القوانين 📨️)
لوضع قوانين جديدة للمجموعة 🖊",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"تعديل القوانين 📨️",'callback_data'=>"rules"]
					],
					 [
		['text'=>"العودة 🔙",'callback_data'=>"bagg"]
	  ]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
  }
if( $lang12 == "arabi" ){
if($data == "gplink"  ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo  ){
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"اهلا بك في قائمة رابط المجموعة 🖇
اضغط على 🔍👇🏻
(📍تعديل الرابط 📍)
لوضع رابط جديد 📨",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"📍تعديل الرابط  📍️",'callback_data'=>"setlink"]
					],
					 [
		['text'=>"العودة 🔙",'callback_data'=>"bagg"]
	  ]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
}
?>
/* help

Programmer
 < Munir > @wonds1
~~~~~~~~~~~~
Aides developer
« Mohammed » @vps_1
«~~~~~~~~~~~»
 ch = @soper_api


*/
