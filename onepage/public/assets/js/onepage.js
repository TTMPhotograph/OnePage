$(function() {
    window.addEventListener('load', function() {
        counttext();
        counttitle();
        console.log($(this));
    });
    $('#content').bind('keydown keyup keypress change', function() {
        counttext();
    });
    $('#title').bind('keydown keyup keypress change', function() {
        counttitle();
    });

    function counttext() {
        var contentVal = $('#content').val();
        var thisValueLength = contentVal.replace(/\s+/g, '').length;
        $('.count').html(thisValueLength);
    };

    function counttitle() {
        var thisValueLength = $('#title').val().replace(/\s+/g, '').length;
        $('.counttitle').html(thisValueLength);
    };
});
$('#delete').click(function() {
    if (!confirm('本当に削除しますか？一度消すと復活できません。')) {
        /* キャンセルの時の処理 */
        return false;
    } else {
        /*　OKの時の処理 */
        location.href = 'index.html';
    }
});
$('#username').click(function() {
    $('#username').css('display', 'none');
    $('#username-edit')
        .val($('#username').text())
        .css('display', '')
        .focus();
});
$('#username-edit').blur(function() {
    $('#username-edit').css('display', 'none');
    $('#username')
        .text($('#username-edit').val())
        .css('display', '');
});