<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Bingo</title>
<style>
body {
	font-family:Arial, Helvetica, sans-serif;
	color:#008000;
}

.geral {
	font-size:20px;
}

td #bingo {
	font-size:24px;
	color:#000;
}

.texto {
	border:0px solid #000;
	height:30px;
}
</style>
</head>

<body>

<?php

$inicio = 1;
$cartelas = 200;
$colunas = 5;

$numero = 25;
$limite = 75;

$largurcartela = 55;
$alturacartela = 40;

$meio = false;

// nao mude
$numerosB = range(1,15);
$numerosI = range(16,30);
$numerosN = range(31,45);
$numerosG = range(46,60);
$numerosO = range(61,75);

$cartelas_ = array();
srand((float)microtime() * 1000000);

for($x=0; $x<$cartelas; $x++) {
	echo '<br /><table class="geral" style="width:770px; border-right:0px dotted #000; background-image:url(fundo.jpg)">';
	echo '	<tr><td style="width:300px">';
	
	printf("Nº DA CARTELA: <b>%003d</b>", $inicio);
	$inicio++;
	
	echo '	</td>';
	echo '	<td style="width:470px; text-align:center"><div style="font-size:22px"><b>COLABORE COM O CAMALEÃO DO SUL</b></div>';
	echo '	</td></tr>';
	echo '	<tr><td>';
	
	echo '<table id="bingo" cellpadding="0" cellspacing="0" style="width:96%; text-align:center; border:1px solid #000">';
	echo '<tr>';
	echo '	<td style="height:'.$alturacartela.'px; border-bottom:1px solid #000; border-top:1px solid #000; border-left:1px solid #000"><b>B</b></td>';
	echo '	<td style="border-bottom:1px solid #000; border-top:1px solid #000"><b>I</b></td>';
	echo '	<td style="border-bottom:1px solid #000; border-top:1px solid #000"><b>N</b></td>';
	echo '	<td style="border-bottom:1px solid #000; border-top:1px solid #000"><b>G</b></td>';
	echo '	<td style="border-bottom:1px solid #000; border-top:1px solid #000; border-right:1px solid #000"><b>O</b></td>';
	echo '</tr><tr>';
	echo '<td style="text-align:center; width:'.$largurcartela.'px; border:1px solid #000; height:'.$alturacartela.'px">';
	
	// bagunça
	shuffle($numerosB);
	shuffle($numerosI);
	shuffle($numerosN);
	shuffle($numerosG);
	shuffle($numerosO);
	
	// pega os 5 primeiros números
	for ($i=0; $i<5; $i++) {
		$numeros1[$i] = $numerosB[$i];
		$numeros2[$i] = $numerosI[$i];
		$numeros3[$i] = $numerosN[$i];
		$numeros4[$i] = $numerosG[$i];
		$numeros5[$i] = $numerosO[$i];
	}
	
	// ordena
	sort($numeros1);
	sort($numeros2);
	sort($numeros3);
	sort($numeros4);
	sort($numeros5);
	$cont = 1;

	$i = 0;
	for($y=0; $y<$numero; $y++) {	
		if (($cont == 1) or ($cont == 6) or ($cont == 11) or ($cont == 16) or ($cont == 21)) {
			// COLUNA B
			$cur_num = $numeros1[$i];
			echo $cur_num;
		}
		else if (($cont == 2) or ($cont == 7) or ($cont == 12) or ($cont == 17) or ($cont == 22)) {
			// COLUNA I
			$cur_num = $numeros2[$i];
			echo $cur_num;
		}
		else if (($cont == 3) or ($cont == 8) or ($cont == 13) or ($cont == 18) or ($cont == 23)) {
			// COLUNA N
			if (($meio) and ($cont == 13)) {
				echo "§";
			}
			else {
				$cur_num = $numeros3[$i];
				echo $cur_num;
			}
		}
		else if (($cont == 4) or ($cont == 9) or ($cont == 14) or ($cont == 19) or ($cont == 24)) {
			// COLUNA G
			$cur_num = $numeros4[$i];
			echo $cur_num;
		}
		else if (($cont == 5) or ($cont == 10) or ($cont == 15) or ($cont == 20) or ($cont == 25)) {
			// COLUNA O
			$cur_num = $numeros5[$i];
			echo $cur_num;
		}
	 	 	
		if(($cont % $colunas == 0) and ($y < 24)) {
			echo "</td></tr><tr><td style='text-align:center; width:".$largurcartela."px; border:1px solid #000; height:".$alturacartela."px'>\n";
			$i++;
		}
		else if ($y < 24) echo "</td><td style='text-align:center; width:".$largurcartela."px; border:1px solid #000; height:".$alturacartela."px'>";
		
		$cont++; 
	}
		
	echo '		</table>';	
	echo '	</td>';
	echo '	<td style="text-align:center; vertical-align:top">GURUPI ESPORTE CLUBE<div class="texto" style="margin-top:20px">SORTEIO DIA 01/04/2006 ÀS 19 HORAS</div><div class="texto" style="margin-top:10px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRÊMIO: 01 HONDA BIZ C100 - 0 KM</div><div class="texto" style="margin-top:15px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOCAL: ESTÁDIO RESENDÃO</div><div class="texto" style="margin-top:15px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VALOR: R$ 100,00</div><div style="font-size:14px; margin-top:15px">Evite contratempos! Chegue com antecedência e leve caneta!</div>';
	echo '	</td></tr>';	
	echo '</table>';
	echo '<br />';
	echo '<div style="width:770px; border-top:2px dotted #000"></div>';
}

?>

</body>
</html>