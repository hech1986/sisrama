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

<form name="rimba" method="post" action="<?=site_url("master/rooms/save");?>">
    <!-- #BeginEditable "isi" --> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
          <td width="17%" class="formcolor">Nama</td>
          <td width="83%" class="formcolor">
            <input type="text" name="name" value="<?=$roomsData['name']?>" size=25>
          </td>
        </tr>

	<tr>
          <td width="17%" class="formcolor">Musyrif/Musyrifah</td>
          <td width="83%" class="formcolor">
            <input type="text" name="parent" value="<?=$roomsData['parent']?>" size=25>
          </td>
        </tr>

        <tr> 
          <td width="17%" class="formcolor">Rayon</td>

          <td width="83%" class="formcolor"> 
				<input type="hidden" name="roomsid" value="<?=$roomsData['id']?>">
				<select name="regionid">
					<option></option>
					<?  
						$line=0;
						foreach($regionsList as $item) {
					?>
					<option   <? if( $roomsData['regionid']==$item->id){ ?>selected<?}?>    value="<?=$item->id?>"><?=$item->name?></option>
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
					<option  <? if( $roomsData['studentheadid']==$item->id){ ?>selected<?}?> value="<?=$item->id?>"><?=$item->name?></option>
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
					<option <? if( $roomsData['campusid']==$item->id){ ?>selected<?}?> value="<?=$item->id?>"><?=$item->name?></option>
					<? } ?>
				</select>
          </td>
	    </tr>
        
		<tr> 
          <td width="17%" class="formcolor">Kapasitas</td>
          <td width="83%" class="formcolor"> 
            <input type="text"  name="capacity" value="<?=$roomsData['capacity']?>" size=5>

          </td>
        </tr>
        <tr> 
          <td width="17%" class="formcolor">Terisi</td>
          <td width="83%" class="formcolor"> 
            <input type="text"  name="filled" value="<?=$roomsData['filled']?>" readonly size=5>
          </td>
        </tr>
      </table>

      <!-- #EndEditable --></td>
		  <tr> 
    <td align="right">
		<input type="button" class="formbox" value=" Save " OnClick="javascript:this.form.submit()">
		<input type="button" class="formbox" value=" Refresh " OnClick="javascript:window.location='<?=site_url("master/rooms/listrooms");?>'">
	 	<input type="button" class="formbox" value=" Close " OnClick="javascript:window.close()">
	</td>
  </tr>  <tr>
    <td><!-- #BeginEditable "table" -->

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
			foreach($roomsList as $item) {
		?>
 
		<tr> 
			<td width="20%" class="kiritabel">
				<a href="<?=site_url("master/rooms/edit/roomsid/".$item->id);?>"><?=$item->name?></a>
			</td>
			<td width="20%" class="isitabel"><?=$item->parent?></td>
			<td width="20%" class="isitabel"><?=$item->regionname?></td>
			<td width="20%" class="isitabel"><?=$item->studentsname?></td>
			<td width="20%" class="isitabel"><?=$item->campusname?></td>
			<td width="10%" class="isitabel"><?=$item->capacity?></td>
			<td width="10%" class="isitabel"><?=$item->filled?></td>
			<td>
                    <a href="<?=site_url("master/students/remove/roomsid/".$item->id);?>">(hapus)</a>
			</td>
  
        </tr>
		  
		<?}?>		
		</table>
      <!-- #EndEditable -->
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
