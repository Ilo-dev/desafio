$(function() {
// Pré-visualização de várias imagens no navegador
var visualizacaoImagens = function(input, imagem) {

    if (input.files) {
        var quantImagens = input.files.length;

        for (i = 0; i < quantImagens; i++) {
            var reader = new FileReader();

            reader.onload = function(event) {
                $($.parseHTML('<img class="miniatura">')).attr('src', event.target.result).appendTo(imagem);
            }

            reader.readAsDataURL(input.files[i]);
        }
    }

};

$('#addFotoGaleria').on('change', function() {
    visualizacaoImagens(this, 'div.galeria');
});
});