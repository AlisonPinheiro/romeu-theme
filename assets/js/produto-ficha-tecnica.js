jQuery(document).ready(function ($) {
  const fichaTecnicaContainer = $("#ficha-tecnica-container");

  $(".add-ficha-tecnica").click(function (e) {
    e.preventDefault();
    const index = fichaTecnicaContainer.children(".ficha-tecnica-item").length;

    const novoCampo = `
          <div class="ficha-tecnica-item" style="margin-bottom: 10px;">
              <p>
                  <label for="produto_ficha_tecnica[${index}][nome]"><strong>Nome do Campo:</strong></label>
                  <input type="text" name="produto_ficha_tecnica[${index}][nome]" class="widefat">
              </p>
              <p>
                  <label for="produto_ficha_tecnica[${index}][valor]"><strong>Conteúdo do Campo:</strong></label>
                  <input type="text" name="produto_ficha_tecnica[${index}][valor]" class="widefat">
              </p>
              <button type="button" class="button remove-ficha-tecnica">Remover Campo</button>
          </div>
          <hr style="margin-top: 20px;">
      `;

    fichaTecnicaContainer.append(novoCampo);
  });

  fichaTecnicaContainer.on("click", ".remove-ficha-tecnica", function (e) {
    e.preventDefault();
    $(this).closest(".ficha-tecnica-item").remove();
  });
});
