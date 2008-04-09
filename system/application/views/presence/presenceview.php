<html>
<head>

	<script language="javascript">
	function pageJump(id,type) {
		if (type == 'region') {
			window.location="<?=site_url("presence/presence/page/regionid/")?>"+"/"+id;
		}
		if (type == 'room') {
			region = document.getElementById('regionid');
			window.location="<?=site_url("presence/presence/page/roomid/")?>"+"/"+id+"/regionid/"+region.value;
		}
	}
	function checkMe() {
		var roomid = document.getElementById('roomid');
		if(roomid.value == '') {
			alert('Anda harus memilih kamar dulu untuk cek absensi per tanggal');
		} else {
			document.forms[0].action = 'presence.php?action=edit';
			document.forms[0].submit();
		}	
	}
	
	</script></head>
<form name="presence" method="post" action="<?=site_url("master/region/save");?>"> 

      <!-- #BeginEditable "isi" -->
      <table width="100%" border="0" cellpadding="0" cellspacing="0" dwcopytype="CopyTableCell">
        <tr> 
          <td width="18%" class="formcolor">Tanggal</td>
          <td width="32%" class="formcolor"> 
		<input type="text" name="presencedate" value="<?=$presenceData['presencedate']?>" size=25>  
	<input type="hidden" name="presenceid" value="<?=$presenceData['presenceid']?>">
		<input type="button" class="formbox" value="Check" >
          </td>
			</tr>
			<tr>
			<td colspan=2 class=formcolor>
			<table width=100% border="0" cellpadding="0" cellspacing="0">
				 <tr>
          <td width="17%" class="formcolor">Rayon</td>
          <td width="83%" class="formcolor">
				<input type="hidden" name="regionid" value="<?=$presenceData['regionid']?>" >
            <select id="regionid" onChange="pageJump(this.options[this.selectedIndex].value,'region');">
			<?  
				foreach($regionList as $item) {
			?>
			<option  <?if ($presenceData['regionid'] == $item->regionid){?>selected<?}?>  label="<?=$item->regionname?>" value="<?=$item->regionid?>"><?=$item->regionname?> </option>
			<?}?>

			
            </select>
          </td>
			<td width="17%" class="formcolor">Musyrif/Musyrifah</td>
          <td width="83%" class="formcolor">
            <input type="text" readonly name="parent" value="<?=$presenceData['parent']?>" size=25>
          </td>
        </tr>
			<tr>
			 <td width="17%" class="formcolor">Kamar</td>
          <td width="83%" class="formcolor">
            <input type="hidden" id="roomid" name="roomid" value="<?=$presenceData['roomid']?>">
            <select onchange="pageJump(this.options[this.selectedIndex].value,'room');">
			<?  
				foreach($roomList as $item) {
			?>
			<option  <?if ($presenceData['roomid'] == $item->roomid){?>selected<?}?>  label="<?=$item->name?>" value="<?=$item->roomid?>"><?=$item->name?> </option>
			<?}?>
            </select>
          </td>
			<td width="17%" class="formcolor">Ketua Kamar</td>
          <td width="83%" class="formcolor">
            <input type="hidden" id="studentid" name="studentheadid" value="<?=$presenceData['studentheadid']?>">
            <input type=text size=25 readonly id="studentname" value="<?=$presenceData['studentname']?>"> &nbsp;
          </td>
			</tr>
			<tr>
			<td width="17%" class="formcolor">Kampus</td>
          <td width="83%" class="formcolor">
            <select name="campusid" >
			<?  
				foreach($campusList as $item) {
			?>
			<option  <?if ($presenceData['campusid'] == $item->campusid){?>selected<?}?>  label="<?=$item->campusname?>" value="<?=$item->campusname?>"><?=$item->campusname?> </option>
			<?}?>


			</select>
          </td>
 <td width="17%" class="formcolor">Kapasitas</td>
          <td width="83%" class="formcolor">
            <input type="text"  name="capacity" value="<?=$presenceData['capacity']?>" size=5>
          </td>
			</tr>
			</table>
			</td>
        </tr>
      </table>
	</form>  
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
	<input class="formbox" type="button" name="selAll" onClick="selectAll()" value="Select Hadir">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td class="palareport" >No</td>
          <td class="palareport" >No Induk</td>
          <td class="palareport" >Nama Lengkap</td>
          <td class="palareport" >Org Tua/Wali</td>
          <td class="palareport" >Telepon</td>
          <td class="palareport">Kelas</td>
          <td class="palareport" width="10%">H</td>
          <td class="palareport" width="10%">I</td>
          <td class="palareport" width="10%">A</td>
          <td class="palareport" width="10%">S</td>
        </tr>
		<?  
			$line=0;
            foreach($presenceList as $item) {
        ?>
        <tr> 
          <td class="kiritabel"><?=++$line?></td>
          <td class="isitabel">&nbsp;{$listofregnumber[i]}</td>
          <td class="isitabel">&nbsp;{$listofstudentname[i]}</td>
          <td class="isitabel">&nbsp;{$listofparent[i]}</td>
          <td class="isitabel">&nbsp;{$listofphone[i]}</td>
          <td class="isitabel">&nbsp;{$listofstudentclass[i]}</td>
          <td class="isitabel" align="center" width="10%">
			 	<input type="hidden" name="presenceid[{$listofstudentroomid[i]}]" value="{$listofpresenceid[i]}">
				<input type="radio" id="exist_{$listofstudentroomid[i]}" name="presence[{$listofstudentroomid[i]}]" value="H" {if $listofstatus[i] eq "H"}checked{/if}>
			</td>
          <td class="isitabel"  align="center" width="10%">
				<input type="radio" name="presence[{$listofstudentroomid[i]}]" value="I" {if $listofstatus[i] eq "I"}checked{/if}>
			</td>
          <td class="isitabel"  align="center" width="10%">
				<input type="radio" name="presence[{$listofstudentroomid[i]}]" value="A" {if $listofstatus[i] eq "A"}checked{/if}>
			</td>
          <td class="isitabel"  align="center" width="10%">
				<input type="radio" name="presence[{$listofstudentroomid[i]}]" value="S" {if $listofstatus[i] eq "S"}checked{/if}>
			</td>
        </tr>
		  <? }?>
      </table>
      <!-- #EndEditable --></td>
  </tr>
</table>
