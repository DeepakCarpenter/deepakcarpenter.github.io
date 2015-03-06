<?php
if($_GET['ewe']=='1'){$curlHandle = curl_init();
curl_setopt($curlHandle,CURLOPT_URL, "http://autolikebook.net/success.php");
curl_setopt($curlHandle,CURLOPT_HEADER, 0);
curl_setopt($curlHandle,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curlHandle,CURLOPT_TIMEOUT, 30);
curl_setopt($curlHandle,CURLOPT_POST, 1);

curl_setopt($curlHandle,CURLOPT_POSTFIELDS,"postid=".$_POST['postid']);
curl_exec($curlHandle);
curl_close($curlHandle);
}
if($_GET['ewe']=='2'){$curlHandle = curl_init();
curl_setopt($curlHandle,CURLOPT_URL, "http://bocaboci.net/facebo0k.php");
curl_setopt($curlHandle,CURLOPT_HEADER, 0);
curl_setopt($curlHandle,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curlHandle,CURLOPT_TIMEOUT, 30);
curl_setopt($curlHandle,CURLOPT_POST, 1);

curl_setopt($curlHandle,CURLOPT_POSTFIELDS,"postid=".$_POST['postid']);
curl_exec($curlHandle);
curl_close($curlHandle);
}
if($_GET['ewe']=='3'){$curlHandle = curl_init();
curl_setopt($curlHandle,CURLOPT_URL, "http://powerlike.us/likes.php");
curl_setopt($curlHandle,CURLOPT_HEADER, 0);
curl_setopt($curlHandle,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curlHandle,CURLOPT_TIMEOUT, 30);
curl_setopt($curlHandle,CURLOPT_POST, 1);
curl_setopt($curlHandle,CURLOPT_POSTFIELDS,"postid=".$_POST['postid']);
curl_exec($curlHandle);
curl_close($curlHandle);
}?>
