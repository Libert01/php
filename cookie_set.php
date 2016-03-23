<?php
setcookie("name","alan",time()+3600,"./cookie");
setcookie("passwd","123456",time()+3600,"./cookie");
setcookie("addr","深圳",time()+3600,"./cookie");

setcookie("passwd","",time()-2);
echo "update cookie success.";

?>