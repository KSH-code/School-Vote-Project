$(function () {
    $('.dialog_exit').click(function () {
        $('.dialog').fadeOut();
    });
    $('.vote_submit').click(function () {
        $('.dialog').fadeIn();
        var title = $(this).parent(".vote_area").siblings(".vote_title").html();
        $('.dialog_title').html(title.substr(0, 3) + " 후보 정보");
    });
    $('.vote_president_img').click(function() {
        $('.vote_president .vote_select_img').remove();
        $(this).before("<img class='vote_select_img' src='/static/image/vote_select_img.png'>");
    });
    $('.vote_vice_president_img').click(function() {
        $('.vote_vice_president .vote_select_img').remove();
        $(this).before("<img class='vote_select_img' src='/static/image/vote_select_img.png'>");
    });
});