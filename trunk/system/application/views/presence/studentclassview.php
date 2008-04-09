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
<title>Siswa Kelas</title>
<!-- #EndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="themes/default/template.css" type="text/css">
</head><body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" onLoad="placeFocus()">




<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td align="right" valign="center" class="submenu"><img src="images/dn_logo_smallest.gif"  align="left"><!-- #BeginEditable "judul" -->Siswa Kelas<!-- #EndEditable --></td>
  </tr>
  <tr> 
    <td> 
      &nbsp;

<form name="sisrama" method="post" action="<?=site_url("presence/studentclass/save");?>">
		<script>
		
			function changeClass(url) {
				window.location="<?=site_url("presence/studentclass/listbyclass");?>"+"/classid/"+url;
			}
		
		</script>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
		<td class="formcolor">
 		Dari
		<select name="classidfrom" onChange="changeClass(this.options[this.selectedIndex].value)">
			<option></option>
			<?  
				$line=0;
				foreach($data['classList'] as $item) {
			?>
			<option  <?if ($data['classid'] == $item->classid){?>selected<?}?>  label="<?=$item->name?> (<?=$item->level?>)" value="<?=$item->classid?>"><?=$item->name?> (<?=$item->level?>)</option>
			<?}?>
		</select>

			</td>
		<td class="formcolor">
 		Pindahkan ke Kelas 
		<select name="classidto">
			<option></option>			
				<?  
					$line=0;
					foreach($data['classList'] as $item) {
				?>
				<option label="<?=$item->name?> (<?=$item->level?>)" value="<?=$item->classid?>">	<?=$item->name?> (<?=$item->level?>)</option>
				<?}?>
		</select>
			</td>
        </tr>
      </table>
      <!-- #EndEditable --></td>
		  <tr> 
    <td align="right">
	 	<input type="button" class="formbox" value=" Save " OnClick="javascript:this.form.submit()">
		<input type="button" class="formbox" value=" Refresh " OnClick="javascript:window.location='<?=site_url("presence/studentclass/page");?>'">
	 	<input type="button" class="formbox" value=" Close " OnClick="javascript:window.close()">
	 	    </td>
  </tr>  <tr>
    <td><!-- #BeginEditable "table" -->
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
			<td class="palareport" width="10%">No.</td>
			<td class="palareport" width="10%">No Induk Siswa</td>
			<td class="palareport" width="37%">Nama</td>
        </tr>
			<?  
				$line=0;
				foreach($data['studentList'] as $item) {
			?>
				<tr>
					<td class="kiritabel">&nbsp;<?=++$line?></td>
					<td width="30%" class="isitabel">
					<input type="checkbox" name="studentid[]" value="<?=$item->studentid?>">
					<?=$item->regnumber?></td>
					<td width="50%" class="isitabel">&nbsp;<?=$item->name?></td>
				</tr>
			<?}?>
		        </table>
      <!-- #EndEditable --></td>
  </tr>
</table>

</body>
</html>
