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
<title>Rekapitulasi Ijin Per Santri</title>
<!-- #EndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="themes/default/template.css" type="text/css">
</head><body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" onLoad="placeFocus()">




<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <!--tr> 
    <td align="right"><img src="images/atslogo.jpg" width="42" height="30"></td>
  </tr-->
  <tr> 
    <td align="right" valign="center" class="submenu"><img src="images/dn_logo_smallest.gif"  align="left"><!-- #BeginEditable "judul" -->Rekapitulasi Ijin Per Santri<!-- #EndEditable --></td>
  </tr>
  <tr> 
    <td> 
      &nbsp;
<form name="rimba" enctype="multipart/form-data" method="post" action="/sisrama/reportpermitstudent.php?action=save">
<script>
function printMe() {
	document.forms[0]['action'].value='print';
	document.forms[0].submit();
}
</script>

    <!-- #BeginEditable "isi" --> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="17%" class="formcolor">Siswa</td>
          <td width="83%" class="formcolor" colspan=3>
				<input type="hidden" id="studentid" name="studentid" value="">
				<input type="hidden" id="permitid" name="permitid" value="">
				<input type="hidden" name="action"> 
				<input type=text size=25 readonly id="studentname" value=""> &nbsp; 
				<input type="button" class="formbox" value=" Pilih Siswa... " onClick="javascript:window.open('db_lookup.php?opener=1','Search Student','width=600,height=400,menubar=no,toolbar=no,location=no')">
          </td>
        </tr>
<div id=detailstudent style="display:'none'">
			 <tr>
          <td width="17%" class="formcolor">Nomor Induk</td>
          <td width="83%" class="formcolor" colspan=3>
         <input type="text" id=regnumber name="regnumber" readonly value="" size=10>
          </td>
        </tr>
			 <tr>
          <td width="17%" class="formcolor">Kelas</td>
          <td width="83%" class="formcolor" colspan=3>
         <input type="text" id=studclass name="class" readonly value="" size=5>
          </td>
        </tr>
</div>
      </table>
      <!-- #EndEditable --></td>
		  <tr> 
    <td align="right">
	 	<input type="submit" class="formbox" value="Rekap">
	 	
	 	
		<input type="button" class="formbox" value=" Refresh " OnClick="javascript:window.location='/sisrama/reportpermitstudent.php?'">
	 	
	 	<input type="button" class="formbox" value=" Close " OnClick="javascript:window.close()">
	 	    </td>
  </tr>  <tr>
    <td><!-- #BeginEditable "table" -->
	<table width=100% cellspacing=0 cellpadding=0>
		<tr>
			<td class="palareport">Tanggal Ijin</td>
			<td class="palareport">Tujuan</td>
		</tr>
			</table>
      <!-- #EndEditable --></td>
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