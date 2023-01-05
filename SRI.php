<?php
$id = rand(1, 24);
$url = "https://cdn.jsdelivr.net/gh/hyc1230/Chtholly-img/ ($id).jfif";
header("location:$url");
die;
?>