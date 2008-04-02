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
         }</form>  
          }
             }
        }
//  End -->
</script>

<form name="classes" method="post" action="<?=site_url("master/classes/save");?>"> 
    <!-- #BeginEditable "isi" --> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
          <td width="17%" class="formcolor">Nama</td>
          <td width="83%" class="formcolor">
            <input type="text" name="name" value="<?=$classData['name']?>" class="arabic" size=8>
            <input type="text" name="name_ar" value="<?=$classData['name_ar']?>" size=8 class="arabic">
          </td>
        </tr>
	<tr>
          <td width="17%" class="formcolor">Tingkat</td>
          <td width="83%" class="formcolor">
            <input type="text" name="level" value="<?=$classData['level']?>" size=5>
			<input type="hidden" name="classid" value="<?=$classData['classid']?>" size=5>
          </td>
        </tr>
      </table>
	
      <!-- #EndEditable --></td>
	<tr>  
		<td align="right">
			<input type="button" class="formbox" value=" Save " OnClick="javascript:this.form.submit()">
			<input type="button" class="formbox" value=" Refresh " OnClick="javascript:window.location='<?=site_url("master/classes/page");?>'">
			<input type="button" class="formbox" value=" Close " OnClick="javascript:window.close()">
		</td>
	<tr>
</form>   
 <tr>
    <td><!-- #BeginEditable "table" -->
	<?=$paging;?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td class="palareport" width="10%">No.</td>
			<td class="palareport" width="10%">Nama</td>
			<td class="palareport" width="10%">Tingkat</td>
			<td class="palareport" width="40%"></td>
        </tr>
		<?  
			$line=0+$page= $this->uri->segment(4, 0);
            foreach($classList as $item) {
        ?>
            <tr> 
                <td class="kiritabel">&nbsp;<?=++$line?></td>
                <td class="isitabel">&nbsp;
                    <a href="<?=site_url("master/classes/edit/classid/".$item->classid);?>"><?=$item->name ?></a>&nbsp;&nbsp;
                </td>
				<td class="isitabel"><?=$item->level?></td>
				<td class="isitabel"><a href="<?=site_url("master/classes/remove/classid/".$item->classid);?>">(X)</a></td>
			</tr>
        <? }?>
      </table>
	<?=$paging;?>  
      <!-- #EndEditable --></td>
  </tr>
</table>
