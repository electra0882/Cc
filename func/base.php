<?php
if ((strpos($message, "/start") === 0)||(strpos($message, "!start") === 0)||(strpos($message, ".start") === 0))
{
  $rolep = 1;
  sendChatAction($chatId,"type");
  $message = urlencode("
➜ 𝗨𝗦𝗘𝗥𝗡𝗔𝗠𝗘 » <a href='https://t.me/$username'>$firstname</a> 
➜ 𝗨𝗦𝗘𝗥 𝗜𝗗 » <code>$userId</code>
➜ 𝗨𝗦𝗘𝗥 𝗦𝗧𝗔𝗧𝗨𝗦 » $role

𝗨𝗦𝗘 /cmds For Knowing This

𝗕𝗢𝗧 𝗕𝗬 - ElectraOp
");
  reply_to($chatId,$message,$messageId);
}

?>
