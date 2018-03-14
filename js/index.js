$(document).ready(function () {
    $('.store-item').click( function (e) {
        e.preventDefault();
        var target = $(this).data('target');
        window.location.href = window.location.origin + "/store.php?tip=" + target;
    });
});

