<?php if (is_login()) { ?>
    <div class="vote">
        <div class="vote_list vote_president">
            <p class="vote_title title_font">회장 선거</p>
            <div class="vote_area">
                <img class="vote_img vote_president_img" data-idx="0" src="/static/image/vote_img.png" alt="vote_img">
                <p class="vote_name content_font">기호 1 : 문준수</p>
                <p class="vote_grade content_font">3학년</p>
                <button class="vote_submit content_font">기호 정보</button>
            </div>
            <div class="vote_area">
                <img class="vote_img vote_president_img" data-idx="0" src="/static/image/vote_img.png" alt="vote_img">
                <p class="vote_name content_font">기호 1 : 문준수</p>
                <p class="vote_grade content_font">3학년</p>
                <button class="vote_submit content_font">기호 정보</button>
            </div>
            <div class="vote_area">
                <img class="vote_img vote_president_img" data-idx="0" src="/static/image/vote_img.png" alt="vote_img">
                <p class="vote_name content_font">기호 1 : 문준수</p>
                <p class="vote_grade content_font">3학년</p>
                <button class="vote_submit content_font">기호 정보</button>
            </div>
            <div class="vote_area">
                <img class="vote_img vote_president_img" data-idx="0" src="/static/image/vote_img.png" alt="vote_img">
                <p class="vote_name content_font">기호 1 : 문준수</p>
                <p class="vote_grade content_font">3학년</p>
                <button class="vote_submit content_font">기호 정보</button>
            </div>
            <div class="vote_area">
                <img class="vote_img vote_president_img" data-idx="0" src="/static/image/vote_img.png" alt="vote_img">
                <p class="vote_name content_font">기호 1 : 문준수</p>
                <p class="vote_grade content_font">3학년</p>
                <button class="vote_submit content_font">기호 정보</button>
            </div>
        </div>
        <div class="vote_list vote_vice_president">
            <p class="vote_title title_font">부회장 선거</p>
            <div class="vote_area">
                <img class="vote_img vote_vice_president_img" data-idx="0" src="/static/image/vote_img.png"
                     alt="vote_img">
                <p class="vote_name content_font">기호 1 : 문준수</p>
                <p class="vote_grade content_font">3학년</p>
                <button class="vote_submit content_font">기호 정보</button>
            </div>
            <div class="vote_area">
                <img class="vote_img vote_vice_president_img" data-idx="0" src="/static/image/vote_img.png"
                     alt="vote_img">
                <p class="vote_name content_font">기호 1 : 문준수</p>
                <p class="vote_grade content_font">3학년</p>
                <button class="vote_submit content_font">기호 정보</button>
            </div>
            <div class="vote_area">
                <img class="vote_img vote_vice_president_img" data-idx="0" src="/static/image/vote_img.png"
                     alt="vote_img">
                <p class="vote_name content_font">기호 1 : 문준수</p>
                <p class="vote_grade content_font">3학년</p>
                <button class="vote_submit content_font">기호 정보</button>
            </div>
            <div class="vote_area">
                <img class="vote_img vote_vice_president_img" data-idx="0" src="/static/image/vote_img.png"
                     alt="vote_img">
                <p class="vote_name content_font">기호 1 : 문준수</p>
                <p class="vote_grade content_font">3학년</p>
                <button class="vote_submit content_font">기호 정보</button>
            </div>
            <div class="vote_area">
                <img class="vote_img vote_vice_president_img" data-idx="0" src="/static/image/vote_img.png"
                     alt="vote_img">
                <p class="vote_name content_font">기호 1 : 문준수</p>
                <p class="vote_grade content_font">3학년</p>
                <button class="vote_submit content_font">기호 정보</button>
            </div>
        </div>
        <button class="vote_last_submit">
            투표
        </button>
    </div>
<?php } else { ?>
    <div class="login">
        <img class="login_img" src="/static/image/login_back.png" alt="login_back">
        <div class="login_opa"></div>
        <div class="login_box">
            <img class="login_logo" src="/static/image/login_logo.png" alt="login_logo">
            <input class="login_id login_input content_font" type="text" placeholder="아이디">
            <input class="login_pw login_input content_font" type="password" placeholder="비밀번호">
            <button class="login_submit content_font">로그인</button>
            <a href="#" class="login_findpw content_font">비밀번호 찾기</a>
        </div>
    </div>
<?php } ?>
