$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    autoplay: true,
    autoplayTimeout: 2200,
    nav: false,
    responsive: {
      0: {
        items: 1,
      },
      450: {
        items: 2,
      },
      700: {
        items: 3,
      },
      1200: {
        items: 4,
      },
    },
  });

  function updateButtonClass() {
    const button = document.getElementById("explore-button");
    if (window.innerWidth < 576) {
      button.classList.add("btn-sm");
    } else {
      button.classList.remove("btn-sm");
    }
  }

  // Initial check
  updateButtonClass();

  // Add event listener for window resize
  window.addEventListener("resize", updateButtonClass);
});
