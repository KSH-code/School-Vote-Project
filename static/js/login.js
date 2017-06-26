$(function() {
    $('.login_submit').click(function() {
        var id = $('.login_id').val();
        var pw = $('.login_pw').val();
        $.post('/ajax/user/login',{'id' : id, 'pw' : pw},function(result) {
            var result = $.parseJSON(result);
            if(result['result']) {
                //login success
                alert("소중한 한표 부탁드려요!");
            }else {
                //login failed
                alert("아이디 또는 비밀번호를 확인해주세요");
            }
        })
    })
});