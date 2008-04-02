<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" >
<html>
  <!-- #BeginTemplate "/Templates/ats.dwt" -->
  <head>
    <SCRIPT LANGUAGE="JavaScript">

<!-- Begin
function placeFocus() {
if (document.forms.length > 0) {
var field = document.forms[0];
for (i = 0; i < field.length; i++) {
if ((field.element[i].type == "text") || (field.element[i].type == "textarea") || (field.element[i].type.toString().charAt(0) == "s")) {
document.forms[0].element[i].focus();
break;
         }
          }
             }
        }
//  End -->

</script>


<!-- #BeginEditable "doctitle" --><title>Master Siswa</title>
<!-- #EndEditable -->
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" href="themes/default/template.css" type="text/css">
  </head>
  <body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" onLoad="placeFocus()">
    <table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
      <!--tr> 
    <td align="right"><img src="images/atslogo.jpg" width="42" height="30"></td>
  </tr-->
      <tr>
        <td align="right" valign="center" class="submenu">
          <img src="images/dn_logo_smallest.gif"  align="left"><!-- #BeginEditable "judul" -->Master Siswa<!-- #EndEditable -->
        </td>
      </tr>
      <tr>
        <td>
           &nbsp; 
          <form name="rimba" method="post" action="<?=site_url("master/student/save");?>">
            <!-- #BeginEditable "isi" -->
            <table width="100%" border="0" cellpadding="0" cellspacing="0" >
              <tr>
                <td width="32%" class="formcolor">
                   Nomor Induk 
                </td>
                <td width="34%" class="formcolor">
                  <input type="text" name="regnumber" value="<?=$studentData->regnumber ?>" size="10">
                  
				  <input type="hidden" name="studentid" value="<?=$studentData->studentid ?>">
                </td>
              </tr>
              <tr>
                <td width="32%" class="formcolor">
                   Nama 
                </td>
                <td width="68%" class="formcolor">
                  <input type="text" name="name"  size="35" value="<?=$studentData->name?>">
                </td>
              </tr>
              <tr>
                <td width="32%" class="formcolor">
                   Kelas 
                </td>
				
                <td width="68%" class="formcolor">
                  <input type="text" name="class"  size="8" value="<?=$studentData->classid?>">
                </td>
              </tr>
			  
              <tr>
                <td width="32%" class="formcolor">
                   Nama Orang Tua 
                </td>
                <td width="68%" class="formcolor">
                  <input type="text" name="parent"  size="35" value="<?=$studentData->parent?>">
                </td>
              </tr>
              <tr>
                <td width="32%" class="formcolor">
                   Alamat 
                </td>
                <td width="68%" class="formcolor">
                  <textarea name="address" cols="45" ><?=$studentData->address?></textarea>
                </td>
              </tr>
              <tr>
                <td width="32%" class="formcolor">
                   Kota 
                </td>
                <td width="68%" class="formcolor">
                  <input type="text" name="cityid"  size="16" value="<?=$studentData->cityid?>">
                </td>
              <tr>
                <td width="32%" class="formcolor">
                   Nomor Telpon 
                </td>
                <td width="68%" class="formcolor">
                  <input type="text" name="phonenumber"  size="16" value="<?=$studentData->phonenumber?>">
                </td>
              <tr>
                <td width="32%" class="formcolor">
                   Tanggal Lahir 
                </td>
                <td width="68%" class="formcolor">
                  <input type="text" name="birthdate"  size="16" value="<?=$studentData->birthdate?>">
                </td>
              </tr>
              <tr>
                <td width="32%" class="formcolor">
                   Kota Lahir 
                </td>
                <td width="68%" class="formcolor">
                  <input type="text" name="birthplace"  size="16" value="<?=$studentData->birthplace?>">
                </td>
              <tr>
                <td width="32%" class="formcolor">
                   &nbsp; 
                </td>
                <td width="68%" class="formcolor">
                   &nbsp; 
                </td>
              </tr>
            </table>
            <tr>
              <td align="right">
                <input type="button" class="formbox" value=" Save " OnClick="javascript:this.form.submit()">
		<input disabled type="button" class="formbox" value=" Search " OnClick="javascript:window.location='db_lookup.php?ref=mt_student.php'">
		<input type="button" class="formbox" value=" Refresh " OnClick="javascript:window.location='<?=site_url("master/student/page");?>'">
                <input type="button" class="formbox" value=" Close " OnClick="javascript:window.close()">
              </td>
            </tr>
            <tr>
              <td align="right">
                 &nbsp; 
              </td>
            </tr>
            <tr>
              <!-- #BeginEditable "table" -->
				<?=$paging;?>
  
              <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="palareport" width="10%">
                     No 
                  </td>
                  <td class="palareport">
                     Nomor Induk 
                  </td>
                  <td class="palareport">
                     Nama 
                  </td>
                  <td class="palareport">
                     Nama Orang Tua 
                  </td>
                  <td class="palareport">
                     Alamat 
                  </td>
                  <td class="palareport">
                     Kota 
                  </td>
                  <td class="palareport">
                     Nomor Telpon 
                  </td>
                  <td class="palareport">
                     Tanggal Lahir 
                  </td>
                  <td class="palareport">
                     Kota Lahir 
                  </td>
                  <td class="palareport">
                     &nbsp; 
                  </td>
                </tr>
                <?  
			$line=0;
			foreach($studentList as $item) {
                ?>
                <tr>
                  <td class="kiritabel">
                     &nbsp;<?=++$line 
                    ?>
                  </td>
                  <td class="isitabel">
                     &nbsp; <a href="<?=site_url("master/student/edit/studentid/".$item->studentid);?>"><?=$item->regnumber ?></a>&nbsp;&nbsp; 
                  </td>
                  <td>
                    <?=$item->name ?>
                  </td>
                  <td>
                    <?=$item->parent 
                    ?>
                  </td>
                  <td>
                    <?=$item->address 
                    ?>
                  </td>
                  <td>
                    <?=$item->cityid 
                    ?>
                  </td>
                  <td>
                    <?=$item->phonenumber 
                    ?>
                  </td>
                  <td>
                    <?=$item->birthdate 
                    ?>
                  </td>
                  <td>
                    <?=$item->birthplace 
                    ?>
                  </td>
                  <td>
                    <a href="<?=site_url("master/student/remove/studentid/".$item->studentid);?>">(hapus)</a>
                  </td>
                </tr>
                <? } 
                ?>
              </table>
              <!-- #EndEditable -->
            </tr>
            </table>
			<?=$paging;?>

            </body>
            </html>


