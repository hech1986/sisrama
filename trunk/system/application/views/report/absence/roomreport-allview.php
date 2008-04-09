<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><!-- #BeginTemplate "/Templates/ats.dwt" -->
<head>


<SCRIPT LANGUAGE="JavaScript">

<!-- Begin
function placeFocus() {
if (document.forms.length > 0) {
var field = document.forms[0];
for (i = 0; i < field.length; i++) {
if ((field.elements[i].type == "text") || (field.elements[i].type == "textarea") || (field.elements[i].type.toString().charAt(0) == "s")) {
document.forms[0].elements[i].focus();
break;
         }
          }
             }
        }
//  End -->

</script>


<!-- #BeginEditable "doctitle" --> 
<title>Rekapitulasi Santri Per Kamar</title>
<!-- #EndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="themes/default/template.css" type="text/css">
</head><body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" onLoad="placeFocus()">




<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <!--tr> 
    <td align="right"><img src="images/atslogo.jpg" width="42" height="30"></td>
  </tr-->
  <tr> 
    <td align="right" valign="center" class="submenu"><img src="images/dn_logo_smallest.gif"  align="left"><!-- #BeginEditable "judul" -->Rekapitulasi Santri Per Kamar<!-- #EndEditable --></td>
  </tr>
  <tr> 
    <td> 
      &nbsp;
<form name="rimba" enctype="multipart/form-data" method="post" action="/sisrama/roomreport.php?action=save">
<script>

function printSubmit() {
	document.forms[0]['action'].value = 'print';
	document.forms[0].submit();
}


</script>
<table width=100% cellspacing=0 cellpadding=0>
	<tr>
		<td class="formcolor">Dari Tanggal</td>
		<td class="formcolor">
		<select name="fromDay">
<option></option><option label="01" value="1">01</option>
<option label="02" value="2">02</option>
<option label="03" value="3">03</option>
<option label="04" value="4">04</option>
<option label="05" value="5">05</option>
<option label="06" value="6" selected="selected">06</option>
<option label="07" value="7">07</option>
<option label="08" value="8">08</option>
<option label="09" value="9">09</option>
<option label="10" value="10">10</option>
<option label="11" value="11">11</option>
<option label="12" value="12">12</option>
<option label="13" value="13">13</option>
<option label="14" value="14">14</option>
<option label="15" value="15">15</option>
<option label="16" value="16">16</option>
<option label="17" value="17">17</option>
<option label="18" value="18">18</option>
<option label="19" value="19">19</option>
<option label="20" value="20">20</option>
<option label="21" value="21">21</option>
<option label="22" value="22">22</option>
<option label="23" value="23">23</option>
<option label="24" value="24">24</option>
<option label="25" value="25">25</option>
<option label="26" value="26">26</option>
<option label="27" value="27">27</option>
<option label="28" value="28">28</option>
<option label="29" value="29">29</option>
<option label="30" value="30">30</option>
<option label="31" value="31">31</option>
</select>
<select name="fromMonth">
<option></option><option label="01" value="01">01</option>
<option label="02" value="02">02</option>
<option label="03" value="03">03</option>
<option label="04" value="04" selected="selected">04</option>
<option label="05" value="05">05</option>
<option label="06" value="06">06</option>
<option label="07" value="07">07</option>
<option label="08" value="08">08</option>
<option label="09" value="09">09</option>
<option label="10" value="10">10</option>
<option label="11" value="11">11</option>
<option label="12" value="12">12</option>
</select>
<select name="fromYear">
<option></option><option label="2007" value="2007">2007</option>
<option label="2008" value="2008" selected="selected">2008</option>
<option label="2009" value="2009">2009</option>
</select> 
		</td>
		<td class="formcolor">Sampai Tanggal</td>
		<td class="formcolor">
		<select name="toDay">
<option></option><option label="01" value="1">01</option>
<option label="02" value="2">02</option>
<option label="03" value="3">03</option>
<option label="04" value="4">04</option>
<option label="05" value="5">05</option>
<option label="06" value="6" selected="selected">06</option>
<option label="07" value="7">07</option>
<option label="08" value="8">08</option>
<option label="09" value="9">09</option>
<option label="10" value="10">10</option>
<option label="11" value="11">11</option>
<option label="12" value="12">12</option>
<option label="13" value="13">13</option>
<option label="14" value="14">14</option>
<option label="15" value="15">15</option>
<option label="16" value="16">16</option>
<option label="17" value="17">17</option>
<option label="18" value="18">18</option>
<option label="19" value="19">19</option>
<option label="20" value="20">20</option>
<option label="21" value="21">21</option>
<option label="22" value="22">22</option>
<option label="23" value="23">23</option>
<option label="24" value="24">24</option>
<option label="25" value="25">25</option>
<option label="26" value="26">26</option>
<option label="27" value="27">27</option>
<option label="28" value="28">28</option>
<option label="29" value="29">29</option>
<option label="30" value="30">30</option>
<option label="31" value="31">31</option>
</select>
<select name="toMonth">
<option></option><option label="01" value="01">01</option>
<option label="02" value="02">02</option>
<option label="03" value="03">03</option>
<option label="04" value="04" selected="selected">04</option>
<option label="05" value="05">05</option>
<option label="06" value="06">06</option>
<option label="07" value="07">07</option>
<option label="08" value="08">08</option>
<option label="09" value="09">09</option>
<option label="10" value="10">10</option>
<option label="11" value="11">11</option>
<option label="12" value="12">12</option>
</select>
<select name="toYear">
<option></option><option label="2007" value="2007">2007</option>
<option label="2008" value="2008" selected="selected">2008</option>
<option label="2009" value="2009">2009</option>
</select> 
		</td>
	</tr>
	<input type="hidden" name="all" value='1'>
</table>
  <tr> 
    <td align="right">
	 	<input type="submit" class="formbox" value="Rekap">
	 	
	 	
		<input type="button" class="formbox" value=" Refresh " OnClick="javascript:window.location='/sisrama/roomreport.php?'">
	 	
	 	<input type="button" class="formbox" value=" Close " OnClick="javascript:window.close()">
	 	    </td>
  </tr><table width=100% cellspacing=0 cellpadding=0>
   <tr>
			<td class="palareport">No</td>
		<td class="palareport">Rayon</td>
		<td class="palareport">Kamar</td>
		<td class="palareport">Musyrif/ah</td>
		<td class="palareport">Ketua Kamar</td>
		<td class="palareport">Jumlah Santri</td>
			<td class="palareport" width=5%>H</td>
		<td class="palareport" width=5%>I</td>
		<td class="palareport" width=5%>A</td>
		<td class="palareport" width=5%>S</td>
	</tr>
	<table width="95%" cellspacing=0 cellpadding=0 align="center">
        <tr align="center"> 
	<td colspan="2" height="22" class="footer" align="center"><!--Powered by sisrama 0.5.5--> 
            </td>
        </tr>
      </table>
</body>
</html>