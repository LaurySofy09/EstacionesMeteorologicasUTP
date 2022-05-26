
																<?php
																	if ($result->num_rows > 0) {
																	    echo "<table><tr><th>Nombre del Agente</th><th>Nomenclatura</th><th>Valor</th></tr>";

																	    // output data of each row
																	    while($row = $result->fetch_assoc())
																	    {
																	        
																	        if ($row["NOMENCLATURA"] == "CO" && $row["VALOR"] <= 8.75)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=colorverde>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "CO" && $row["VALOR"] >= 8.76 && $row["VALOR"] <= 11.00)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=coloramarillo>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "CO" && $row["VALOR"] >= 11.01 && $row["VALOR"] <= 13.30)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=colornaranja>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "CO" && $row["VALOR"] >= 13.31 && $row["VALOR"] <= 15.50)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=colorrojo>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "CO" && $row["VALOR"] >= 15.51)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=colorpurpura>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "O3" && $row["VALOR"] <= 0.051)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=colorverde>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "O3" && $row["VALOR"] >= 0.052 && $row["VALOR"] <= 0.095)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=coloramarillo>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "O3" && $row["VALOR"] >= 0.096 && $row["VALOR"] <= 0.135)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=colornaranja>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "O3" && $row["VALOR"] >= 0.136 && $row["VALOR"] <= 0.175)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=colorrojo>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "O3" && $row["VALOR"] >= 0.176)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=colorpurpura>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "PM10" && $row["VALOR"] <= 50)
																	        {
																	        	echo "<tr><td>" . utf8_encode($row["NOMBRE"]). "<td>". $row["NOMENCLATURA"]."<td class=colorverde>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "PM10" && $row["VALOR"] >= 51 && $row["VALOR"] <= 75)
																	        {
																	        	echo "<tr><td>" . utf8_encode($row["NOMBRE"]). "<td>". $row["NOMENCLATURA"]."<td class=coloramarillo>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "PM10" && $row["VALOR"] >= 76 && $row["VALOR"] <= 155)
																	        {
																	        	echo "<tr><td>" . utf8_encode($row["NOMBRE"]). "<td>". $row["NOMENCLATURA"]."<td class=colornaranja>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "PM10" && $row["VALOR"] >= 156 && $row["VALOR"] <= 235)
																	        {
																	        	echo "<tr><td>" . utf8_encode($row["NOMBRE"]). "<td>". $row["NOMENCLATURA"]."<td class=colorrojo>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "PM10" && $row["VALOR"] >= 236)
																	        {
																	        	echo "<tr><td>" . utf8_encode($row["NOMBRE"]). "<td>". $row["NOMENCLATURA"]."<td class=colorpurpura>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "PM2.5" && $row["VALOR"] <= 25)
																	        {
																	        	echo "<tr><td>" . utf8_encode($row["NOMBRE"]). "<td>". $row["NOMENCLATURA"]."<td class=colorverde>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "PM2.5" && $row["VALOR"] >= 26 && $row["VALOR"] <= 45)
																	        {
																	        	echo "<tr><td>" . utf8_encode($row["NOMBRE"]). "<td>". $row["NOMENCLATURA"]."<td class=coloramarillo>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "PM2.5" && $row["VALOR"] >= 46 && $row["VALOR"] <= 79)
																	        {
																	        	echo "<tr><td>" . utf8_encode($row["NOMBRE"]). "<td>". $row["NOMENCLATURA"]."<td class=colornaranja>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "PM2.5" && $row["VALOR"] >= 80 && $row["VALOR"] <= 147)
																	        {
																	        	echo "<tr><td>" . utf8_encode($row["NOMBRE"]). "<td>". $row["NOMENCLATURA"]."<td class=colorrojo>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "PM2.5" && $row["VALOR"] >= 148)
																	        {
																	        	echo "<tr><td>" . utf8_encode($row["NOMBRE"]). "<td>". $row["NOMENCLATURA"]."<td class=colorpurpura>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "SO2" && $row["VALOR"] <= 0.008)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=colorverde>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "SO2" && $row["VALOR"] >= 0.009 && $row["VALOR"] <= 0.110)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=coloramarillo>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "SO2" && $row["VALOR"] >= 0.111 && $row["VALOR"] <= 0.165)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=colornaranja>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "SO2" && $row["VALOR"] >= 0.166 && $row["VALOR"] <= 0.220)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=colorrojo>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "SO2" && $row["VALOR"] >= 0.221)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=colorpurpura>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "NO2" && $row["VALOR"] <= 0.107)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=colorverde>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "NO2" && $row["VALOR"] >= 0.108 && $row["VALOR"] <= 0.210)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=coloramarillo>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "NO2" && $row["VALOR"] >= 0.211 && $row["VALOR"] <= 0.230)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=colornaranja>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "NO2" && $row["VALOR"] >= 0.231 && $row["VALOR"] <= 0.250)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=colorrojo>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "NO2" && $row["VALOR"] >= 0.251)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=colorpurpura>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "DIR_VIENTO" && $row["VALOR"] >= 0)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=colorgris>". utf8_encode($row["VALOR"])."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "VEL_VIENTO" && $row["VALOR"] >= 0)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=colorgris>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "TEMP" && $row["VALOR"] >= 0)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=colorgris>". $row["VALOR"]."</td></tr>";
																	        }
																	        if ($row["NOMENCLATURA"] == "HUMEDAD" && $row["VALOR"] >= 0)
																	        {
																	        	echo "<tr><td>" . $row["NOMBRE"]. "<td>". $row["NOMENCLATURA"]."<td class=colorgris>". $row["VALOR"]."</td></tr>";
																	        }

																	        	

																	    }
																	    
																	    echo "</table>";
																	    //echo "Indicadores:";
																	    //echo "<table><tr><th class=colorverde>___ Bueno___</th><th class=coloramarillo>_Moderado_</th><th class=colornaranja>____Alto___</th><th class=colorrojo>_Muy_alto_</th><th class=colorpurpura>_Extremo_alto_</th></tr>";
																	} else {
																	    echo "0 results";
																	}

																	$conn->close();
																	?>