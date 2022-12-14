<?php
function print_author()
{
	echo "Група: СНс-41.<br>";
	echo "ПІП: Саган Олександр Анатолійович.<br>";
	echo "Дата створення: 2022/09/11.<br>";
	echo "Поточна дата: ".date("Y/m/d").".<br>";
}

function y($a, $b, $c, $x)
{
	return $a**2 * $b**3 + $c**3 * $x + (tan($x**2))**3 + M_E**min($a, $b);
}

function div_conf($i)
{
	$variant = 37;
	$width = 3 * $variant;
	$height = 5 * $variant;
	
	return $div_configuration = [
	"width" => $width + 10 * $i,
	"height" => $height + 5 * $i,
	"background" => "rgb(".($variant * 1 + 7 * $i).", ".($variant * 3 + 7 * $i).", ".($variant * 1 + 7 * $i).")",
	"bordercolor" => "rgb(".($variant * 1 + 7 * $i).", ".($variant * 1 + 7 * $i).", ".($variant * 3 + 7 * $i).")"
	];
}

function print_y_res_div($i, $a, $b, $c, $x)
{
	$dconf = div_conf($i);
	echo "<div style='
	border:10px solid ".$dconf["bordercolor"].";
	width: ".$dconf["width"].";
	height: ".$dconf["height"].";
	background: ".$dconf["background"]."'>";
	echo y($a, $b, $c, $x)."</div>";
}

$a = [1, 3, 5, 7, 9, 11, 13, 15, 17, 19];
$b = [2, 6, 10, 14, 18, 22, 26, 30, 34, 38];
$c = [5, 3, 1, 7, 4, 9, 5, 8, 15, 10];
$x = [3, 7, 10, 5, 6, 9, 6, 7, 9, 5];

print_author();
echo "<img src='formula.png'><br>";

for ($i = 0; $i < sizeof($a); $i++):
print_y_res_div($i, $a[$i], $b[$i], $c[$i], $x[$i]);
endfor;
