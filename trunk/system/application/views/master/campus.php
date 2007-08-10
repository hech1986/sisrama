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
<title>Master Kampus</title>
<!-- #EndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="themes/default/template.css" type="text/css">
</head><body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" onLoad="placeFocus()">



<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <!--tr> 
    <td align="right"><img src="images/atslogo.jpg" width="42" height="30"></td>
  </tr-->
  <tr> 
    <td align="right" valign="center" class="submenu"><img src="images/dn_logo_smallest.gif"  align="left"><!-- #BeginEditable "judul" -->Master Kampus<!-- #EndEditable --></td>
  </tr>
  <tr> 
    <td> 
      &nbsp;
<form name="rimba" method="post" action="/~spawn/ppia/mt_campus.php?action=save">

      <!-- #BeginEditable "isi" -->
      <table width="100%" border="0" cellpadding="0" cellspacing="0" dwcopytype="CopyTableCell">
        <tr> 
          <td width="18%" class="formcolor">Rayon</td>
          <td width="32%" class="formcolor"> 
	<input type="hidden" name="campusid" value="">
            <input type="text" name="campusname" size="25" value=""> 
          </td>
        </tr>
      </table>

  <tr> 
    <td align="right">
	 	<input type="button" class="formbox" value=" Save " OnClick="javascript:this.form.submit()">
	 	
	 	
		<input type="button" class="formbox" value=" Refresh " OnClick="javascript:window.location='/~spawn/ppia/mt_campus.php?'">
	 	
	 	<input type="button" class="formbox" value=" Close " OnClick="javascript:window.close()">
	 	    </td>
  </tr>  <tr> 
    <td align="right">&nbsp;</td>
  </tr>

  <tr>
    <td><!-- #BeginEditable "table" -->
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td class="palareport" width="10%">No</td>
          <td class="palareport">Rayon</td>
        </tr>
		         <tr> 
          <td class="kiritabel">&nbsp;1</td>

          <td class="isitabel">&nbsp;<a href="/~spawn/ppia/mt_campus.php?action=edit&campusid=3">Darunnajah 1</a></td>
        </tr>
		        </table>
      <!-- #EndEditable --></td>
  </tr>
</table>
<table width="95%" cellspacing=0 cellpadding=0 align="center">
        <tr align="center"> 
	<td colspan="2" height="22" class="footer" align="center">Powered by PPIA 0.3 
            </td>

        </tr>
      </table>
</body>
</html>
