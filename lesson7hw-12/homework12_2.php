<?php
if (!empty($_POST['name'])) {
    $userName = $_POST['name'];
} else {
    $userName = $_COOKIE['activeUserName'];
}
$userNameCookie = str_replace(' ', '', $userName);
if (!empty($userName)) {
    $userCount = (isset($_COOKIE[$userNameCookie])) ? $_COOKIE[$userNameCookie] : 0;
    $userCount++;
    setcookie($userNameCookie, $userCount);
    setcookie('activeUserName', $userNameCookie);
    echo "$userName у Вас уже $userCount обновление";
}
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form method="POST">
    <p> Напишите свое имя</p>
    <input type="text" name="name" maxlength="50" autocomplete="on" placeholder="<?php echo "$userName" ?>">
    <input type="submit">
</form>
</body>
</html>



