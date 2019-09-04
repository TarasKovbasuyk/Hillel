<?php include_once ('index.php');  ?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form method="POST">
    <p>Your Name / You can change</p>
    <input type="text" name="name" maxlength="50" autocomplete="on" placeholder="<?php echo $_SESSION['name'] ?>">
    <input type="submit">
    <p>Your Nickname / You can change</p>
    <input type="text" name="nickname" minlength="5" maxlength="50" autocomplete="on" placeholder="<?php echo $_SESSION['nickname'] ?>">
    <input type="submit">
    <p>Your E-Mail / You can change</p>
    <input type="text" name="email" maxlength="50" autocomplete="on"  placeholder="<?php echo $_SESSION['email'] ?>">
    <input type="submit">
    <p>Your Password / You can change</p>
    <input type="text" name="password" minlength="10" maxlength="50" autocomplete="on" placeholder="<?php echo $_SESSION['password'] ?>">
    <input type="submit">
</form>
</body>
</html>