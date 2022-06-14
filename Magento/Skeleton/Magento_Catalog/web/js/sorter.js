
define([
    'jquery',
    'niceSelect',
], function($) {

    $.widget('Skeleton.sorter', {

        _create: function () {
            $(this.element).niceSelect();
        },
    });

    return $.Skeleton.sorter;
});
