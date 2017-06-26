$(function() {
    $('.login_submit').click(function() {
        var id = $('.login_id').val();
        var pw = $('.login_id').val();
        $.post('/ajax/user/login',{'id' : id, 'pw' : pw},function(result) {
            console.log(result);
        })
    })
});