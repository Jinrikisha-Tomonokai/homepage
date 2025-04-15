<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "rikisha49@gmail.com"; // あなたのメールアドレスに変更
    $subject = "お問い合わせフォームからのメッセージ";

    $name = htmlspecialchars($_POST["name"], ENT_QUOTES);
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES);
    $message = htmlspecialchars($_POST["message"], ENT_QUOTES);

    $body = "名前: $name\nメール: $email\nメッセージ:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "メッセージが送信されました。";
    } else {
        echo "メッセージの送信に失敗しました。";
    }
}
?>