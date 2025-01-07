(function ($) {
  $(document).ready(function () {
    let frame;

    $("#upload_pdf_button").on("click", function (e) {
      e.preventDefault();

      // Abre o Media Uploader
      if (frame) {
        frame.open();
        return;
      }

      frame = wp.media({
        title: "Selecione ou envie o PDF",
        button: {
          text: "Usar este arquivo",
        },
        multiple: false, // Apenas um arquivo
      });

      frame.on("select", function () {
        const attachment = frame.state().get("selection").first().toJSON();
        $("#produto_pdf").val(attachment.url); // Define a URL do PDF no campo
      });

      frame.open();
    });
  });
})(jQuery);
