<?php
$link = mysqli_connect('localhost', 'root', 'my_password', 'hoclaptrinh_org');
mysqli_set_charset($link, "utf8");

if(!$link){
    die('Không thể kết nối với database: ' . $mysqli_connect_errno($link));
}
