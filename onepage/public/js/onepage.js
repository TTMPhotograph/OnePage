$(function() {
    window.addEventListener('load', function() {
        counttext();
        counttitle();
    });
    $('#content').bind('keydown keyup keypress change', function() {
        counttext();
    });
    $('#title').bind('keydown keyup keypress change', function() {
        counttitle();
    });

    function counttext() {
        var thisValueLength = $('#content').val().replace(/\s+/g, '').length;
        $('.count').html(thisValueLength);
    };

    function counttitle() {
        var thisValueLength = $('#title').val().replace(/\s+/g, '').length;
        $('.counttitle').html(thisValueLength);
    };
});