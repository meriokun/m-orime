<?php
/**
 * セッション開始
 */
session_start();

/**
 * ログインチェック
 */
if (
    !isset($_SESSION['login']) ||
    $_SESSION['login'] !== true
) {
    header('Location: member_login.php');
    exit;
}
?>