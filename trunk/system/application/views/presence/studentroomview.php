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
<title>Siswa Kamar</title>
<!-- #EndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="themes/default/template.css" type="text/css">
</head><body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" onLoad="placeFocus()">




<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td align="right" valign="center" class="submenu"><img src="images/dn_logo_smallest.gif"  align="left"><!-- #BeginEditable "judul" -->Siswa Kamar<!-- #EndEditable --></td>
  </tr>
  <tr> 
    <td> 
      &nbsp;

<form name="sisrama" method="post" action="<?=site_url("presence/studentroom/save");?>">
		<script>
		
			function changeClass(url) {
				window.location="<?=site_url("presence/studentroom/listbyroom");?>"+"/roomid/"+url;
			}
		
		</script>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
		<td class="formcolor">
 		Dari
		<select name="roomidfrom" onChange="changeClass(this.options[this.selectedIndex].value)">
			<option></option>
			<?  
				$line=0;
				foreach($data['roomList'] as $item) {
			?>
			<option  <?if ($data['roomid'] == $item->roomid){?>selected<?}?>  label="<?=$item->name?> (<?=$item->parent?>)" value="<?=$item->roomid?>"><?=$item->name?> (<?=$item->parent?>)</option>
			<?}?>
		</select>

			</td>
		<td class="formcolor">
 		Pindahkan ke Kamar 
		<select name="roomidto">
			<option></option>			
				<?  
					$line=0;
					foreach($data['roomList'] as $item) {
				?>
				<option label="<?=$item->name?> (<?=$item->parent?>)" value="<?=$item->roomid?>">	<?=$item->name?> (<?=$item->parent?>)</option>
				<?}?>
		</select>
			</td>
        </tr>
      </table>
      <!-- #EndEditable --></td>
		  <tr> 
    <td align="right">
	 	<input type="button" class="formbox" value=" Save " OnClick="javascript:this.form.submit()">
		<input type="button" class="formbox" value=" Refresh " OnClick="javascript:window.location='<?=site_url("presence/studentroom/page");?>'">
	 	<input type="button" class="formbox" value=" Close " OnClick="javascript:window.close()">
	 	    </td>
  </tr>  <tr>
    <td><!-- #BeginEditable "table" -->
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
			<td class="palareport" width="10%">Pilih Siswa</td>
			<td class="palareport" width="10%">No Induk Siswa</td>
			<td class="palareport" width="37%">Nama</td>
        </tr>
			<?  
				$line=0;
				foreach($data['studentList'] as $item) {
			?>
				<tr>
					<td width="20%" class="kiritabel">&nbsp;
						<input type="checkbox" name="studentid[]" value="<?=$item->studentid?>">
					</td>
					<td width="30%" class="isitabel">&nbsp;<?=$item->regnumber?></td>
					<td width="50%" class="isitabel">&nbsp;<?=$item->name?> -- <?=$item->class ?></td>
				</tr>
			<?}?>
		        </table>
      <!-- #EndEditable --></td>
  </tr>
</table>

</body>
</html>
