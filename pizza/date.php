<html>
<body>
<form action="method"="POST">
Birth date=<input type="date" name="n1">
<input type="submit" name="submit" value="Submit">
</form>
<?php
if(is_set ($_POST['submit'])){
$birth=$_POST["n1"];
$current=date("d-m-Y");
$age=date_diff(date_create($birth),date_create($current));
echo "age"=" $age-> format("%y");
}
?>
</body>
</html>