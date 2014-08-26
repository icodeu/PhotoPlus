<?PHP
header("Content-type:image/jpeg");
$name = $_GET['name'];
$i = $_GET['i'];
$font = $_GET['font'];
function mark_text($background, $text, $x, $y, $size, $font) {
	$back = imagecreatefromjpeg($background);
	$color = imagecolorallocate($back, 255, 255, 255);
	if ($font == "fangzheng")
		imagettftext($back, $size, 0, $x, $y, $color, "./font/fangzheng.ttf", $text);
	else if ($font == "quti")
		imagettftext($back, $size, 0, $x, $y, $color, "./font/quti.ttf", $text);
	else if ($font == "yafang")
		imagettftext($back, $size, 0, $x, $y, $color, "./font/jinmei.ttf", $text);
	else if ($font == "yaya")
		imagettftext($back, $size, 0, $x, $y, $color, "./font/yaya.ttf", $text);
	imagejpeg($back, NULL, 100);
	imagedestroy($back);
}

$reg = '/[a-z]/is';
// 定义包含非字母格式
$alpha_flag = preg_match($reg, $name) ? 1 : 0;
//纯字母输出1

if ($font == "fangzheng") {
	if ($alpha_flag == 1) {//纯字母情况
		if (strlen($name) == 1)
			mark_text("./img/photo" . $i . ".jpeg", $name, 375, 145, 120, $font);
		else if (strlen($name) == 2)
			mark_text("./img/photo" . $i . ".jpeg", $name, 350, 135, 90, $font);
		else if (strlen($name) == 3)
			mark_text("./img/photo" . $i . ".jpeg", $name, 340, 125, 65, $font);
		else if (strlen($name) == 4)
			mark_text("./img/photo" . $i . ".jpeg", $name, 338, 115, 50, $font);
	} else if (is_numeric($name)) {
		if (strlen($name) == 1)
			mark_text("./img/photo" . $i . ".jpeg", $name, 375, 145, 120, $font);
		else if (strlen($name) == 2)
			mark_text("./img/photo" . $i . ".jpeg", $name, 350, 135, 90, $font);
		else if (strlen($name) == 3)
			mark_text("./img/photo" . $i . ".jpeg", $name, 340, 125, 65, $font);
		else if (strlen($name) == 4)
			mark_text("./img/photo" . $i . ".jpeg", $name, 338, 115, 50, $font);
	} else {
		if (strlen($name) == 3)
			mark_text("./img/photo" . $i . ".jpeg", $name, 355, 145, 110, $font);
		else if (strlen($name) == 6)//此种情况为汉字 每个汉字3个字符长度
			mark_text("./img/photo" . $i . ".jpeg", $name, 355, 115, 50, $font);
		else if (strlen($name) == 9)//此种情况为汉字 每个汉字3个字符长度
			mark_text("./img/photo" . $i . ".jpeg", $name, 345, 115, 40, $font);
	}
}
else if($font=="quti"){
	if ($alpha_flag == 1) {//纯字母情况
		if (strlen($name) == 1)
			mark_text("./img/photo" . $i . ".jpeg", $name, 375, 145, 120, $font);
		else if (strlen($name) == 2)
			mark_text("./img/photo" . $i . ".jpeg", $name, 350, 135, 90, $font);
		else if (strlen($name) == 3)
			mark_text("./img/photo" . $i . ".jpeg", $name, 340, 125, 65, $font);
		else if (strlen($name) == 4)
			mark_text("./img/photo" . $i . ".jpeg", $name, 338, 115, 50, $font);
	} else if (is_numeric($name)) {
		if (strlen($name) == 1)
			mark_text("./img/photo" . $i . ".jpeg", $name, 380, 145, 120, $font);
		else if (strlen($name) == 2)
			mark_text("./img/photo" . $i . ".jpeg", $name, 370, 135, 90, $font);
		else if (strlen($name) == 3)
			mark_text("./img/photo" . $i . ".jpeg", $name, 360, 125, 65, $font);
		else if (strlen($name) == 4)
			mark_text("./img/photo" . $i . ".jpeg", $name, 360, 115, 50, $font);
	} else {
		if (strlen($name) == 3)
			mark_text("./img/photo" . $i . ".jpeg", $name, 355, 145, 110, $font);
		else if (strlen($name) == 6)//此种情况为汉字 每个汉字3个字符长度
			mark_text("./img/photo" . $i . ".jpeg", $name, 355, 115, 50, $font);
		else if (strlen($name) == 9)//此种情况为汉字 每个汉字3个字符长度
			mark_text("./img/photo" . $i . ".jpeg", $name, 345, 115, 40, $font);
	}
}
else if($font=="yafang"){
	if ($alpha_flag == 1) {//纯字母情况
		if (strlen($name) == 1)
			mark_text("./img/photo" . $i . ".jpeg", $name, 375, 145, 120, $font);
		else if (strlen($name) == 2)
			mark_text("./img/photo" . $i . ".jpeg", $name, 350, 135, 90, $font);
		else if (strlen($name) == 3)
			mark_text("./img/photo" . $i . ".jpeg", $name, 340, 125, 65, $font);
		else if (strlen($name) == 4)
			mark_text("./img/photo" . $i . ".jpeg", $name, 338, 115, 50, $font);
	} else if (is_numeric($name)) {
		if (strlen($name) == 1)
			mark_text("./img/photo" . $i . ".jpeg", $name, 380, 145, 120, $font);
		else if (strlen($name) == 2)
			mark_text("./img/photo" . $i . ".jpeg", $name, 370, 135, 90, $font);
		else if (strlen($name) == 3)
			mark_text("./img/photo" . $i . ".jpeg", $name, 360, 125, 65, $font);
		else if (strlen($name) == 4)
			mark_text("./img/photo" . $i . ".jpeg", $name, 360, 115, 50, $font);
	} else {
		if (strlen($name) == 3)
			mark_text("./img/photo" . $i . ".jpeg", $name, 355, 145, 110, $font);
		else if (strlen($name) == 6)//此种情况为汉字 每个汉字3个字符长度
			mark_text("./img/photo" . $i . ".jpeg", $name, 355, 115, 50, $font);
		else if (strlen($name) == 9)//此种情况为汉字 每个汉字3个字符长度
			mark_text("./img/photo" . $i . ".jpeg", $name, 345, 115, 40, $font);
	}
}
else if($font=="yaya"){
	if ($alpha_flag == 1) {//纯字母情况
		if (strlen($name) == 1)
			mark_text("./img/photo" . $i . ".jpeg", $name, 375, 145, 120, $font);
		else if (strlen($name) == 2)
			mark_text("./img/photo" . $i . ".jpeg", $name, 350, 135, 90, $font);
		else if (strlen($name) == 3)
			mark_text("./img/photo" . $i . ".jpeg", $name, 340, 125, 65, $font);
		else if (strlen($name) == 4)
			mark_text("./img/photo" . $i . ".jpeg", $name, 338, 115, 50, $font);
	} else if (is_numeric($name)) {
		if (strlen($name) == 1)
			mark_text("./img/photo" . $i . ".jpeg", $name, 380, 145, 120, $font);
		else if (strlen($name) == 2)
			mark_text("./img/photo" . $i . ".jpeg", $name, 370, 135, 90, $font);
		else if (strlen($name) == 3)
			mark_text("./img/photo" . $i . ".jpeg", $name, 360, 125, 65, $font);
		else if (strlen($name) == 4)
			mark_text("./img/photo" . $i . ".jpeg", $name, 360, 115, 50, $font);
	} else {
		if (strlen($name) == 3)
			mark_text("./img/photo" . $i . ".jpeg", $name, 355, 145, 110, $font);
		else if (strlen($name) == 6)//此种情况为汉字 每个汉字3个字符长度
			mark_text("./img/photo" . $i . ".jpeg", $name, 355, 115, 50, $font);
		else if (strlen($name) == 9)//此种情况为汉字 每个汉字3个字符长度
			mark_text("./img/photo" . $i . ".jpeg", $name, 345, 115, 40, $font);
	}
}
?>