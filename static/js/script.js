$(function () {
    $('.dialog_exit').click(function () {
        $('.dialog').fadeOut();
        $('.input_dialog').fadeOut();
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
    $('.vote_add_area').click(function (e) {
        $('.input_dialog').fadeIn();
    })
    var ext = [".png", "jpeg", ".jpg"];
    $('.input_dialog_img').change(function () {
            var filePath = $(this).val();
            var fileExt = filePath.substr(filePath.length - 4, filePath.length);
            var fileBool = false;
            $.each(ext, function (index, value) {
                if (value === fileExt) {
                    fileBool = true;
                    return false;
                }
            })
            if (fileBool) {
                var file = $(this)[0].files[0];
                reader = new FileReader();
                reader.onload = function (event) {
                    $('.dialog_vote_img').attr('src', event.target.result);
                    //ajax로 한다면 여기서 하삼
                };
                reader.readAsDataURL(file);
            }
            else {
                alert("유효한 확장자를 입력하세요!");
            }
        }
    )
    $('.vote_president_img').click(function () {
        if ($(this).parent().attr('class') !== "vote_add_area vote_area") {
            $('.vote_president .vote_select_img').remove();
            voting_list['president'] = $(this).data('idx');
            $(this).before("<img class='vote_select_img' src='/static/image/vote_select_img.png'>");
        }
    });
    $('.vote_vice_president_img').click(function () {
        if ($(this).parent().attr('class') !== "vote_add_area vote_area") {
            $('.vote_vice_president .vote_select_img').remove();
            voting_list['vice-president'] = $(this).data('idx');
            $(this).before("<img class='vote_select_img' src='/static/image/vote_select_img.png'>");
        }
    });
    $('.vote_last_submit').click(function () {
        var check = confirm("정말로 투표하시겠습니까?");
        if (check) {
            $.post('/ajax/vote/vote', {'voteData': voting_list}, function (result) {
                console.log(result);
            })
        }
    })
});