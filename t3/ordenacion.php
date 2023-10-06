<HTML>
 <HEAD>
 <TITLE>Trabajando con Matrices</TITLE>
 </HEAD>
 <BODY>
 <CENTER>
 <H2>Arrays funciones <I>sort y rsort</I></H2>
 <?php
 $matriz1[775]="Madrid";
 $matriz1[748]="Zaragoza";
 $matriz1[12]="Bilbao";
 $matriz1[8936]="Valencia";
 $matriz1[74]="Lerida";
 $matriz1[5]="Alicante";
 ?>
<TABLE BORDER="0" CELLPADDING="4" CELLSPACING="6">
 <TR ALIGN="center">
 <TD>
 <TABLE BORDER="1" CELLPADDING="2" CELLSPACING="2">
 <TR ALIGN="center" BGCOLOR="yellow">
 <TH colspan='2'>Array Original</TH>
 <TR ALIGN="center" BGCOLOR="yellow">
 <TD>Posición</TD><TD>Valor</TD></TR>
 <?php
 foreach($matriz1 as $pos =>$valor ){
 echo "<TR ALIGN='center'><TD>".$pos."</TD>";
 echo "<TD>".$valor."</TD></TR>";
}
?>
</TABLE>
</TD>
<TD>
<TABLE BORDER="1" CELLPADDING="2" CELLSPACING="2">
<TR ALIGN="center" BGCOLOR="yellow">
<TH colspan='2'>sort()</TH>
<TR ALIGN="center" BGCOLOR="yellow">
<TD>Posición</TD><TD>Valor</TD></TR>
<?php
asort($matriz1);
foreach($matriz1 as $pos =>$valor){
echo "<TR ALIGN='center'><TD>".$pos."</TD>";
echo "<TD>".$valor."</TD></TR>";
}
?>
</TABLE></TD><TD>
<TABLE BORDER="1" CELLPADDING="2" CELLSPACING="2">
<TR ALIGN="center" BGCOLOR="yellow">
<TH colspan='2'>arsort()</TH>
<TR ALIGN="center" BGCOLOR="yellow">
<TD>Posición</TD><TD>Valor</TD></TR>
<?php
function ordenarMatri($a,$b){
    
    
    $a=strlen($a);
    $b=strlen($b);
    if ($a == $b) return 0;
    return ($a < $b) ? -1 : 1;
    }
    uksort($matriz1,"ordenarMatri");
foreach($matriz1 as $pos =>$valor){
echo "<TR ALIGN='center'><TD>".$pos."</TD>";
echo "<TD>".$valor."</TD></TR>";
}
?>
</TABLE></TD>
</TR>
</TABLE>
</CENTER>
</BODY>
</HTML> 