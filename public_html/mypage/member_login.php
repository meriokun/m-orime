<?php
session_start();

// ログイン済みならダッシュボードへ
if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
    header('Location: dist/index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>ログイン | UI Sample</title>

<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">

<!-- Font Awesome -->
<link rel="stylesheet" href="dist/fontawesome-free/css/all.min.css">

<!-- Bootstrap Icons -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
/>

<!-- AdminLTE -->
<link rel="stylesheet" href="dist/css/adminlte.css">    
    
<!-- AdminLTE -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<link rel="stylesheet" href="dist/css/adminlte.css">

</head>

<body class="login-page bg-orange">

<div class="login-box">

    <div class="login-logo">
        <img src="dist/assets/img/logo_orange_full.png" alt="Logo" style="max-width:220px;" class="mb-2">
        <br>

    </div>

    <div class="card">

        <div class="card-body login-card-body">
            <h3 class="text-center">メンバーログイン</h3>
            <p class="login-box-msg">
                <small>ログイン情報を入力してください</small>
            </p>

            <?php if (isset($_GET['error'])): ?>
                <div class="alert alert-danger">
                    メールアドレスまたはパスワードが違います。
                </div>
            <?php endif; ?>

            <form action="auth.php" method="post">

                <div class="input-group mb-3">

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="メールアドレス"
                        required>

                    <span class="input-group-text">
                        <i class="bi bi-envelope"></i>
                    </span>

                </div>

                <div class="input-group mb-3">

                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="パスワード"
                        required>

                    <span class="input-group-text">
                        <i class="bi bi-lock"></i>
                    </span>

                </div>

                <div class="text-center">    
                    <button type="submit" class="btn btn-primary btn-block">
                        ログイン
                    </button>
                </div>

            </form>

            <hr>

            <div class="text-center">
                <small class="text-muted">
                    ポートフォリオ用サンプルアカウント
                </small>

                <table class="table table-sm mt-2">
                    <tr>
                        <th><small>メール</small></th>
                        <td><small>sample@example.com</small></td>
                    </tr>
                    <tr>
                        <th><small>パスワード</small></th>
                        <td><small>password123</small></td>
                    </tr>
                </table>
            </div>

        </div>

    </div>

</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>