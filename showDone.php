<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<title>
			【新Anyone+头像】+1头像你们很火是嘛，大哥头像是Anyone+的！
		</title>
	</head>
	<body background="img/bg.PNG">
		<div class="container">
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert">
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
				<strong>***</strong> 长按随便免费下载啦，喜欢就分享至朋友圈
			</div>
			<div class="jumbotron">
				<h1>
					I am “Anyone+”
				</h1>
				<p style="font-size:15px ;">
					近来+1和99+很是嚣张，坑害了不少小伙伴，这次坑的再彻底点，完全自定义！
				</p>
				<p>
					<center>
						<form action="index.php">
							<button class="btn btn-primary btn-lg">
								返回首页分享至朋友圈
							</button>
						</form>
					</center>
				</p>
			</div>
			<?php
			//提交数据库做数据处理
			include "mysql_connect.php";
			$name = $_GET['name'];
			$result = mysql_query("SELECT * FROM count where name=" . "$name");
			
			if($result!=false){
				//数据库不存在该条记录，需要新添加
				if (!mysql_fetch_array($result)) {
					$name = $_GET['name'];
					$sql = "INSERT INTO count (name) VALUES('$name')";
					mysql_query($sql) or die(mysql_error());
					//echo "不存在，第一次添加";
				} else {
					//数据库里已有记录，做+1处理
					//echo "已有记录";
					$result = mysql_query("SELECT * FROM count where name=" . "$name") or die(mysql_error());
					$row = mysql_fetch_array($result);
					$new_number = $row['mycount'] + 1;
					mysql_query("UPDATE count SET mycount = " . $new_number . " WHERE name = " . $row['name']);
				}
			}
			?>
			<?php
			$name = $_GET['name'];
			$font = $_GET['font'];
			for ($i = 1; $i <= 35; $i++) {
				echo '<center><img src="generate.php?name=' . $name . '&i=' . $i . '&font=' . $font . '" width="200px"/></center>';
				echo '<br/>';
			}
			?>
			<br />
			<br />
			<center><img src="img/vke.jpg" width="300px"/></center>
			<hr />
			<div class="jumbotron">
				<h1>
					I am “Anyone+”
				</h1>
				<p style="font-size:15px ;">
					已坑到页面底部
				</p>
				<p>
					<form action="index.php">
						<button class="btn btn-primary btn-lg">
							返回首页分享至朋友圈
						</button>
					</form>
				</p>
			</div>
		</div>
	</body>
</html>