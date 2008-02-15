  <? 
    $this->load->helper('url');

?>
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
<title>Master Siswa</title>
<!-- #EndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="themes/default/template.css" type="text/css">
</head><body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" onLoad="placeFocus()">




<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <!--tr> 
    <td align="right"><img src="images/atslogo.jpg" width="42" height="30"></td>
  </tr-->
  <tr> 
    <td align="right" valign="center" class="submenu"><img src="images/dn_logo_smallest.gif"  align="left"><!-- #BeginEditable "judul" -->Master Siswa<!-- #EndEditable --></td>
  </tr>
  <tr> 
    <td> 
      &nbsp;

<form name="rimba" method="post" action="<?=site_url("master/students/save");?>">
      <!-- #BeginEditable "isi" --> 
      <table width="100%" border="0" cellpadding="0" cellspacing="0" >
        <tr> 
          <td width="32%" class="formcolor">Nomor Induk</td>
          <td width="34%" class="formcolor"> 
            <input type="text" name="regno" value="" size="10">
            <input type="hidden" name="studentsid" value="">
          </td>
        </tr>

        <tr> 
          <td width="32%" class="formcolor">Nama</td>
          <td width="68%" class="formcolor"> 
            <input type="text" name="name"  size="35" value="">
          </td>
        </tr>
<!--
		<tr> 
          <td width="32%" class="formcolor">Kelas</td>
          <td width="68%" class="formcolor"> 
            <input type="text" name="class"  size="8" value="">
          </td>
        </tr>
-->        
        <tr>  
          <td width="32%" class="formcolor">Nama Orang Tua</td>
          <td width="68%" class="formcolor"> 
            <input type="text" name="parent"  size="35" value="">
          </td>
        </tr>
        
        <tr> 
          <td width="32%" class="formcolor">Alamat</td>
          <td width="68%" class="formcolor"> 
            <textarea name="address" cols="45" ></textarea>
          </td>
        </tr>
        <tr> 
          <td width="32%" class="formcolor">Kota</td>
          <td width="68%" class="formcolor"> 
            <input type="text" name="city"  size="16" value="">
          </td>

		<tr> 
          <td width="32%" class="formcolor">Nomor Telpon</td>
          <td width="68%" class="formcolor"> 
            <input type="text" name="phone"  size="16" value="">
          </td>
		<tr> 
          <td width="32%" class="formcolor">Kota Lahir</td>
          <td width="68%" class="formcolor"> 
            <input type="text" name="phone"  size="16" value="">
          </td>
				<tr> 
          <td width="32%" class="formcolor">Tanggal Lahir</td>
          <td width="68%" class="formcolor"> 
            <input type="text" name="phone"  size="16" value="">
          </td>  
        </tr>
        <tr> 
          <td width="32%" class="formcolor">&nbsp;</td>
          <td width="68%" class="formcolor">&nbsp;</td>
        </tr>
      </table>
		  <tr> 
    <td align="right">
	 	<input type="button" class="formbox" value=" Save " OnClick="javascript:this.form.submit()">
	 	<!--
		<input type="button" class="formbox" value=" Search " OnClick="javascript:window.location='db_lookup.php?ref=mt_student.php'">
		-->
		<input type="button" class="formbox" value=" Refresh " OnClick="javascript:window.location='<?=site_url("master/students/liststudents");?>'">
	 	<input type="button" class="formbox" value=" Close " OnClick="javascript:window.close()">
	 	    </td>
  </tr>  <tr> 
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td><!-- #BeginEditable "table" -->
      
		</td>

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
