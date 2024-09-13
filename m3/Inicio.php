<HTML>
<HEAD> <TITLE> TALLER 2 2C </TITLE> </HEAD>
<BODY BGCOLOR="Orange">
<META CHARSET="UTF-8">
	<CENTER><H1> APLICACION INDICE DE MASA CORPORAL </H1></CENTER>
	<H2> Presentado por: Yhon Holguin </H2>
	<IMG SRC="fondo.jpeg" ALIGN="RIGHT" WIDTH="10%"> <BR>
	
	
	
	
	<H2> INDICE DE MASA CORPORAL </H2>  <BR> <BR>
El índice de masa corporal (IMC) es un número que se calcula con base en el peso y la estatura de <BR>
la persona. Para la mayoría de las personas, el IMC es un indicador confiable de la gordura y se usa <BR>
para identificar las categorías de peso que pueden llevar a problemas de salud. <BR> <BR>






<H2> ¿CÓMO SE CALCULA EL IMC?</H2>
<TABLE BORDER=1>
<TR>
<TH> Unidades de medida </TH>
<TH> Fórmula y cálculo </TH>
</TR>

<TR>
<TD> <B><I>Kilogramos y metros (o centimetros)</I></B> </TD>
<TD> Fómula: peso(kg)/[Estatura (m)]<SUP>2</SUP> <BR> Con el sistema métrico, la fórmula para el IMC es el peso en kilogramos dividido 
<BR> por la estatura en metros cuadrados. Debido a que la estatura por lo general se 
<BR> mide en centímetros, divida la estatura en centímetros por 100 para obtener la 
<BR> estatura en metros.
<BR> Ejemplo: Peso = 68 kg, Estatura = 165 cm (1.65 m)
<BR> Cálculo: 68 ÷ (1.65)<SUP>2</SUP> = 24.98
</TD>
</TR>

<TR>
<TD> <B><I>Libras y pulgadas</I></B> </TD>
<TD> Fórmula: peso (lb) / [estatura (in)]<SUP>2</SUP> x 703 
<BR> Calcule el IMC al dividir el peso en libras (lb) por la altura en pulgadas (in) 
<BR> cuadradas y multiplicar por un factor de conversión de 703.
<BR> Ejemplo: Peso = 150 lb, Estatura = 5’5″ (65″) 
<BR> Cálculo: [150 ÷ (65)<SUP>2</SUP>] x 703 = 24.96
</TD>
</TR>

</TABLE>

<H2> ¿CÓMO SE INTERPRETA EL IMC PARA ADULTOS?</H2>
Las categorías de estado de peso estándar asociadas con los rangos de IMC para adultos se <BR>
muestran en la siguiente tabla: <BR> <BR>

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
</TABLE>



	
	
	<FORM ACTION="Imc.php" METHOD="POST">
		<h2> Kilogramos y Metros </h2>
		<TABLE>
		<TR>
		<TD>Peso:  </TD>   <TD><INPUT TYPE="text" NAME="n1"> </TD> 
		</TR>
	<TR>	
	<TD>	Estatura: </TD> <TD>  <INPUT TYPE="text" NAME="n2"> </TD>
	
	</TR>
	</TABLE>
		<h2> Libras y Pulgadas </h2>
		<TABLE>
		<TR>
		<TD>Libras: </TD> <TD>   <INPUT TYPE="text" NAME="n3"> </TD>
		<TR>
		<TD>Pulgadas:</TD> <TD>   <INPUT TYPE="text" NAME="n4"> </TD>
		</TR>
		</TABLE> <BR> <BR>
		<INPUT TYPE="submit" VALUE="Enviar datos"> <INPUT TYPE="reset"> <BR> <BR>
		
		

	</FORM>
</BODY>
</HTML>


