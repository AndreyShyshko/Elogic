
define([
    'jquery'
], function ($) {
    $('.increment').click(function () {
        $('.qty-default').val(Number($('.qty-default').val()) + 1);
    });

    $('.decrement').click(function () {
        var value = Number($('.qty-default').val()) - 1;
        if (value > 0) {
            $('.qty-default').val(value);
        }
    });
});
