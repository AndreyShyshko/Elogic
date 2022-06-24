
define([
    'jquery',
    'niceSelect',
], function($) {
    'use strict';

    $.widget('Skeleton.sorter', {

        _create: function () {
            $(this.element).niceSelect();
        },
    });

    return $.Skeleton.sorter;
});
