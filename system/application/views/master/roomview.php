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
<title>Master Kamar</title>
<!-- #EndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="themes/default/template.css" type="text/css">
</head><body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" onLoad="placeFocus()">




<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <!--tr> 
    <td align="right"><img src="images/atslogo.jpg" width="42" height="30"></td>
  </tr-->
  <tr> 
    <td align="right" valign="center" class="submenu"><img src="images/dn_logo_smallest.gif"  align="left"><!-- #BeginEditable "judul" -->Master Kamar<!-- #EndEditable --></td>
  </tr>
  <tr> 
    <td> 
      &nbsp;

<form name="rimba" method="post" action="<?=site_url("master/room/save");?>">
    <!-- #BeginEditable "isi" --> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
          <td width="17%" class="formcolor">Nama</td>
          <td width="83%" class="formcolor">
            <input type="text" name="name" value="<?=$roomData->name?>" size=25>
          </td>
        </tr>

	<tr>
          <td width="17%" class="formcolor">Musyrif/Musyrifah</td>
          <td width="83%" class="formcolor">
            <input type="text" name="parent" value="<?=$roomData->parent?>" size=25>
          </td>
        </tr>

        <tr> 
          <td width="17%" class="formcolor">Rayon</td>

          <td width="83%" class="formcolor"> 
				<input type="hidden" name="roomid" value="<?=$roomData->roomid?>">
				<select name="regionid">
					<option></option>
					<?  
						$line=0;
						foreach($regionsList as $item) {
					?>
					<option   <? if( $roomData->regionid==$item->regionid){ ?>selected<?}?>    value="<?=$item->regionid?>"><?=$item->regionname?></option>
					<? } ?>
				</select>
          </td>
        </tr>

        <tr> 
          <td width="17%" class="formcolor">Ketua Kamar</td>
          <td width="83%" class="formcolor">
				<!--<input type="hidden" id="studentid" name="studentheadid" value="">
				<input type=text size=25 readonly id="studentname" value=""> &nbsp; 
				<input disabled type="button" class="formbox" value=" Pilih Siswa... " onClick="javascript:window.open('db_lookup.php?opener=1','Search Student','width=600,height=400,menubar=no,toolbar=no,location=no')">
				-->
				<select name="studentheadid">
					<option></option>
					<?  
						$line=0;
						foreach($studentsList as $item) {
					?>
					<option  <? if( $roomData->studentheadid==$item->studentid){ ?>selected<?}?> value="<?=$item->studentid?>"><?=$item->name?></option>
					<? } ?>
				</select>
          </td>
        </tr>
        <tr> 
          <td width="17%" class="formcolor">Kampus</td>
          <td width="83%" class="formcolor"> 
				<select name="campusid">
					<option></option>
					<?  
						$line=0;
						foreach($campusList as $item) {
					?>
					<option <? if( $roomData->campusid==$item->campusid){ ?>selected<?}?> value="<?=$item->campusid?>"><?=$item->campusname?></option>
					<? } ?>
				</select>
          </td>
	    </tr>
        
		<tr> 
          <td width="17%" class="formcolor">Kapasitas</td>
          <td width="83%" class="formcolor"> 
            <input type="text"  name="capacity" value="<?=$roomData->capacity?>" size=5>

          </td>
        </tr>
        <tr> 
          <td width="17%" class="formcolor">Terisi</td>
          <td width="83%" class="formcolor"> 
            <input type="text"  name="filled" value="<?=$roomData->filled?>" readonly size=5>
          </td>
        </tr>
      </table>

      <!-- #EndEditable --></td>
		  <tr> 
    <td align="right">
		<input type="button" class="formbox" value=" Save " OnClick="javascript:this.form.submit()">
		<input type="button" class="formbox" value=" Refresh " OnClick="javascript:window.location='<?=site_url('master/room/page') ?>'">
	 	<input type="button" class="formbox" value=" Close " OnClick="javascript:window.close()">
	</td>
  </tr>  <tr>
    <td><!-- #BeginEditable "table" -->
<?=$paging;?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td class="palareport" width="20%">Nama</td>
          <td class="palareport" width="20%">Musyrif/Musyrifah</td>
          <td class="palareport" width="20%">Rayon</td>
          <td class="palareport" width="20%">Ketua Kamar</td>
          <td class="palareport" width="20%">Kampus</td>

          <td class="palareport" width="10%">Kapasitas</td>
          <td class="palareport" width="10%">Terisi</td>
		<td class="palareport" width="10%">&nbsp;</td>  
        </tr>

	   <?  
			$line=0;
			foreach($roomList as $item) {
		?>
 
		<tr> 
			<td width="20%" class="kiritabel">
				<a href="<?=site_url("master/room/edit/roomid/".$item->roomid);?>"><?=$item->roomname?></a>
			</td>
			<td width="20%" class="isitabel"><?=$item->parent?></td>
			<td width="20%" class="isitabel"><?=$item->regionname?></td>
			<td width="20%" class="isitabel"><?=$item->studentname?></td>
			<td width="20%" class="isitabel"><?=$item->campusname?></td>
			<td width="10%" class="isitabel"><?=$item->capacity?></td>
			<td width="10%" class="isitabel">N/A</td>
			<td>
                    <a href="<?=site_url("master/students/remove/roomid/".$item->roomid);?>">(hapus)</a>
			</td>
  
        </tr>
		  
		<?}?>		
		</table>
      <!-- #EndEditable -->
	  </td>
  </tr>
</table>
<?=$paging;?>
</body>
</html>
