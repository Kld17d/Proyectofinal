<HTML>
<HEAD> <TITLE> HTML DINAMICO </TITLE> </HEAD>
<BODY BACKGROUND="fondo.jpg">
<META CHARSET="UTF-8">

	<CENTER><H1> APLICACIÓN INDÍCE DE MASA CORPORAL </H1></CENTER>
	<H2> Presentado por: Yhon Dredy Holguin Zamora </H2>
	<IMG SRC="foto.jpeg" ALIGN="RIGHT" WIDTH="10%"> <BR>
	
	<H1> CALCULANDO IMC </H1>
	<TABLE BORDER=1>
		<TR>
			<TH> IMC </TH>
			<TH> Nivel de peso </TH>
		</TR>

		<TR>
			<TD ALIGN="RIGHT"> <I>Por debajo de 18.5</I> 
				<BR><I>18.5 – 24.9</I> 
				<BR><I>25.0 – 29.9</I> 
				<BR><I>30.0 o más</I> 
			</TD>
			<TD> bajo peso 
				<BR>normal
				<BR>sobrepeso
				<BR>obecidad
			</TD>
		</TR>
	</TABLE> <BR> <BR>
	
	<?php
	$num1=$_POST['n1'];
	$num2=$_POST['n2'];
	$num3=$_POST['n3'];
	$num4=$_POST['n4'];
	
	if($num1&&$num2&&$num3&&$num4){
		echo "Calculo en las dos unidades:  ",("<br/>");
			$imc=$num1/($num2*$num2);
		echo "En Kilogramos y Metros:  ",$imc,("<br/>");
			$imc1=$num3/($num4*$num4)*703;
		echo " En Libras y Pulgadas:  ",$imc1;
	
	}
		elseif($num1&&$num2){
			echo "Calculo del IMC en Kilogramos y metros: ";
			$imc=$num1/($num2*$num2);
			echo "<B>  <I>$imc </B></I>";
			if($imc<18.5){
				echo" /Conclusión: <B>Esta bajo de peso</B>";
			}
			elseif($imc>=18.5 and $imc<=24.9){
				echo "  /Conclusión: <B>Peso normal </B>";
			}
			elseif($imc>=25 and $imc<30){
				echo "  /Conclusión: <B>Esta en sobrepeso </B>" ;
			}else{
				echo " /Conclusión: <B>Esta en peligro ¡obecidad!</B>";
			}
		}
		elseif($num3&&$num4){
			echo "Calculo en Libras y Pulgadas: ";
			$imc1=$num3/($num4*$num4)*703;
			echo "<B><I>$imc1 </B></I>";
			if($imc1<18.5){
				echo" /Conclusión: <B>Esta bajo de peso</B>";
			}
			elseif($imc1>=18.5 and $imc1<=24.9){
				echo " /Conclusión: <B>Peso normal</B>";
			}
			elseif($imc1>=25 and $imc1<30){
				echo "  /Conclusión: <B>Esta en sobrepeso</B>";
			}else{
				echo "  /Conclusión: <B>Esta en peligro ¡obecidad!</B>";
			}
		}else{
		echo " /Conclusión: <B>Falta algun dato </B>";
	}
	
	?>

</BODY>
</HTML>


