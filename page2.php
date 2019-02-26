<?php
    $cust_name=htmllentities($_POST['cust_name']);
	$cust_email=htmllentities($_POST['cust_email']);
?>

<html>

<head>
<title>Multi-page Form - Page Two</title>
</head>
<body>
<p>Please fill in the following information</p>

<form method="post" action="final.php">

 Address:<input type="text" Size="50" Name="cust_address"><br/>
 Phone:<input type="text" Size="20" Name="cust_phone"><br/>
  <input type="hidden" Name="cust_name" value="<?php echo $cust_name;?>">
  <input type="hidden" Name="cust_email" value="<?php echo $cust_email;?>">
  <input type="submit" Name="submit2" value="proceed">
</form>
</body>
</html>

  
