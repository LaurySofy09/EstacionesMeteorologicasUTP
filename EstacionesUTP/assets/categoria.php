<?php
	$I_low = 0;
	$I_high = 0;
	$C_low = 0;
	$C_high = 0;
	if (@$pag == 1) {
		switch ($row['NOMENCLATURA']) {
			case 'O3':
				if ($row['PROMEDIO'] < 125) {
					$mensaje = "No es posible definir indices de calidad de aire con promedios de una hora menores a 125 para este agente, escoja promedios de 8 horas en su lugar";
				}
				elseif (($row['PROMEDIO'] >= 125) && ($row['PROMEDIO'] <= 164)) {
					$I_low = 101;
					$I_high = 150;
					$C_low = 125;
					$C_high = 164;
				}
				elseif (($row['PROMEDIO'] >= 165) && ($row['PROMEDIO'] <= 204)) {
					$I_low = 151;
					$I_high = 200;
					$C_low = 165;
					$C_high = 204;
				}
				elseif (($row['PROMEDIO'] >= 205) && ($row['PROMEDIO'] <= 404)) {
					$I_low = 201;
					$I_high = 300;
					$C_low = 205;
					$C_high = 404;
				}
				elseif (($row['PROMEDIO'] >= 405) && ($row['PROMEDIO'] <= 504)) {
					$I_low = 301;
					$I_high = 400;
					$C_low = 405;
					$C_high = 504;
				}
				elseif (($row['PROMEDIO'] >= 505) && ($row['PROMEDIO'] <= 604)) {
					$I_low = 401;
					$I_high = 500;
					$C_low = 505;
					$C_high = 604;
				}
				break;
			case 'SO2':
				if (($row['PROMEDIO'] >= 0) && ($row['PROMEDIO'] <= 35)) {
					$I_low = 0;
					$I_high = 50;
					$C_low = 0;
					$C_high = 35;
				}
				elseif (($row['PROMEDIO'] >= 36) && ($row['PROMEDIO'] <= 75)) {
					$I_low = 51;
					$I_high = 100;
					$C_low = 36;
					$C_high = 75;
				}
				elseif (($row['PROMEDIO'] >= 76) && ($row['PROMEDIO'] <= 185)) {
					$I_low = 101;
					$I_high = 150;
					$C_low = 76;
					$C_high = 185;
				}
				elseif (($row['PROMEDIO'] >= 186) && ($row['PROMEDIO'] <= 304)) {
					$I_low = 151;
					$I_high = 200;
					$C_low = 186;
					$C_high = 304;
				}
				else
				{
					$mensaje = "No es posible definir indices de calidad de aire con promedios de una hora mayores a 304 para este agente, escoja promedios de 24 horas en su lugar";
				}
				break;
			case 'NO2':
				if (($row['PROMEDIO'] >= 0) AND ($row['PROMEDIO'] <= 53)) {
					$I_low = 0;
					$I_high = 50;
					$C_low = 0;
					$C_high = 53;
				}
				elseif (($row['PROMEDIO'] >= 54) AND ($row['PROMEDIO'] <= 100)) {
					$I_low = 51;
					$I_high = 100;
					$C_low = 54;
					$C_high = 100;
				}
				elseif (($row['PROMEDIO'] >= 101) AND ($row['PROMEDIO'] <= 360)) {
					$I_low = 101;
					$I_high = 150;
					$C_low = 101;
					$C_high = 360;
				}
				elseif (($row['PROMEDIO'] >= 361) AND ($row['PROMEDIO'] <= 649)) {
					$I_low = 151;
					$I_high = 200;
					$C_low = 361;
					$C_high = 649;
				}
				elseif (($row['PROMEDIO'] >= 650) AND ($row['PROMEDIO'] <= 1249)) {
					$I_low = 201;
					$I_high = 300;
					$C_low = 650;
					$C_high = 1249;
				}
				elseif (($row['PROMEDIO'] >= 1250) AND ($row['PROMEDIO'] <= 1649)) {
					$I_low = 301;
					$I_high = 400;
					$C_low = 1250;
					$C_high = 1649;
				}
				elseif (($row['PROMEDIO'] >= 1650) AND ($row['PROMEDIO'] <= 2049)) {
					$I_low = 401;
					$I_high = 500;
					$C_low = 1650;
					$C_high = 2049;
				}
				break;
			default:
				$mensaje = "No es posible definir indices de calidad de aire con promedios de una hora para este agente, escoja promedios con otro rango de hora";
				break;
		}
	}
	elseif (@$pag == 2) {
		switch ($row['NOMENCLATURA']) {
			case 'O3':
				if (($row['PROMEDIO'] >= 0) && ($row['PROMEDIO'] <= 54)) {
					$I_low = 0;
					$I_high = 50;
					$C_low = 0;
					$C_high = 54;
				}
				elseif (($row['PROMEDIO'] >= 55) && ($row['PROMEDIO'] <= 70)) {
					$I_low = 51;
					$I_high = 100;
					$C_low = 55;
					$C_high = 70;
				}
				elseif (($row['PROMEDIO'] >= 71) && ($row['PROMEDIO'] <= 85)) {
					$I_low = 101;
					$I_high = 150;
					$C_low = 71;
					$C_high = 85;
				}
				elseif (($row['PROMEDIO'] >= 86) && ($row['PROMEDIO'] <= 105)) {
					$I_low = 151;
					$I_high = 200;
					$C_low = 86;
					$C_high = 105;
				}
				elseif (($row['PROMEDIO'] >= 106) && ($row['PROMEDIO'] <= 200)) {
					$I_low = 201;
					$I_high = 300;
					$C_low = 106;
					$C_high = 200;
				}
				else
				{
					$mensaje = "No es posible definir indices de calidad de aire con promedios de una hora mayores a 200 para este agente, escoja promedios de 1 hora en su lugar";
				}
				break;
			case 'CO':
				if (($row['PROMEDIO'] >= 0) AND ($row['PROMEDIO'] <= 4.4)) {
					$I_low = 0;
					$I_high = 50;
					$C_low = 0;
					$C_high = 4.4;
				}
				elseif (($row['PROMEDIO'] >= 4.5) AND ($row['PROMEDIO'] <= 9.4)) {
					$I_low = 51;
					$I_high = 100;
					$C_low = 4.5;
					$C_high = 9.4;
				}
				elseif (($row['PROMEDIO'] >= 9.5) AND ($row['PROMEDIO'] <= 12.4)) {
					$I_low = 101;
					$I_high = 150;
					$C_low = 9.5;
					$C_high = 12.4;
				}
				elseif (($row['PROMEDIO'] >= 12.5) AND ($row['PROMEDIO'] <= 15.4)) {
					$I_low = 151;
					$I_high = 200;
					$C_low = 12.5;
					$C_high = 15.4;
				}
				elseif (($row['PROMEDIO'] >= 15.5) AND ($row['PROMEDIO'] <= 30.4)) {
					$I_low = 201;
					$I_high = 300;
					$C_low = 15.5;
					$C_high = 30.4;
				}
				elseif (($row['PROMEDIO'] >= 30.5) AND ($row['PROMEDIO'] <= 40.4)) {
					$I_low = 301;
					$I_high = 400;
					$C_low = 30.5;
					$C_high = 40.4;
				}
				elseif (($row['PROMEDIO'] >= 40.5) AND ($row['PROMEDIO'] <= 50.4)) {
					$I_low = 401;
					$I_high = 500;
					$C_low = 40.5;
					$C_high = 50.4;
				}
				else
				{
					$I_low = 401;
					$I_high = 500;
					$C_low = 40.5;
					$C_high = 50.4;
				}
				break;
			default:
				$mensaje = "No es posible definir indices de calidad de aire con promedios de una hora para este agente, escoja promedios con otro rango de hora";
				break;
		}		
	}
	elseif(@$pag == 3)
	{
		switch ($row['NOMENCLATURA']) {
			case 'PM10':
				if (($row['PROMEDIO'] >= 0) AND ($row['PROMEDIO'] <= 54)) {
					$I_low = 0;
					$I_high = 50;
					$C_low = 0;
					$C_high = 54;
				}
				elseif (($row['PROMEDIO'] >= 55) AND ($row['PROMEDIO'] <= 154)) {
					$I_low = 51;
					$I_high = 100;
					$C_low = 55;
					$C_high = 154;
				}
				elseif (($row['PROMEDIO'] >= 155) AND ($row['PROMEDIO'] <= 254)) {
					$I_low = 101;
					$I_high = 150;
					$C_low = 155;
					$C_high = 254;
				}
				elseif (($row['PROMEDIO'] >= 255) AND ($row['PROMEDIO'] <= 354)) {
					$I_low = 151;
					$I_high = 200;
					$C_low = 255;
					$C_high = 354;
				}
				elseif (($row['PROMEDIO'] >= 355) AND ($row['PROMEDIO'] <= 424)) {
					$I_low = 201;
					$I_high = 300;
					$C_low = 355;
					$C_high = 424;
				}
				elseif (($row['PROMEDIO'] >= 425) AND ($row['PROMEDIO'] <= 504)) {
					$I_low = 301;
					$I_high = 400;
					$C_low = 425;
					$C_high = 504;
				}
				elseif (($row['PROMEDIO'] >= 505) AND ($row['PROMEDIO'] <= 604)) {
					$I_low = 401;
					$I_high = 500;
					$C_low = 505;
					$C_high = 604;
				}
				break;
			case 'SO2':
				if ($row['PROMEDIO'] < 305) {
					$mensaje = "No es posible definir indices de calidad de aire con promedios de una hora menores a 305 para este agente, escoja promedios de 1 hora en su lugar";
				}
				elseif (($row['PROMEDIO'] >= 305) && ($row['PROMEDIO'] <= 604)) {
					$I_low = 0;
					$I_high = 50;
					$C_low = 305;
					$C_high = 604;
				}
				elseif (($row['PROMEDIO'] >= 605) && ($row['PROMEDIO'] <= 804)) {
					$I_low = 51;
					$I_high = 100;
					$C_low = 605;
					$C_high = 804;
				}
				elseif (($row['PROMEDIO'] >= 805) && ($row['PROMEDIO'] <= 1004)) {
					$I_low = 101;
					$I_high = 150;
					$C_low = 805;
					$C_high = 1004;
				}
				elseif (($row['PROMEDIO'] >= 186) && ($row['PROMEDIO'] <= 304)) {
					$I_low = 151;
					$I_high = 200;
					$C_low = 186;
					$C_high = 304;
				}
				else
				{
					$I_low = 151;
					$I_high = 200;
					$C_low = 186;
					$C_high = 304;
				}
				break;
			case 'PM2.5':
				if (($row['PROMEDIO'] >= 0) AND ($row['PROMEDIO'] <= 12)) {
					$I_low = 0;
					$I_high = 50;
					$C_low = 0;
					$C_high = 12;
				}
				elseif (($row['PROMEDIO'] >= 12.1) AND ($row['PROMEDIO'] <= 35.4)) {
					$I_low = 51;
					$I_high = 100;
					$C_low = 12.1;
					$C_high = 35.4;
				}
				elseif (($row['PROMEDIO'] >= 35.5) AND ($row['PROMEDIO'] <= 55.4)) {
					$I_low = 101;
					$I_high = 150;
					$C_low = 35.5;
					$C_high = 55.4;
				}
				elseif (($row['PROMEDIO'] >= 55.5) AND ($row['PROMEDIO'] <= 150.4)) {
					$I_low = 151;
					$I_high = 200;
					$C_low = 55.5;
					$C_high = 150.4;
				}
				elseif (($row['PROMEDIO'] >= 150.5) AND ($row['PROMEDIO'] <= 250.4)) {
					$I_low = 201;
					$I_high = 300;
					$C_low = 150.5;
					$C_high = 250.4;
				}
				elseif (($row['PROMEDIO'] >= 250.5) AND ($row['PROMEDIO'] <= 350.4)) {
					$I_low = 301;
					$I_high = 400;
					$C_low = 250.5;
					$C_high = 350.4;
				}
				elseif (($row['PROMEDIO'] >= 350.5) AND ($row['PROMEDIO'] <= 500.4)) {
					$I_low = 401;
					$I_high = 500;
					$C_low = 350.5;
					$C_high = 500.4;
				}
				else
				{
					$I_low = 401;
					$I_high = 500;
					$C_low = 350.5;
					$C_high = 500.4;
				}
				break;
			default:
				$mensaje = "No es posible definir indices de calidad de aire con promedios de una hora para este agente, escoja promedios con otro rango de hora";
				break;
		}
	}

	@$AQI = (($I_high-$I_low)/($C_high-$C_low)*($row['PROMEDIO'] - $C_low)) + $I_low;
	//echo "<td style='font-weight:bold'>".@$AQI."</td>";
	if (($AQI >= 0) && ($AQI <= 50)) {
		echo "<td bgcolor='#20EC00' style='font-weight:bold'>Bueno</td>";
	}
	elseif (($AQI >= 51) && ($AQI <= 100)) {
		echo "<td bgcolor='#FBFF00'style='font-weight:bold'>Moderado</td>";
	}
	elseif (($AQI >= 101) && ($AQI <= 150)) {
		echo "<td bgcolor='#FF8700' style='font-weight:bold'>Insalurbre para grupos sensitivos</td>";
	}
	elseif (($AQI >= 151) && ($AQI <= 200)) {
		echo "<td bgcolor='#FF0000' style='font-weight:bold'>Insalubre</td>";
	}
	elseif (($AQI >= 201) && ($AQI <= 300)) {
		echo "<td bgcolor='#C6006F' style='font-weight:bold'>Muy Insalubre</td>";
	}
	elseif ($AQI >= 301) {
		echo "<td bgcolor='#934700' style='font-weight:bold'>Peligroso</td>";
	}
	else
	{
		echo "<td bgcolor='#B8B8B8' style='font-weight:bold' data-toggle='tooltip' data-placement='top' title='".@$mensaje."'>N/A</td>";
	}
?>