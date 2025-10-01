<html>
<head>
<title>www.infopoint.com</title>
</head>
<body>
  <form method="POST">
    Enter your name : <input type="text" name="name">
    <input type="submit" name="submit">
  </form>
<?php

if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  echo "Hello $name";
}

?>
</body>
</html>
