<script>
document.addEventListener('DOMContentLoaded', function() {

  const targets = document.querySelectorAll('.home-section');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.classList.add('show');
      }
    });
  }, {
    threshold: 0.15
  });

  targets.forEach(target => {
    observer.observe(target);
  });

});
</script>