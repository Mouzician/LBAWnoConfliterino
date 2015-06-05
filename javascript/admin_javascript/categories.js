var categoria_arr = new Array("Informática", "Imagem e Som", "Comunicações");

// States
var s_a = new Array();
s_a[0] = "";
s_a[1] = "Computadores|Tablets|Periféricos|Acessórios Informática|Armazenamento";
s_a[2] = "Televisões|Audio|Foto e Vídeo";
s_a[3] = "Telemóveis|GPS|Acessórios Telemóvel";

function populateSubCategories(categoriaElementId, subCategoriaElementId) {

    var selectedCategoriaIndex = document.getElementById(categoriaElementId).selectedIndex;

    var subCategoriaElement = document.getElementById(subCategoriaElementId);

    subCategoriaElement.length = 0; // Fixed by Julian Woods
    subCategoriaElement.options[0] = new Option('Selecione SubCategoria', '');
    subCategoriaElement.selectedIndex = 0;

    var subCategoria_arr = s_a[selectedCategoriaIndex].split("|");

    for (var i = 0; i < subCategoria_arr.length; i++) {
        subCategoriaElement.options[subCategoriaElement.length] = new Option(subCategoria_arr[i], subCategoria_arr[i]);
    }
}

function populateCategories(categoriaElementId, subCategoriaElementId) {
    // given the id of the <select> tag as function argument, it inserts <option> tagssa
    var categoriaElement = document.getElementById(categoriaElementId);
    categoriaElement.length = 0;
    categoriaElement.options[0] = new Option('Selecione Categoria', '-1');
    categoriaElement.selectedIndex = 0;
    for (var i = 0; i < categoria_arr.length; i++) {
        categoriaElement.options[categoriaElement.length] = new Option(categoria_arr[i], categoria_arr[i]);
    }

    // Assigned all categorias. Now assign event listener for the subCategorias.

    if (subCategoriaElementId) {
        categoriaElement.onchange = function () {
            populateSubCategories(categoriaElementId, subCategoriaElementId);
        };
    }
}