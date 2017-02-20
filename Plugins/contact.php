elseif ($textmessage == '/contact') {

makereq('sendContact',[
'chat_id'=>$chat_id,
'phone_number'=>"+9800000",
'first_name'=>"Mikail",
'last_name'=>"Vigeo"
]);
}
