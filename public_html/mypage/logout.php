<?php
session_start();

// セッション情報を空にする
$_SESSION = [];

// セッションを破棄
session_destroy();

// ログイン画面へ戻る
header('Location: member_login.php');
exit;