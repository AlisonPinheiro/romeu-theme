// Código customizado para interações com jQuery
jQuery(document).ready(function ($) {
  const slides = document.querySelector(".slides");
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

  document.addEventListener("DOMContentLoaded", function () {
    Fancybox.bind("[data-fancybox='gallery']", {
      infinite: true, // Permite rolar as imagens infinitamente
      Toolbar: {
        display: ["close"], // Exibe o botão de fechar
      },
      Thumbs: {
        autoStart: true, // Exibe miniaturas na navegação
      },
    });
  });
});
