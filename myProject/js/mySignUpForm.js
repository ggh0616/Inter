$(function() {
    //아이디 중복 확인 소스
    var memberIdCheck = $('.memberIdCheck');
    var memberId = $('.memberId');
    var memberIdComment = $('.memberIdComment');
    var memberPw = $('.memberPw');
    var memberPw2 = $('.memberPw2');
    var memberPw2Comment = $('.memberPw2Comment');
    var memberNickName = $('.memberNickName');
    var memberNickNameComment = $('.memberNickNameComment');
    var memberEmailAddress = $('.memberEmailAddress');
    var memberEmailAddressComment = $('.memberEmailAddressComment');
    var memberBirthDay = $('.memberBirthDay');
    var memberBirthDayComment = $('.memberBirthDayComment');
    var idCheck = $('.idCheck');
    var pwCheck2 = $('.pwCheck2');
    var eMailCheck = $('.eMailCheck');

    memberIdCheck.click(function() {
        console.log(memberId.val());
        $.ajax({ //새로고침X
            type: 'post', //post 타입으로 전송(id)
            dataType: 'json',
            url: '../member/memberIdCheck.php',
            data: {memberId: memberId.val()}, //memberId = id 공간에 있는 값 val() 값을 가져오거나 설정하는 함수
            success: function (json) {
                if (json.res == 'good') {
                    console.log(json.res);
                    memberIdComment.text('사용가능한 아이디 입니다.');
                    idCheck.val('1');
                } else {
                    memberIdComment.text('다른 아이디를 입력해 주세요.');
                    memberId.focus();
                }
            },
            error: function(){
              console.log('failed');
            }
        });
    });

    //비밀번호 동일 한지 체크
    memberPw2.blur(function(){ //Pw2를 확인하고 떠날 때 이벤트 발생
       if(memberPw.val() == memberPw2.val()){ //Pw 와 Pw2가 일치할 때
           memberPw2Comment.text('비밀번호가 일치합니다.');
           pwCheck2.val('1');
       } else {
           memberPw2Comment.text('비밀번호가 일치하지 않습니다.');
       }
    });

    //이메일 유효성 검사
    memberEmailAddress.blur(function(){ //이메일 입력란을 떠났을 때 이벤트 발생
        var regex=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/; //정규식을 통해 제대로 입력했는지 검사하는 식
        if (regex.test(memberEmailAddress.val()) === false) {
            memberEmailAddressComment.text('이메일이 유효성에 맞지 않습니다.');
            eMailCheck.val('1');
        } else {
            memberEmailAddressComment.text('올바른 이메일 입니다.');

        }
    });
});

function checkSubmit(){
    var idCheck = $('.idCheck');
    var pwCheck2 = $('.pwCheck2');
    var eMailCheck = $('.eMailCheck');
    var memberBirthDay = $('.memberBirthDay');
    var memberNickName = $('.memberNickName');
    var memberName = $('.memberName');

    if (idCheck.val() == '1') {
        res = true;
    } else {
        res = false;
    }
    if (pwCheck2.val() == '1') {
        res = true;
    } else {
        res = false;
    }
    if (eMailCheck.val() == '1') {
        res = true;
    } else {
        res = false;
    }
    if (memberName.val() != '') {
        res = true;
    } else {
        res = false;
    }
    if (memberBirthDay.val() != '') {
        res = true;
    } else {
        res = false;
    }
    if (memberNickName.val() != '') {
        res = true;
    } else {
        res = false;
    }
    if (res == false) {
        alert('회원가입 폼을 정확히 채워 주세요.');
    }
    return res;
}
