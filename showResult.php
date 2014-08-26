<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<title>我们都好虐心~</title>
</head>

<body background="img/bg-result.png" >
    <?php
        include "mysql_connect.php";
        $result = mysql_query("SELECT * FROM count");
	?> 
    <div class="container">
    	<center><img src="img/title.png" width="300px"/></center>
    <?php
	    echo '<table class="table table-bordered">';
		echo '<tr><th>记录</th><th>虐心次数</th></tr>';
        while ($row = mysql_fetch_array($result))
        {
			echo '<tr>';
            echo '<td>'.$row['name'].'</td>'.'<td>'.$row['mycount'].'</td>';
            echo "</tr>";
        }
	?>

</body>
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
</html>