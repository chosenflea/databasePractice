<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>





<form action="processCreateAccount.php" method = 'POST'>
<fieldset>
<legend>Create Login:</legend>
User Name: <br>
<input type="text" name="usrnm" value="User Name">
<br>
Password:<br>
<input type="text" name="psswrd" value="Password">
<br><br>
<input type="submit" value="Submit"></fieldset>
</form>
 
<form action="processLogin.php" method = 'POST'>
<fieldset>
<legend>Login:</legend>
User Name: <br>
<input type="text" name="usrnm" value="User Name">
<br>
Password:<br>
<input type="text" name="psswrd" value="Password">
<br><br>
<input type="submit" value="Submit"></fieldset>
</form>

    </body>
</html>