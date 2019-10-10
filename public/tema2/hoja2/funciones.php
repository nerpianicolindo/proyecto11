<?php  

	function calcularDia($dia) {
		$a = $x%19;
		$b = $x%4;
		$c = $x%7;
		$d = (19*$a+24)%30;
		$e = (2*$b + 4*$c + 6*$d + 5) % 7;
		return $ret = 22 + $d +$e;
	}

	function ecuacion($a, $b, $c){
		$discriminante = $b * $b - 4 * $a * $c;
		if ($discriminante > 0){
			$sol1 = (-$b + sqrt($discriminante))/(2*a);
			$sol2 = (-$b - sqrt($discriminante))/(2*a);
			return $msg = 'x1 = ' . $sol1 . '<br/>';
			return $msg = 'x2 = ' . $sol2 . '<br/>';
		} elseif ($discriminante == 0){
			$sol1 = -$b / (2*$a);
			return $msg = 'x = ' . $sol1 . '<br/>';
		} else {
			$solReal = -$b / (2 * $a);
			$solImag = sqrt(-1 * $discriminante) / (2 * $a);
			return $msg = 'x1 = ' . round($solReal, 2) . ' + ' . round(abs($solImag),2) . 'i<br/>';
			return $msg = 'x2 = ' . round($solReal, 2) . ' - ' . round(abs($solImag),2) . 'i<br/>';
		}

	}


?>