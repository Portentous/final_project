<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

if ($iphone || $android || $palmpre || $ipod || $berry == true) 
{ 
echo "<script>window.location='http://csci303.ricksphp.com/greenhalgh/final_project/index.html'</script>";
}
?>
</head>

<body>


<h2>You are using a non mobile browser, please switch to a mobile browser</h2>

<h4>Or click <a href="index.html">here</a> to view the mobile page anyway</h4>
</body>
</html>
