<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script type="text/javascript" href=""></script>
</head>
<body>
<?php 
echo '<pre>';
echo $GLOBALS[HTTP_SERVER_VARS]['HTTP_REFERER'];
print_r($GLOBALS);
?>
</body>
</html>