<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: cadetblue;
			 font-family: monospace;">
	<div style="border: 1px solid yellow;
			    background-color: antiquewhite;
			    max-width: 50%;
			    margin: 20px auto;
			    padding: 0 20px;">
<?php
$skip = '.html';
$files = scandir(__DIR__);
foreach($files as $file) {
    if(strpos($file, $skip))
        echo("<h3><a href=\"$file\">$file</a></h3>");
}
?>		
	</div>

</body>
</html>
