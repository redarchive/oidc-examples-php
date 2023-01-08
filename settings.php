<?php

// 클라이언트 ID: 발급은 https://center.gbsw.hs.kr 에서 로그인 후 신규등록!
$CLIENT_ID = "bf9b982b-96f3-4a47-96d5-e2b6324b4e8f";

// 받아올 개인정보 목록: 사용 가능한 목록 참고 -> https://github.com/redarchive/center-oidc/wiki/%ED%86%B5%ED%95%A9%EB%A1%9C%EA%B7%B8%EC%9D%B8%EC%8B%9C%EC%8A%A4%ED%85%9C-%EC%82%AC%EC%9A%A9%EB%B2%95#scope-%ED%85%8C%EC%9D%B4%EB%B8%94
$SCOPES = "openid real_name class_info";

// 리다이렉트 주소: 등록시 입력한 주소 사용!
$REDIRECT_URI = "http://localhost:3000/callback.php";

// 로그인 주소
$LOGIN_URL =
  "https://center.gbsw.hs.kr/login" .
    "?client_id=" . $CLIENT_ID .
    "&redirect_uri=" . $REDIRECT_URI .
    "&scope=" . $SCOPES .
    "&state=1234" .
    "&nonce=1234" .
    "&response_type=id_token";
