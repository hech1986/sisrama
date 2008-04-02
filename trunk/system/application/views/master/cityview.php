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

<form name="city" method="post" action="<?=site_url("master/city/save");?>"> 
      <!-- #BeginEditable "isi" -->
      <table width="100%" border="0" cellpadding="0" cellspacing="0" dwcopytype="CopyTableCell">
        <tr> 
          <td width="18%" class="formcolor">Konsulat</td>
          <td width="32%" class="formcolor">
			 <select name="consulateid">
			<?  
				foreach($dataList['consulateList'] as $item) {
			?>
			<option  <?if ($cityData['consulateid'] == $item->consulateid){?>selected<?}?>  label="<?=$item->consulatename?>" value="<?=$item->consulateid?>"><?=$item->consulatename?> </option>
			<?}?>
			 </select>
          </td>
        </tr>
        <tr> 
          <td width="18%" class="formcolor">Kabupaten/Kota</td>
          <td width="32%" class="formcolor"> 
			<input type="hidden" name="cityid" value="<?=$cityData['cityid']?>">
            <input type="text" name="cityname" size="25" value="<?=$cityData['cityname']?>"> 
          </td>
        </tr>
      </table>
	<tr>  
		<td align="right">
			<input type="button" class="formbox" value=" Save " OnClick="javascript:this.form.submit()">
			<input type="button" class="formbox" value=" Refresh " OnClick="javascript:window.location='<?=site_url("master/city/page");?>'">
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
			<td class="palareport">City/Kabupaten</td>
			<td class="palareport">Konsulat</td>
			<td class="palareport"></td>
        </tr>
		<?  
			$line=0+$page= $this->uri->segment(4, 0);
            foreach($dataList['cityList'] as $item) {
        ?>
            <tr> 
                <td class="kiritabel">&nbsp;<?=++$line?></td>
                <td class="isitabel">&nbsp;
                    <a href="<?=site_url("master/city/edit/cityid/".$item->cityid);?>"><?=$item->cityname ?></a>&nbsp;&nbsp;
                </td>
				<td class="isitabel"><?=$item->consulatename?></td>
				<td class="isitabel"><a href="<?=site_url("master/city/remove/cityid/".$item->cityid);?>">(X)</a></td>
			</tr>
        <? }?>      </table>
	<?=$paging;?>  
      <!-- #EndEditable --></td>
  </tr>
</table>

