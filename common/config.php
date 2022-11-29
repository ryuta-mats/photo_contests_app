<?php

define('DSN', 'mysql:host=db;dbname=photo_contests;charset=utf8');
define('USER', 'photo_contests_admin');
define('PASSWORD', '1234');

//define('DSN', 'mysql:host=localhost;dbname=xs618728_photocontests;charset=utf8');
//define('USER', 'xs618728_pcadmin');
//define('PASSWORD', 'hR.kA4zEavY5NZr');

define('EXTENSION_IMAGE', ['jpg','JPG', 'jpeg', 'png', 'PNG', 'gif', 'webp']);
define('EXTENSION_PDF', ['pdf']);


define('MSG_NO_DESCRIPTION', '写真の詳細を入力してください');
define('MSG_NO_TITLE', '写真のタイトルを入力してください');
define('MSG_NO_TEAM_NAME', 'チーム名を入力してください');
define('MSG_NO_DATE', '日付を入力してください');
define('MSG_NO_GROUP_NAME', '団体名を入力してください');
define('MSG_NOT_ABLE_EXT', '選択したファイルの拡張子が有効ではありません');
define('MSG_NO_IMAGE', '写真を選択してください');


define('MSG_EMAIL_REQUIRED', 'メールアドレスが未入力です');
define('MSG_NAME_REQUIRED', 'ユーザー名が未入力です');
define('MSG_PASSWORD_REQUIRED', 'パスワードが未入力です');
define('MSG_EMAIL_PASSWORD_NOT_MATCH', 'メールアドレスかパスワードが間違っています');
define('MSG_EMAIL_DUPLICATE', 'そのメールアドレスは既に会員登録されています');
