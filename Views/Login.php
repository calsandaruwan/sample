<html>
<head>
    <title>Items</title>
</head>
<body>
<h1><?= $title ?></h1>
<form method="post">
    <table width="25%" border="0" cellpadding="3" cellspacing="0">
        <tr>
            <td>Email </td>
            <td><input type="email" name="post[email]"> </td>
        </tr>
        <tr>
            <td>Password </td>
            <td><input type="password" name="post[password]"> </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit"> </td>
        </tr>
    </table>
</form>
</body>
</html>