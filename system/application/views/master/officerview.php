<html>
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
	<!-- #BeginEditable "isi" -->
		<form name="officer" method="post" action="<?=site_url("master/officer/save");?>"> 
		<table width="100%" border="0" cellpadding="0" cellspacing="0" dwcopytype="CopyTableCell">
			<tr> 
				<td width="18%" class="formcolor">Petugas Jaga</td>
				<td width="32%" class="formcolor"> 
				<input type="hidden" name="officerid" value="<?=$officerData['officerid']?>">
				<input type="text" name="officername" size="25" value="<?=$officerData['officername']?>"> 
			</td>
			</tr>
			<tr> 
				<td align="right">
				<input type="button" class="formbox" value=" Save " OnClick="javascript:this.form.submit()">
				<input type="button" class="formbox" value=" Refresh " OnClick="javascript:window.location='<?=site_url("master/officer/page");?>'">
				<input type="button" class="formbox" value=" Close " OnClick="javascript:window.close()">
				</td>
			</tr>
			<tr> 
				<td align="right">&nbsp;</td>
			</tr>
			<tr>
				<td><!-- #BeginEditable "table" -->
					<?=$paging;?>
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
					<tr> 
						<td class="palareport" width="10%">No.</td>
						<td class="palareport">Nama</td>
					</tr>
					<?  
						$line=0+$page= $this->uri->segment(4, 0);
						foreach($officerList as $item) {
					?>
					<tr> 
						<td class="kiritabel">&nbsp;<?=++$line?></td>
						<td class="isitabel">&nbsp;
							<a href="<?=site_url("master/officer/edit/officerid/".$item->officerid);?>"><?=$item->officername ?></a>&nbsp;&nbsp;
							<a href="<?=site_url("master/officer/remove/officerid/".$item->officerid);?>">(X)</a>
						</td>
					</tr>
					<? }?>
					</table>
					<?=$paging;?>
					<!-- #EndEditable -->
				</td>
			</tr>
		</table>
</body>
</html>