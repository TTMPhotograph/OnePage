$(function() {
    $(window).bind('load', function() {
        if ($('#write').length) {
            counttitle();
            counttext();
        }
    });
    $('#content').bind('load keydown keyup keypress change', function() {
        counttext();
    });
    $('#title').bind('load keydown keyup keypress change', function() {
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
// 特定の要素が完全に読み込み終了したら発動
$('form').bind("load", function(event) {

    alert('jQuery');
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
$('#user').click(function() {
    $('.username').css('display', 'none');
    $('#username-edit')
        .val($('.username').text())
        .css('display', '')
        .focus();
});
$('#username-edit').blur(function() {
    $('#username-edit').css('display', 'none');
    inputVal = $('#username-edit').val();
    if (inputVal === '') {
        inputVal = $('.username').text();
    };
    $('#username-update').submit();
    $('.username').text(inputVal).css('display', '');
});
$('#username-edit').keypress(function(e) {
    if (e.which == 13) {
        $('#username-edit').css('display', 'none');
        $('.username')
            .text($('#username-edit').val())
            .css('display', '');
    }
});