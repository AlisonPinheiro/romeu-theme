// Código customizado para interações com jQuery
jQuery(document).ready(function ($) {
  const bannerTvHome = () => {
    const slides = document.querySelector(".slides");
    if (slides === null) return;
    const slideWidth = slides.children[0].offsetWidth;
    let currentIndex = 0;

    document.querySelector(".prev").addEventListener("click", () => {
      currentIndex =
        currentIndex > 0 ? currentIndex - 1 : slides.children.length - 1;
      slides.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    });

    document.querySelector(".next").addEventListener("click", () => {
      currentIndex =
        currentIndex < slides.children.length - 1 ? currentIndex + 1 : 0;
      slides.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    });
  };

  const fancyboxInitial = () => {
    Fancybox.bind("[data-fancybox='gallery']", {
      infinite: true,
      Thumbs: false,
      Toolbar: true,
    });
  };
  $(document).ready(() => {
    fancyboxInitial();
    bannerTvHome();
  });
});
