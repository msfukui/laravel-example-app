<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
    <title>ユーザー登録フォーム</title>
</head>
<body>
<form name="registform" action="/register" method="post" id="registform">
    {{ csrf_field() }}
    <dl>
        <dt><label for="name">名前</label></dt>
        <dd><input type="text" name="name" size="30">
            <span>{{ $errors->first('name') }}</span></dd>
    </dl>
    <dl>
        <dt><label for="email">メールアドレス</label></dt>
        <dd><input type="email" name="email" size="30">
            <span>{{ $errors->first('email') }}</span></dd>
    </dl>
    <dl>
        <dt><label for="password">パスワード</label></dt>
        <dd><input type="password" name="password" size="30">
            <span>{{ $errors->first('password') }}</span></dd>
    </dl>
    <dl>
        <dt><label for="password_confirmation">パスワード（確認）</label></dt>
        <dd><input type="password" name="password_confirmation" size="30">
            <span>{{ $errors->first('password_confirmation') }}</span></dd>
    </dl>
    <button type="submit" name="action" value="send">送信</button>
</form>
</body>
</html>
