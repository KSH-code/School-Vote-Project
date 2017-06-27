$(function () {
    $('.dialog_exit').click(function () {
        $('.dialog').fadeOut();
    });
    $('.vote_submit').click(function () {
        $('.dialog').fadeIn();
        var title = $(this).parent(".vote_area").siblings(".vote_title").html();
        $('.dialog_title').html(title.substr(0, 3) + " 후보 정보");
    });
    var voting_list = {
        'president': -1,
        'vice-president': -1
    };
    $('.vote_president_img').click(function () {
        $('.vote_president .vote_select_img').remove();
        voting_list['president'] = $(this).data('idx');
        console.log(voting_list);
        $(this).before("<img class='vote_select_img' src='/static/image/vote_select_img.png'>");
    });
    $('.vote_vice_president_img').click(function () {
        $('.vote_vice_president .vote_select_img').remove();
        voting_list['vice-president'] = $(this).data('idx');
        console.log(voting_list);
        $(this).before("<img class='vote_select_img' src='/static/image/vote_select_img.png'>");
    });
    $('.vote_last_submit').click(function () {
        if(voting_list['president'] != -1 && voting_list['president'] != -1) {
            var check = confirm("정말로 투표하시겠습니까?");
            if (check) {
                $.post('/ajax/vote/vote', {}, function () {

                })
            } else {

            }
        }
    })
});