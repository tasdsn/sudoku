<?php
// エラーを出力する
ini_set('display_errors', "On");

if (isset($_POST)) {
    var_dump($_POST['num']);
}