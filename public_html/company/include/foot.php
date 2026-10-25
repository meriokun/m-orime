<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>        
<script>
window.addEventListener('scroll', function () {
  const fixedHeader = document.querySelector('.fixed-header');

  if (window.scrollY >= 400) {
    fixedHeader.classList.add('is-show');
  } else {
    fixedHeader.classList.remove('is-show');
  }
});    
</script>  
<script>        
// スマホ時のみ、スクロールで半透明化
window.addEventListener('scroll', function () {
  const header = document.querySelector('.header');

  if (window.innerWidth <= 991) {
    if (window.scrollY > 10) {
      header.classList.add('is-scrolled');
    } else {
      header.classList.remove('is-scrolled');
    }
  } else {
    header.classList.remove('is-scrolled');
  }
});        
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const questions = document.querySelectorAll('.wte_question');

  questions.forEach(question => {
    question.addEventListener('click', function () {
      const faqBox = this.closest('.faqbox');
      faqBox.classList.toggle('active');
    });
  });
});
</script>


<div class="wte_footer_btn" id="footCta">
  <a href="#contact">
    <img src="img/img_cta.png" alt="無料体験レッスンはこちら" class="img-fluid">
  </a>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const cta = document.getElementById('footCta');
  const showPosition = 500; // 500pxスクロールしたら表示

  window.addEventListener('scroll', function () {
    if (window.scrollY > showPosition) {
      cta.classList.add('show');
    } else {
      cta.classList.remove('show');
    }
  });
});
</script>

<!-- jQuery (未読み込みの場合のみ) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
$(function () {
  $.getJSON('https://m-orime.site/blog/wp-json/wp/v2/posts?_embed&per_page=3', function(posts) {

    let html = '';

    posts.forEach(function(post) {
      let image = '';

      if (
        post._embedded &&
        post._embedded['wp:featuredmedia'] &&
        post._embedded['wp:featuredmedia'][0]
      ) {
        image = post._embedded['wp:featuredmedia'][0].source_url;
      } else {
        image = 'https://via.placeholder.com/600x400?text=No+Image';
      }

      const date = new Date(post.date);
      const formattedDate =
        date.getFullYear() + '.' +
        ('0' + (date.getMonth() + 1)).slice(-2) + '.' +
        ('0' + date.getDate()).slice(-2);

      const title = $('<div>').html(post.title.rendered).text();

      html += `
        <div class="col-md-4 mb-4">
          <a href="${post.link}" target="_blank" rel="noopener" class="text-decoration-none text-dark">
            <div class="card h-100 shadow-sm border-0">
              <img src="${image}" class="card-img-top" alt="${title}">
              <div class="card-body">
                <p class="small text-muted mb-2">${formattedDate}</p>
                <h5 class="card-title mb-0">${title}</h5>
              </div>
            </div>
          </a>
        </div>
      `;
    });

    $('.owl-carousel-col').html('<div class="row">' + html + '</div>');
  }).fail(function() {
    console.error('記事の取得に失敗しました。');
  });
});
</script>