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
<title>Master Periode</title>
<!-- #EndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="themes/default/template.css" type="text/css">
</head><body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" onLoad="placeFocus()">



<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <!--tr> 
    <td align="right"><img src="images/atslogo.jpg" width="42" height="30"></td>
  </tr-->
  <tr> 
    <td align="right" valign="center" class="submenu"><img src="images/dn_logo_smallest.gif"  align="left"><!-- #BeginEditable "judul" -->Master Periode<!-- #EndEditable --></td>
  </tr>
  <tr> 
    <td> 
      &nbsp;
<form name="period" method="post" action="<?=site_url("master/period/save");?>">

      <!-- #BeginEditable "isi" -->
      <table width="100%" border="0" cellpadding="0" cellspacing="0" dwcopytype="CopyTableCell">
        <tr> 
          <td width="18%" class="formcolor">Dari Tanggal</td>
          <td width="32%" class="formcolor"> 
            <input type="text" name="begin" size="25" value="<?=$periodData['begin']?>"> (yyyy-mm-dd)
          </td>
        </tr>
        <tr> 
          <td width="18%" class="formcolor">Hingga Tanggal</td>

          <td width="32%" class="formcolor"> 
            <input type="text" name="end" size="25" value="<?=$periodData['end']?>" > (yyyy-mm-dd)
          </td>
        </tr>
        <tr> 
          <td width="18%" class="formcolor">&nbsp;</td>
          <td width="32%" class="formcolor"> 
            <input type="checkbox" name="active" value="1" <?if(!empty($periodData['active'])){echo "checked=1";}?> > Aktif (Semester Berjalan) 
            <input type="hidden"  name="periodid" value="<?=$periodData['id']?>">
          </td>
        </tr>

      </table>
  <tr> 
    <td align="right">
	 	<input type="button" class="formbox" value=" Save " OnClick="javascript:this.form.submit()">
                <input type="button" class="formbox" value=" Refresh " OnClick="javascript:window.location='<?=site_url("master/period/page");?>'">	 	
	 	<input type="button" class="formbox" value=" Close " OnClick="javascript:window.close()">
	 	    </td>
  </tr>  <tr> 
    <td align="right">&nbsp;</td>

  </tr>
  <tr>
    <td><!-- #BeginEditable "table" -->
	<?=$paging;?>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr> 
                <td class="palareport" width="10%">No</td>
                <td class="palareport">Periode</td>
                <td class="palareport" width=20%>Semester Berjalan</td>
                <td>&nbsp;</td>
            </tr>
            <?  
                $line=0;
                foreach($periodList as $item) {
            ?>	         
            <tr> 
                <td class="kiritabel">&nbsp;<?=++$line?></td>
                <td class="isitabel">&nbsp;
                    <a href="<?=site_url("master/period/edit/periodid/".$item->periodid);?>"><?=$item->fromdate." - ".$item->todate ?></a>&nbsp;&nbsp;
                </td>
                <td class="isitabel">&nbsp;
                    <?
                        if ($item->active == 1){
                            echo "Ya"; 
                        }else{
                            echo "Tidak";
                        } ;
                    ?>
                </td>
                <td><a href="<?=site_url("master/period/remove/periodid/".$item->periodid);?>">(hapus)</a></td>
            </tr>
            <? }?>
        </table>
      <!-- #EndEditable --></td>

  </tr>
</table>
	<?=$paging;?>

</body>
</html>
