<html>
<body>
<p>Hello, this is a PHP page that processes the data sent</p>
Hello
<?php
echo $_POST['firstname'];
?>

<?php
echo $_POST['lastname'];
?>
<br>

Your email address is:
<?php
echo $_POST['emailaddress'];
?>
<br>

Subject:
<?php
echo $_POST['subject'];
?>
</body>
</html>