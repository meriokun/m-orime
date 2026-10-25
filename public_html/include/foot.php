<script>
document.addEventListener('DOMContentLoaded', function () {
  const header = document.getElementById('site-header');
  const scrollPoint = 500;

  // ページ読み込み時のスクロール位置を判定
  function toggleHeader() {
    if (window.scrollY > scrollPoint) {
      // 500px以上スクロールしたら表示
      header.classList.add('is-fixed');
      header.classList.remove('is-hidden');
    } else {
      // 500px未満では通常表示（消さない）
      header.classList.remove('is-fixed');
      header.classList.remove('is-hidden');
    }
  }

  // 初回実行
  toggleHeader();

  // スクロール時
  window.addEventListener('scroll', toggleHeader);
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
