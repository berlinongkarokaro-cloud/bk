document.addEventListener("DOMContentLoaded", function () {
  const burgerBtn = document.querySelector('[data-widget="pushmenu"]');
  const body = document.body;

  if (burgerBtn) {
    burgerBtn.addEventListener("click", function (e) {
      e.preventDefault();

      // toggle class untuk sidebar-mini
      if (body.classList.contains("sidebar-open")) {
        body.classList.remove("sidebar-open");
        body.classList.add("sidebar-collapse");
      } else {
        body.classList.remove("sidebar-collapse");
        body.classList.add("sidebar-open");
      }
    });
  }
});
