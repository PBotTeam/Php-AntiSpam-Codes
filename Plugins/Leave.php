elseif ($textmessage == '/leave' && $from_id == $admin) {

makereq('leaveChat',[
'chat_id'=>$chat_id
]);
}
