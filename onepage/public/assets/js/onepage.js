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
$('#delete').click(function(){
    if(!confirm('本当に削除しますか？一度消すと復活できません。')){
        /* キャンセルの時の処理 */
        return false;
    }else{
        /*　OKの時の処理 */
        location.href = 'index.html';
    }
});