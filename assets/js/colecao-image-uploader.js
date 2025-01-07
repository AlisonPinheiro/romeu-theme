(function ($) {
  $(document).ready(function () {
    let frame;

    $("#upload-colecao-image").on("click", function (e) {
      e.preventDefault();

      // Abre o uploader se ele já estiver instanciado
      if (frame) {
        frame.open();
        return;
      }

      // Cria a instância do uploader
      frame = wp.media({
        title: "Selecione ou envie a imagem",
        button: {
          text: "Usar esta imagem",
        },
        multiple: false, // Apenas uma imagem
      });

      // Ao selecionar uma imagem
      frame.on("select", function () {
        const attachment = frame.state().get("selection").first().toJSON();
        $("#colecao_image").val(attachment.id);
        $("#colecao-image-preview").html(
          '<img src="' +
            attachment.sizes.thumbnail.url +
            '" style="max-width: 150px; height: auto;">'
        );
      });

      frame.open();
    });

    // Botão para remover a imagem
    $("#remove-colecao-image").on("click", function (e) {
      e.preventDefault();
      $("#colecao_image").val("");
      $("#colecao-image-preview").html("");
    });
  });
})(jQuery);
