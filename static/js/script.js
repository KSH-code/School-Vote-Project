$(function () {
    $('.dialog_exit').click(function () {
        $('.dialog').fadeOut();
    })
    $('.vote_submit').click(function () {
        $('.dialog').fadeIn();
        var title = $(this).parent(".vote_area").siblings(".vote_title").html();
        $('.dialog_title').html(title.substr(0,3)+" 후보 정보");

    })
})