$(function(){
    $('#content').bind('keydown keyup keypress change',function(){
        var thisValueLength = $(this).val().replace(/\s+/g,'').length;
        $('.count').html(thisValueLength);
    });
       $('#title').bind('keydown keyup keypress change',function(){
        var thisValueLength = $(this).val().replace(/\s+/g,'').length;
        $('.counttitle').html(thisValueLength);
    });
});