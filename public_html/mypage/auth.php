<?php
session_start();

/**
 * サンプル用ログイン情報
 */
$login_email    = 'sample@example.com';
$login_password = 'password123';

/**
 * POSTデータ取得
 */
$email    = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

/**
 * 認証
 */
if ($email === $login_email && $password === $login_password) {

    // セッションへ保存
    $_SESSION['login'] = true;
    $_SESSION['member_id'] = '000001';
    $_SESSION['member_name'] = 'Masaki';
    $_SESSION['email'] = $login_email;
    $_SESSION['rank'] = 'プレミアム会員';
    $_SESSION['point'] = 3250;
    $_SESSION['lesson_count'] = 58;
    $_SESSION['study_time'] = 126;

    header('Location: member_login.php?error=1');
    exit;
}

/**
 * 認証失敗
 */
header('Location: login.php?error=1');
exit;
?>