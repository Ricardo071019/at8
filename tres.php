<?php

$nota = 10;
switch (true) {
	case ($nota <=8);
	echo 'O Aluno Reprovou';
	break;

	case($nota >=8 && $nota <=9.4);
	echo ' O Aluno foi admitido a Exame';
	break;

	case ($nota >=9.5 && $nota <=20);
	echo ' O Aluno Aprovou';
	break;


	}
?>
