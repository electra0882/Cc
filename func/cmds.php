<?php
if ((strpos($message, "/cmds") === 0)||(strpos($message, "!cmds") === 0)||(strpos($message, ".cmds") === 0))
{
  sendChatAction($chatId,"type");
  $cmd = urlencode("
⌬ 𝗖𝗖 𝗖𝗛𝗘𝗖𝗞𝗘𝗥 𝗚𝗔𝗧𝗘𝗦 

➥ /chk - For Check The cc
➥ /mass - MASS Check CC And Charge
➥ /sk - Check Your SK key
➥ /msk - Mass Check Your SK Key
➥ /gen - Gen Cards

⌬ 𝗨𝗦𝗘𝗥 𝗖𝗢𝗠𝗠𝗔𝗡𝗗𝗦

➥ /redeem - REDEEM CREDITS

➥ /credits - CHECK CREDITS

⌬ 𝗔𝗗𝗠𝗜𝗡 𝗖𝗢𝗠𝗠𝗔𝗡𝗗𝗦

➥  /adm

𝗕𝗢𝗧 𝗕𝗬 - ElectraOp
");
  reply_to($chatId,$cmd,$messageId);
}

?>
