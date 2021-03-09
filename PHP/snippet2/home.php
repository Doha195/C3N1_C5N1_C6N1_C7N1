<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>mar7aban bikom</h1>
    <form action="home.php" method="POST">
    <a href='index.php?Logout=true'><span>Logout</span></a>
    </form>
</body>
</html>

<?php
if(isset($_POST['Logout']))
{
if($_POST['Logout']==true)
{
session_unset();
header("location:index.php");
}
}

?>