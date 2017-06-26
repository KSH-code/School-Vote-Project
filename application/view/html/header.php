<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/font-nanum/1.0/nanumbarungothic/nanumbarungothic.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/hiun/NanumSquare/master/nanumsquare.css">
    <link rel="stylesheet" href="/static/style/common.css">
    <script src="/static/js/jquery.js"></script>
    <?php if (is_login()) { ?>
        <script src="/static/js/script.js"></script>
    <?php } else { ?>
        <script src="/static/js/login.js"></script>
    <?php } ?>
    <title>세명컴고 투표 시스템</title>
</head>
<body>
<div class="wrap">
    <div class="dialog">
        <div class="dialog_area">
            <img class="dialog_exit" src="/static/image/dialog_exit.png" alt="dialog_exit">
            <p class="dialog_title title_font">회장 후보 정보</p>
            <div class="dialog_info">
                <img class="dialog_vote_img" src="/static/image/vote_img.png" alt="vote_img">
                <div class="dialog_info_div">
                    <span class="dialog_vote_name title_font">문준수</span>
                    <span class="dialog_vote_grade title_font">3학년</span>
                    <p class="dialog_vote_idx title_font">기호 1</p>
                    <p class="dialog_vote_list title_font">공약목록</p>
                    <ul class="dialog_vote_ul">
                        <li class="title_font">공약 1 : 청소를 하겠습니다.</li>
                        <li class="title_font">공약 2 : 청소를 하겠습니다.</li>
                        <li class="title_font">공약 3 : 청소를 하겠습니다.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php if (is_login()) { ?>
    <header>
        <div class="layout">
            <img class="header_logo" src="/static/image/header_logo.png" alt="header_logo">
            <form action="/action/user/logout">
                <?php if (is_login()) { ?>
                    <input type="submit" class="title_font header_status" value="로그아웃">
                <?php } ?>
            </form>
        </div>
    </header>
<?php } ?>