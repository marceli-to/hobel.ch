// Hides the landing page claim when the right-column content would overlap it.
(function () {
  document.addEventListener('DOMContentLoaded', function () {
    const content = document.querySelector('[data-landing-content]');
    const claim = document.querySelector('[data-landing-claim]');
    if (!content || !claim) return;

    const mq = window.matchMedia('(min-width: 1024px)');
    const GAP = 24;

    function update() {
      claim.style.display = '';
      if (!mq.matches) return;

      const contentBottom = content.getBoundingClientRect().bottom;
      const claimTop = claim.getBoundingClientRect().top;

      if (contentBottom > claimTop - GAP) {
        claim.style.display = 'none';
      }
    }

    update();
    window.addEventListener('resize', update);
    window.addEventListener('load', update);
    if ('ResizeObserver' in window) new ResizeObserver(update).observe(content);
  });
})();
