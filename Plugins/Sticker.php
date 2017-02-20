elseif ($textmessage == '/sudo') {

makereq('sendSticker',[
'chat_id'=>$chat_id,
'sticker'=>"https://StickerUrl"
]);
}
