$('.pls_qntity').on('click', function () {
    var quantity = $(this).data('pqnty');
    var product = $(this).data('pdctid');
    $.post('php/ajax.php', { plus: quantity, pid: product })
        .done(function (data) {
            console.log(data);
            // var form_wish = $("#form_wish");
            $('.mainCart').load('ct.php');
        });
});
$('.min_quantity').on('click', function () {
    var quantity = $(this).data('pqnty');
    var product = $(this).data('pdctid');
    $.post('php/ajax.php', { min: quantity, pid: product })
        .done(function (data) {
            console.log(data);
            $('.mainCart').load('ct.php');
        });
});
$('.cart_remove').on('click', function () {
    var pid = $(this).data('pid');
    $.post('php/ajax.php', { remove: pid })
        .done(function (data) {
            console.log(data);
            $('.mainCart').load('ct.php');
        });
});
$('.clear_all_cart').on('click', function () {
    $.post('php/ajax.php', { "clear_all_cart": 'clear_all_cart' })
        .done(function (data) {
            console.log(data);
            $('.mainCart').load('ct.php');
        });
});