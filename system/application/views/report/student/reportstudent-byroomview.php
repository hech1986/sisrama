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
<title>Data Santri</title>
<!-- #EndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="themes/default/template.css" type="text/css">
</head><body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" onLoad="placeFocus()">




<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <!--tr> 
    <td align="right"><img src="images/atslogo.jpg" width="42" height="30"></td>
  </tr-->
  <tr> 
    <td align="right" valign="center" class="submenu"><img src="images/dn_logo_smallest.gif"  align="left"><!-- #BeginEditable "judul" -->Data Santri<!-- #EndEditable --></td>
  </tr>
  <tr> 
    <td> 
      &nbsp;
<form name="rimba" enctype="multipart/form-data" method="post" action="/sisrama/reportstudent.php?action=save">
<script>

function printSubmit() {
	document.forms[0]['action'].value = 'print';
	document.forms[0].submit();
}

function submitRoom() {
	document.forms[0].submit();	

}

</script>
<table width=100% cellspacing=0 cellpadding=0>
	<tr>
		<td class="formcolor">Kelas</td>
		<td  class="formcolor">
		<input type="hidden" name="action">
					<select name="classid" id="classid" onChange="document.forms[0].submit();">
			<option></option><option label="1 A" value="2">1 A</option>
<option label="1 B" value="3">1 B</option>
<option label="1 C" value="4">1 C</option>
<option label="1 D" value="5">1 D</option>
<option label="1 E" value="6">1 E</option>
<option label="1 F" value="7">1 F</option>
<option label="1  G" value="8">1  G</option>
<option label="2 A" value="9">2 A</option>
<option label="2 B" value="10">2 B</option>
<option label="2 C" value="11">2 C</option>
<option label="2 E" value="13">2 E</option>
<option label="3 A" value="14">3 A</option>
<option label="3 B" value="15">3 B</option>
<option label="3 D" value="17">3 D</option>
<option label="4 B" value="21">4 B</option>
<option label="5 B" value="25">5 B</option>
<option label="1 H" value="30">1 H</option>
<option label="1 J" value="32">1 J</option>
<option label="1 K" value="33">1 K</option>
<option label="1  L" value="34">1  L</option>
<option label="1 M" value="35">1 M</option>
<option label="1 N" value="36">1 N</option>
<option label="2 J" value="41">2 J</option>
<option label="3 G" value="43">3 G</option>
<option label="3 H" value="44">3 H</option>
<option label="4 D" value="47">4 D</option>
<option label="5 C" value="51">5 C</option>
<option label="6 B" value="56">6 B</option>
<option label="10 B" value="58">10 B</option>
<option label="11 A" value="59">11 A</option>

			</selecT>
			<input type="hidden" name="type" value="class">
				</td>
	</tr>

	</table>
  <tr> 
    <td align="right">
	 	<input type="submit" class="formbox" value="Rekap">
	 	
	 	
		<input type="button" class="formbox" value=" Refresh " OnClick="javascript:window.location='/sisrama/reportstudent.php?'">
	 	
	 	<input type="button" class="formbox" value=" Close " OnClick="javascript:window.close()">
	 	    </td>
  </tr><table width=100% cellspacing=0 cellpadding=0>
   <tr>
		<td class="palareport" width=2%>No</td>
		<td class="palareport" width=5%>No Induk</td>
		<td class="palareport" width=25%>Nama Santri</td>
				<td class="palareport" width=10%>Kamar</td>
				<td class="palareport" width=10%>Kabupaten</td>
		<td class="palareport" width=10%>Konsulat</td>
		<td class="palareport" width=15%>Orang Tua</td>
		<td class="palareport" width=15%>Telepon</td>
		<td class="palareport" width=15%>HP</td>
	</tr>
		</table>
<table width="95%" cellspacing=0 cellpadding=0 align="center">
        <tr align="center"> 
	<td colspan="2" height="22" class="footer" align="center"><!--Powered by sisrama 0.5.5--> 
            </td>
        </tr>
      </table>
</body>
</html>