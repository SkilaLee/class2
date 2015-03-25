<?php 
header("Content-Type: text/html; charset=UTF-8");
class D2{
	static public $pi = 3.14;
	//参数说明:
	//$pi 圆周率
	// $area 面积
	// $girth 周长
	// $surface 表面积
	// $bulk 体积
	public $area = NULL;
	public $girth = NULL;
	public $surface = NULL;
	public $bulk = NULL;

	public function circle($r) {
	 	$pi = self::$pi;        //访问静态常量
		$area = $pi*$r*$r;
		$girth = 2*$pi*$r;
		echo "the circle's area(面积) is  ".$area."<br>";
		echo "the circle's girth(周长) is  ".$girth."<br>";
	}
	public function square($r){
		$area = $r*$r;
		$girth = 4*$r;
		echo "the square's area(面积) is  ".$area."<br>";
		echo "the square's girth(周长) is  ".$girth."<br>";
	}

}
class D3 extends D2{
	public function ball($r){
		$pi = self::$pi;
		$bulk = 4*$pi*$r*$r*$r/3;
		$surface = 4*$pi*$r*$r;
		echo "the ball's bulk(体积) is  ".$bulk."<br>";
		echo "the ball's surface(表面积) is  ".$surface."<br>";
		echo "the ball's section(切面):<br>";
		parent::circle($r);
	}
	public function cube($r){
		$bulk = $r*$r*$r;
		$surface = 6*$r*$r;
		echo "the cube's bulk(体积) is  ".$bulk."<br>";
		echo "the cube's surface(表面积) is  ".$surface."<br>";
		echo "the cube's a side(面):<br>";
		parent::square($r);
	}
}


$D2 = new D2();
$D3 = new D3();
$shape = $_POST['type'];
$r = $_POST['side'];
switch ($shape) {
	case 0:
		$D2->square($r);
		break;
	case 1:
		$D3->cube($r);
		break;
	case 2:
		$D2->circle($r);
		break;
	case 3:
		$D3->ball($r);
		break;
	
	default:
		# code...
		break;
}
echo "开始没有转换字符集....所以...";
 ?>