jQuery(document).ready(function ($) {
  const coresContainer = $("#cores-container");

  $(".add-cor").click(function (e) {
    e.preventDefault();
    const index = coresContainer.children(".cor-item").length;

    const novaCor = `
          <div class="cor-item">
              <p>
                  <label for="produto_cores[${index}][nome]"><strong>Nome da Cor:</strong></label>
                  <input type="text" name="produto_cores[${index}][nome]" class="widefat">
              </p>
              <p>
                  <label for="produto_cores[${index}][imagem]"><strong>Imagem:</strong></label>
                  <input type="text" name="produto_cores[${index}][imagem]" class="widefat">
                  <button type="button" class="button upload-cor-image">Selecionar Imagem</button>
              </p>
              <button type="button" class="button remove-cor">Remover Cor</button>
              <hr>
          </div>
      `;

    coresContainer.append(novaCor);
  });

  coresContainer.on("click", ".remove-cor", function (e) {
    e.preventDefault();
    $(this).closest(".cor-item").remove();
  });

  coresContainer.on("click", ".upload-cor-image", function (e) {
    e.preventDefault();
    const button = $(this);
    const input = button.prev("input");

    const mediaUploader = wp.media({
      title: "Selecionar Imagem",
      button: {
        text: "Usar esta imagem",
      },
      multiple: false,
    });

    mediaUploader.on("select", function () {
      const attachment = mediaUploader
        .state()
        .get("selection")
        .first()
        .toJSON();
      input.val(attachment.url);
    });

    mediaUploader.open();
  });
});
