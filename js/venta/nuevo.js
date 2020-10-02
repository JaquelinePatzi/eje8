let fila = 0;
$(document).ready(() => {
    $("#aumentar").click((e) => {

        fila = fila + 1;
        e.preventDefault();
        $.post(base_url + "venta/fila", { 'fila': fila }, (data) => {
            $("#marca").before(data)
        });
    });


    $("#aumentar").click();

    // $(".id_producto").change(() => {

    $(document).on("change", '.id_producto', (e) => {
        let id_producto = $(e.target).val();
        let fila_seleccionada = $(e.target).attr("rel");
        $.post(base_url + "venta/mostrar", { 'id_producto': id_producto }, (data) => {

            $(".stock[rel=" + fila_seleccionada + "]").val(data.stock);
            $(".cantidad[rel=" + fila_seleccionada + "]").attr("max", data.stock);
            $(".precio[rel=" + fila_seleccionada + "]").val(data.precio);
            $(".imagen[rel=" + fila_seleccionada + "]").attr("src", base_url + "imagenes/productos/" + data.imagen);


        }, "json");
    });


    $(document).on("change", ".cantidad", (e) => {
        let fila_seleccionada = $(e.target).attr("rel");
        let cantidad = $(e.target).val();
        let precio = $(".precio[rel=" + fila_seleccionada + "]").val();
        let total = cantidad * precio;
        $(".total[rel=" + fila_seleccionada + "]").val(total.toFixed(2));
        sumarTotales();
    });


    $(document).on("change", "[name=cancelado]", (e) => {
        let totalGeneral = $("[name=totalgeneral]").val();
        let totalCancelado = $(e.target).val();
        let cambio = totalCancelado - totalGeneral;

        $("[name=cambio]").val(cambio.toFixed(2));
    });

    $(document).on("click", ".eliminar", (e) => {
        e.preventDefault();
        $(e.target).parent().parent().remove();


    });

});


function sumarTotales() {
    let totalG = 0;
    for (fila_seleccionada = 1; fila_seleccionada <= fila; fila_seleccionada++) {
        totalG = totalG + parseFloat($(".total[rel=" + fila_seleccionada + "]").val());
    }

    $("[name=totalgeneral]").val(totalG.toFixed(2));
}