(function () {
  var root = document.documentElement.querySelector(".site");
  if (!root) return;

  var bannerKey = "ms-banner-hidden";
  if (window.sessionStorage && sessionStorage.getItem(bannerKey) === "1") {
    root.classList.add("is-banner-hidden");
  }

  var dismiss = root.querySelector("[data-dismiss-banner]");
  if (dismiss) {
    dismiss.addEventListener("click", function () {
      root.classList.add("is-banner-hidden");
      try {
        sessionStorage.setItem(bannerKey, "1");
      } catch (e) {}
    });
  }

  var toggle = root.querySelector("[data-menu-toggle]");
  if (toggle) {
    toggle.addEventListener("click", function () {
      var open = root.classList.toggle("is-nav-open");
      toggle.setAttribute("aria-expanded", open ? "true" : "false");
    });
  }
})();
