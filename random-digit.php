<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <title>random-digit</title>
</head>
<body>

<?php
// $digits = 4;
// $result= rand(pow(10, $digits-1), pow(10, $digits)-1);
// echo $result;
function generateRandomString($length = 5) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

echo  generateRandomString();  // OR: generateRandomString(24)



?>

<!-- <p id="fourdigit"></p>
<script>
var fourdigitsrandom = Math.floor(1000 + Math.random() * 9000);
document.getElementById("fourdigit").innerHTML=fourdigitsrandom; -->
<!-- // alert(fourdigitsrandom); -->
<!-- </script> -->
    
</body>
</html>