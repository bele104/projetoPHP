<?php 


$populaçao=1;
$homens=0;

$mulheres=0;
while ($populaçao>=5) {
	$populaçao++;
	
	echo "voce e homem digite 1 ou se voce e mulher digite 2 ";
	$resposta=1;
	if ($resposta==1){
		$homens++;
		echo "qual e o seu peso";
		$pesoHomens=80;
		echo "qual a sua idade";
		$idadeHomens=80;
		echo "qual a sua autura";
		$alturaHomens=80;
		print($homens."ja resposderam");
	}
	else{
		$mulheres++;
		echo "qual e o seu peso moça";
		$pesoMulheres=55;
		echo "qual a sua idade moça";
		$idadeMulheres=55;
		echo "qual a sua autura moça";
		$alturaMulheres=55;
		print($mulheres."ja resposderam");
	}

}





 ?>