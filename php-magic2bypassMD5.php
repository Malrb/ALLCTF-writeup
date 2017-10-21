<?php
// 在 php 中， == 只有比較 “值"，但是 === 會連類型也一起比較
// 而有趣的一點是，在 php 中，會把 md5 0E 開頭的 hash value 都當成 0 <- 0e科學記號=0
// 接著看到 username="sena" 的那筆資料，發現他的密碼是 0E 開頭
// 所以我只要找到一組 string 經過 md5 hashing 後會是 0E 就行了
// 於是我找到了 240610708 這組 magic number 丟進去就拿到 flag 了XD
#Original result: 0e959146861158620914280512624073
$result = "0e111111111111111111111111111111"; //Test string
echo $result . "<br>";
$ano = md5("240610708"); //Magic number to bomb
echo $ano . "<br>";
if($ano == $result){ // == verify the value
	echo "Success"; // <<< get the Success
}else{
	echo "Faild";
}
?>
