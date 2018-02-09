<?php
if ($data == "gpenglish" ){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo ) {
     file_put_contents("data/$cllchatid/lang.txt", "english");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"`The group has been add 🤖
 and was set English language 🇦🇺`", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  	 [
		['text'=>"~» gp setting",'callback_data'=>"bag"]
	  ],
	   [
	  ['text'=> "SUPER API💡" ,'url'=>"https://foxlearn.ir"]
	  ]
   ]
   ])
   ]);
   }   
   }
   
 if( $lang12 == "english" ){  
     if($data == "settingslang" ){
  if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo  ){
	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>"` Please select your language`",
 'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	   [
 		['text'=>"🇮🇶arabi🇮🇶",'callback_data'=>"gparabi"],		
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
if ($text == "/panel"){
$allgp_get = file_get_contents('data/allgp.txt');
		$get_gp= explode("\n",$allgp_get);
		$geted = count($get_gp) - 1;
		$allmem_ = file_get_contents('data/members.txt');
		$get_all= explode("\n",$allmem_);
		$getall = count($get_all) - 1;
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🎋`all message in gp ~» $allmsg
🎋all messages in pv ~» $allmsgpv
🎋all members ~» $getall
🎋all gp add ~» $geted`",
 'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"super api", 'url'=>"https://telegram.me/Chist_Team"]
    ]
    ]
    ])
    ]);
    }
}
if( $lang1 == "english" ){
if ($text == "/id"   ){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍁` your name : $name
🍁 your id : $from_id
🍁 your username `: @$user `
•~~~~~~~~~~~~•
🍁 gp name : $gp_name
🍁 gp id : $chat_id 
•~~~~~~~~~~~~•
🍁 your warn : ($warn_1 | $warn)`",
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
//========================== الطرد ===============
if( $lang1 == "english" ){
if($you == "creator" or $you == "administrator" or $from_id == $sudo  ) {
if($re && $text =="/kick"){
sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"member has been kick 👞",
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
   if( $lang1 == "english" ){
 if($re && $you == "creator" or $you == "administrator" or $from_id == $sudo  ) {
 if (strpos($textmessage,"/kick") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "") {
  sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
      ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"member has been kick 👞",
             'reply_to_message_id'=>$message->message_id,
    ]);
    }    
    }
    } //by  < Munir > @Chist_Team
    }
if( $lang1 == "english" ){
 if($you == "creator" or $you == "administrator" or $from_id == $sudo  ) {
if($re && $text =="/ban"){
sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id, // by @Chist_Team = mounir
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"member has been banned 🚫",
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
 if( $lang1 == "english" ){
 if($re && $you == "creator" or $you == "administrator" or $from_id == $sudo  ) {
 if (strpos($textmessage,"/ban") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "" && $text['1'] != "الحظر" && $text['1'] != "حظر") {
  sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
      ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"member has been banned   🚫",
             'reply_to_message_id'=>$message->message_id,
     ]);
     }    
     }
     }
     }
     if( $lang1 == "english" ){
     if($you == "creator" or $you == "administrator" or $from_id == $sudo   ) {
 if($message->reply_to_message && $text == "/unban" ){
bot('unbanChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id,
   ]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'💡 member has been unban 🔚',
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
     if( $lang1 == "english" ){
 if($you == "creator" or $you == "administrator" or $from_id == $sudo   ) {
 if (strpos($textmessage,"/unban") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "") {
 	bot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
        ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
          'text'=>'💡 member has been unban 🔚',
             'reply_to_message_id'=>$message->message_id,
   ]);   
   }    
   }
   }
   }
// ====================== الكتم =================
if( $lang1 == "english" ){
if($text == "/silent" && $re && !in_array($re_id, $super_silent)){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo  ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🤐  member has been add to silent list  ✋🏻️",
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
if( $lang1 == "english" ){
if($text == "/silent" && $re && in_array($re_id, $super_silent)){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo  ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"♣️ member already add to silent list ➖",
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
if( $lang1 == "english" ){
if($text == "/unsilent" && $re && in_array($re_id, $super_silent)){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo  ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"😬  member has been remov to silent list ✅",
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
if( $lang1 == "english" ){
if($text == "/unsilent" && $re && !in_array($re_id, $super_silent)){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo  ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👁‍🗨 member already remov to silent list 💢",
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
    
     if( $lang12 == "english" ){
     if ($data == "welcom" ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo  ){
     file_put_contents("data/$cllchatid/welcome.txt", "setwelcom");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"_ Please send me the new welcome_ 🔃 ", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> "تالع 💡" ,'url'=>"https://foxlearn.ir"]
	  ],
	  	 [
		['text'=>"Back 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
     ]);
     } 
     }
         }
     if( $lang1 == "english" ){
  if ($getwelcome == "setwelcom" ){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo  ){
     file_put_contents("data/$chat_id/welcome.txt", $text);  sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"i'm now saved ✅", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ],
	  [
 		['text'=>"Back 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
   }
    }
    
     if( $lang1 == "english" ){   
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
    
     if( $lang1 == "english" ){
     if ($you == "creator" or $you == "administrator" or $from == $sudo   ){
if($text == '/help'){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"This list is only for admin 🤠
Click on what you want and control your group orders ⚛
 By touching the keyboard ✋🏻",
                           'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	 	['text'=>"~»  setting media 🔒",'callback_data'=>"help"]
	  ],
	  [
  	['text'=>"~»  setting gp 🕴",'callback_data'=>"ss"]
	  ],
	   [
  	['text'=>"~» setting language 🗣",'callback_data'=>"settingslang"]
	  ],
   [
  	['text'=>"~»  Developers 🎭",'callback_data'=>"dev"]
	  ]
   ]
   ])
   ]);
   } 
   }
   }
   if ( $lang12 == "english"){
  if($data == 'bag'){
  if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo ){
	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>" This list is only for admin 🤠
Click on what you want and control your group orders ⚛
 By touching the keyboard ✋🏻",
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	  [
	  	['text'=>"~»  setting media 🔒",'callback_data'=>"help"]
 	  ],
	   [
  		['text'=>"~»  setting gp 🕴",'callback_data'=>"ss"]
 	  ],
 	  [
  	['text'=>"~» setting language 🗣",'callback_data'=>"settingslang"]
	  ],
	   [
	  	['text'=>"~»  Developers 🎭",'callback_data'=>"dev"]
	   ]
    ]
    ])
    ]);
    }
    else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
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
 //========================== rules ===============
    
     if( $lang12 == "english" ){
      if ($data == "rules" ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ){
     file_put_contents("data/$cllchatid/rules.txt", "setrules");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"Please now send new gp rules 🔃", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> "تالع 💡" ,'url'=>"https://foxlearn.ir"]
	  ],
	  [
	 	['text'=>"Back 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
     ]);
     } 
     }
         }
     if( $lang1 == "english" ){
  if ($getruels == "setrules" ){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo   ){
     file_put_contents("data/$chat_id/rules.txt", $text);  sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" i'm now saved✅", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ],
	  [
 		['text'=>"Back 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
   }
    }
     if( $lang1 == "english" ){
 if($text == '/rules'){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"$getruels",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=>"super api 🌐" ,'url'=>"https://foxlearn.ir"]
	  ]
   ]
   ])
   ]);
   }
   }
 //==========================الرابط ===============
    
if( $lang12 == "english" ){ 
     if ($data == "setlink" ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ){
     file_put_contents("data/$cllchatid/gplink.txt", "setlink");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>" 🔃*Please now send new go link* 🌐", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> "تالع 💡" ,'url'=>"https://foxlearn.ir"]
	  ],
	  [
		['text'=>"Back 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
     ]);
     } 
     }
     }
     if( $lang1 == "english" ){
  if ($gplink == "setlink" ){
if ($you == "creator" or $you == "administrator" or $from == $sudo   ){
     file_put_contents("data/$chat_id/gplink.txt", $text);  sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" i'm now saved✅", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=>"super api 💡" ,'url'=>"http://telegram.me/super_api"]
	  ],
	  [
 		['text'=>"Back 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
   }
   }
if( $lang1 == "english" ){
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
if( $lang12 == "english" ){
if($data == 'help'){
sendaction($chat_id, typing);
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
					[
					['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
					[
					['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
     	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
    	 ],
      [
	     ['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	     ],
      [
     	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	     ],
      [
	     ['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	     ],
      [
     	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	     ],
	     [
     	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	     ],
	     [
	     ['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	     ],
	 	   [
	     ['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	     ],
	     [
	     ['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	     ],
	 	   [
		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
	  ]
      ]
      ])
      ]);
      }    }
if( $lang12 == "english" ){
 if ( $data == "link" && $link12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/link.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
    	 [
    	 ['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"✅",'callback_data'=>"link"]
							],
					[
					['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
     	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
    	 ],
      [
	     ['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	     ],
      [
     	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	     ],
      [
	     ['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	     ],
      [
     	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	     ],
	     [
     	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	     ],
	     [
	     ['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	     ],
	 	   [
	     ['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	     ],
	     [
	     ['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	     ],
	 	 [
		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
	  ]
 	    ]
      ])
      ]);
      } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "english" ){
 if ( $data == "link" && $link12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/link.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
		 			[
						['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"❌",'callback_data'=>"link"]
 					],
						[
						['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
		 			],
		 			[
      	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
     	 ],
       [
      	['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
     	 ],
       [
      	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
     	 ],
       [
      	['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
     	 ],
       [
      	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
     	 ],
     	 [
      	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	      ],
	      [
      	['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
     	 ],
   	 	 [
      	['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
     	 ],
    	  [
      	['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
     	 ],
       [
    		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
    	  ]
       ]
       ])
       ]);   
       }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
}

   }
if( $lang12 == "english" ){
if ( $data == "tag" && $tag12 == "❌") {
 if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/tag.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"✅",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "english" ){
 if ( $data == "tag" && $tag12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/tag.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"❌",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
}   }
if( $lang12 == "english" ){
if ( $data == "photo" && $photo12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/photo.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"✅",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "english" ){
 if ( $data == "photo" && $photo12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/photo.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"❌",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
}


   }
if( $lang12 == "english" ){
if ( $data == "fwd" && $fwd12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/fwd.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"✅",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "english" ){
 if ( $data == "fwd" && $fwd12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/fwd.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"❌",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
}





   }
if( $lang12 == "english" ){
if ( $data == "game" && $game12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/game.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"✅",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
	  ]		
      ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "english" ){
 if ( $data == "game" && $game12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/game.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"❌",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
}
   }
if( $lang12 == "english" ){
if ( $data == "video" && $video12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/video.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"✅",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "english" ){
 if ( $data == "video" && $video12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/video.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"❌",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
}
   }
if( $lang12 == "english" ){
if ( $data == "voice" && $voice12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/voice.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"✅",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   //by  < Munir > @wonds1
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "english" ){
 if ( $data == "voice" && $voice12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/voice.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"❌",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
}

   }
if( $lang12 == "english" ){
if ( $data == "audio" && $audio12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/audio.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"✅",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "english" ){
 if ( $data == "audio" && $audio12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/audio.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],

					[
	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"❌",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
}

   }
if( $lang12 == "english" ){
if ( $data == "file" && $doc12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/doc.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],

					[
	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"✅",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "english" ){
 if ( $data == "file" && $doc12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/doc.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"❌",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
}


   }
if( $lang12 == "english" ){
if ( $data == "all" && $text12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/text.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					], //the file by mounir
									[
						['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],

					[
	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"✅",'callback_data'=>"all"]
	 ],
	 	  [
		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "english" ){
 if ( $data == "all" && $text12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/text.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"❌",'callback_data'=>"all"]
	 ],
	  [
		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
}
   }
if( $lang12 == "english" ){
if ( $data == "sticker" && $sticker12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/sticker.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"✅",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "english" ){
 if ( $data == "sticker" && $sticker12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/sticker.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker 🦊",'callback_data'=>"sticker"],['text'=>"❌",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game 🎮",'callback_data'=>"game"],	 ['text'=>"$game12 ",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back 🔙",'callback_data'=>"bag"],['text'=>"🔜next",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
}
}







  
if( $lang12 == "english" ){
if ( $data == "next") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	      [
						['text'=>"location ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️arabi 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }
 
   }
if( $lang12 == "english" ){
  if ( $data == "location" && $location12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/location.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location ❕",'callback_data'=>"location"],['text'=>"❌",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️arabi 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }
 
   }
if( $lang12 == "english" ){
 if ( $data == "location" && $location12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/location.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location ❕",'callback_data'=>"location"],['text'=>"✅",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️arabi 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }
   }
if( $lang12 == "english" ){
 if ( $data == "contact" && $contact12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/contact.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact 📞",'callback_data'=>"contact"],['text'=>"❌",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️arabi 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "english" ){
if ( $data == "contact" && $contact12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/contact.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact 📞",'callback_data'=>"contact"],['text'=>"✅",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️arabi 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "english" ){
if ( $data == "edit" && $edit12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/edit.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit 🀄️",'callback_data'=>"edit"],['text'=>"✅",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️arabi 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }  }
if( $lang12 == "english" ){
if ( $data == "edit" && $edit12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/edit.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit 🀄️",'callback_data'=>"edit"],['text'=>"❌",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️arabi 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "english" ){
if ( $data == "marabi" && $marabi12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/marabi.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️arabi 🇮🇶",'callback_data'=>"marabi"],['text'=>"❌",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }  }
if( $lang12 == "english" ){
if ( $data == "marabi" && $marabi12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/marabi.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️arabi 🇮🇶",'callback_data'=>"marabi"],['text'=>"✅",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "english" ){
if ( $data == "mpersian" && $mpersian12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/mpersian.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️arabi 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"❌",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "english" ){
if ( $data == "mpersian" && $mpersian12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/mpersian.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️arabi 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"✅",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }

  }
if( $lang12 == "english" ){
if ( $data == "menglish" && $menglish12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/menglish.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️arabi 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$menglish12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English 🇦🇺️",'callback_data'=>"menglish"],['text'=>"❌",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "english" ){
if ( $data == "menglish" && $menglish12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/menglish.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️arabi 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English 🇦🇺️",'callback_data'=>"menglish"],['text'=>"✅",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }

  }
if( $lang12 == "english" ){
if ( $data == "Long_list" && $long_list12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/long_list.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️arabi 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam 🗒️",'callback_data'=>"Long_list"],['text'=>"❌",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }

  }
if( $lang12 == "english" ){
if ( $data == "Long_list" && $long_list12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/long_list.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️arabi 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam 🗒️",'callback_data'=>"Long_list"],['text'=>"✅",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }  }
if( $lang12 == "english" ){
if ( $data == "gif" && $gif12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/gif.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️arabi 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"persian 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif 💠️",'callback_data'=>"gif"],['text'=>"❌",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }  }
if( $lang12 == "english" ){
if ( $data == "gif" && $gif12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/gif.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media ⚓️
Press the button to control the lock and open the media
Locked media == ❌
Open media == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️arabi 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"persian 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif 💠️",'callback_data'=>"gif"],['text'=>"✅",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
 }


  }
if( $lang12 == "english" ){
if($data == "ss"  ){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
if (!file_exists("data/$cllchatid/warn/helll.txt")) {
    mkdir("data/$cllchatid/warn");   
     bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  /kick [ id / reply ] to kick a member 👞
/ban ~» [ id / reply ] to ban member ⛓
/unban [ id / reply ] to lift the ban ⚖
/del ~» [ reply ] to clear message by reply 🗑
«~~~~~~~~~~~~~~»
/warn ~» [ reply ] to warn member 📍
/unwarn ~» [ reply ] to delete warnings ️ ️
/silent ~» [ reply ] to mute member 🤐
/unsilent ~» [ reply ] to raise mute for 😬 member ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"🔲 Welcome 🔳",'callback_data'=>"welc"]
					],
					[
	 	 			['text'=>"📍gp link 📍",'callback_data'=>"gplink"]
		  			],
					[
						['text'=>"🗒 rules  📜",'callback_data'=>"rul"]
					],
         [
						['text'=>"♣️ settings warn ⬇️",'callback_data'=>"muner"]
					],
	 [
						['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
					],
					 [
		['text'=>"Back 🔙",'callback_data'=>"bag"]
	  ]
      ]
    ])
  ]);
  }   
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
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
'text'=>"Press
➕ To increase the warning
➖ To minimize the warning",
]);
}   
  
if( $lang12 == "english" ){
if($data == '+'){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
        $newwarn = $warn_ + 1;
         $warn_1 = $warn_ + 1;
        file_put_contents("data/$cllchatid/warn/warn.txt", $newwarn);
	bot('editmessagetext',[
         'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  /kick [ id / reply ] to kick a member 👞
/ban ~» [ id / reply ] to ban member ⛓
/unban [ id / reply ] to lift the ban ⚖
/del ~» [ reply ] to clear message by reply 🗑
«~~~~~~~~~~~~~~»
/warn ~» [ reply ] to warn member 📍
/unwarn ~» [ reply ] to delete warnings ️ ️
/silent ~» [ reply ] to mute member 🤐
/unsilent ~» [ reply ] to raise mute for 😬 member ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
      [
						['text'=>"🔲 Welcome 🔳",'callback_data'=>"welc"]
					],
					[
	 	 			['text'=>"📍gp link 📍",'callback_data'=>"gplink"]
		  			],
					[
						['text'=>"🗒 rules  📜",'callback_data'=>"rul"]
					],
        [
						['text'=>"♣️ settings warn⬇️",'callback_data'=>"muner"]
					],
	 [
						['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_1",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
					],
					 [
		['text'=>"Back 🔙",'callback_data'=>"bag"]
	  ]
      ]
    ])
  ]);
  }   
  else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
}
  }
if( $lang12 == "english" ){
 if($data == '-' ){
 if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
        $newwarn = $warn_ - 1;
        $warn_1 = $warn_ - 1;
        file_put_contents("data/$cllchatid/warn/warn.txt", $newwarn);
	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  /kick [ id / reply ] to kick a member 👞
/ban ~» [ id / reply ] to ban member ⛓
/unban [ id / reply ] to lift the ban ⚖
/del ~» [ reply ] to clear message by reply 🗑
«~~~~~~~~~~~~~~»
/warn ~» [ reply ] to warn member 📍
/unwarn ~» [ reply ] to delete warnings ️ ️
/silent ~» [ reply ] to mute member 🤐
/unsilent ~» [ reply ] to raise mute for 😬 member ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
         [
			 			['text'=>"🔲 Welcome 🔳",'callback_data'=>"welc"]
  					],
  					[
	 	 			['text'=>"📍gp link 📍",'callback_data'=>"gplink"]
		  			],
	   			[
						['text'=>"🗒 rules  📜",'callback_data'=>"rul"]
						],
        [
       	['text'=>"♣️ settings warn ⬇️",'callback_data'=>"muner"]
  					],
  	     [
	   			['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_1",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
			  		],
         [
         ['text'=>"Back 🔙",'callback_data'=>"bag"]
         ]
         ]
         ])
         ]);
         }   else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
}
 } 
$warns = $warn - 1;  
if( $lang1 == "english" ){
if ($warns != $warn_2){ 
 if($re &&$text == "/warn"){  
 if($you == "creator" or $you == "administrator" or $from_id == $sudo  ){     
 $nnwarn = $warn_2 + 1;
        file_put_contents("data/$chat_id/warn/$re_id.txt", $nnwarn);
        sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"Sorry my friend 😒✋🏻
Be aware of your actions within the group 👤
This is a warning by admin 👨‍🏫
Number of your warnings ( $nnwarn | $warn )",
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
 }
 }
 }
 $warns = $warn - 1;   
if( $lang1 == "english" ){
 if ($warns == $warn_2){
if($re && $text == "/warn"){     
if($you == "creator" or $you == "administrator" or $from_id == $sudo  ){     
 file_put_contents("data/$chat_id/warn/$re_id.txt", "0");
        sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"Sorry my friend 💂
You have not followed the rules in the set 🤷‍♂
You have reached the maximum of warnings and you have been kicked out 👞
Your warnings ( $warn | $warn )",
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
if( $lang1 == "english" ){
  if($re && $text == "/unwarn"){     
if($you == "creator" or $you == "administrator" or $from_id == $sudo  ){     
 file_put_contents("data/$chat_id/warn/$re_id.txt", "0");
        sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"What a good day  🙈
all your warnings have been removed 😉 ",
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
if( $lang12 == "english" ){
  if($data == "bagg"  ){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  /kick [ id / reply ] to kick a member 👞
/ban ~» [ id / reply ] to ban member ⛓
/unban [ id / reply ] to lift the ban ⚖
/del ~» [ reply ] to clear message by reply 🗑
«~~~~~~~~~~~~~~»
/warn ~» [ reply ] to warn member 📍
/unwarn ~» [ reply ] to delete warnings ️ ️
/silent ~» [ reply ] to mute member 🤐
/unsilent ~» [ reply ] to raise mute for 😬 member ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"🔲 Welcome 🔳",'callback_data'=>"welc"]
		 			],
		 			[
						['text'=>"📍gp link 📍",'callback_data'=>"gplink"]
		 			],
	 				[
		 			['text'=>"🗒 rules 📜",'callback_data'=>"rul"]
	  			],
       [
  				['text'=>"♣️ settings warn⬇️",'callback_data'=>"muner"]
	  			],
	      [
			 		['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
	 				],
					 [
     		['text'=>"Back 🔙",'callback_data'=>"bag"]
	      ]
       ]
       ])
       ]);
       }   
       else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
}
  
  }
if( $lang12 == "english" ){  
if($data == "welc"  ){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"This is a list of welcome settings 🤗
Press (⬛️Edit Welcome⬜️) to edit the welcome for the group😃",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"⬛️ Edit Welcome ⬜️",'callback_data'=>"welcom"]
					],
					 [
		['text'=>"Back 🔙",'callback_data'=>"bagg"]
	  ]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
}
  }
if( $lang12 == "english" ){
// by @Chist_Team = mounir
if($data == "rul"  ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo  ){
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"Welcome to the list of Setting rules 👁
Press ️👇🏻 ️👇🏻
( Edit rules 📨️)
To develop new rules for the group 🖊",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"Edit rules 📨️",'callback_data'=>"rules"]
					],
					 [
		['text'=>"Back 🔙",'callback_data'=>"bagg"]
	  ]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
}
  }
if( $lang12 == "english" ){
if($data == "gplink"  ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo  ){
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"Welcome to the group link list
Press 🔍👇🏻
(📍 Edit link 📍)
To put a new link 📨",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"📍Edit link gp  📍️",'callback_data'=>"setlink"]
					],
					 [
		['text'=>"Back 🔙",'callback_data'=>"bagg"]
	  ]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry ⚠️ this is for admin only 📛",
        'show_alert'=>true
        ]);
}
}
}
?>
/* help

Programmer
 < Munir > @Chist_Team
~~~~~~~~~~~~
Aides developer
« Mohammed » @im_king_eblisam
«~~~~~~~~~~~»
 ch = @Chist_Team


*/
