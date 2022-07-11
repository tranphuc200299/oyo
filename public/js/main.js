"use strict";

(function(){
    WOW.prototype.addBox = function (element) {
        this.boxes.push(element);
    };
    var wow = new WOW({
        mobile: false
    });
    wow.init();

    // toastr option
    toastr.options = {
        closeButton: true,
        positionClass: 'toast-bottom-right',
        onclick: null,
        showDuration: 1000,
        hideDuration: 1000,
        timeOut: 10000,
        extendedTimeOut: 1000,
        showEasing: 'swing',
        hideEasing: 'linear',
        showMethod: 'fadeIn',
        hideMethod: 'fadeOut'

    };

}());
