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
		<td class="formcolor">Kamar</td>
		<td  class="formcolor">
		<input type="hidden" name="action">
					<select name="roomid" id="roomid" onChange="submitRoom(this.options[this.selectedIndex].value)">
		<option></option>
			</select>
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
				<td class="palareport" width=10%>Kelas</td>
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