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

<!-- #BeginEditable "doctitle" --> 
<title>Master Konsulat</title>
<!-- #EndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="themes/default/template.css" type="text/css">
</head><body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" onLoad="placeFocus()">

<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td align="right" valign="center" class="submenu"><img src="images/dn_logo_smallest.gif"  align="left"><!-- #BeginEditable "judul" -->Master Konsulat<!-- #EndEditable --></td>
  </tr>
  <tr> 
    <td> 
      &nbsp;
<form name="consulate" method="post" action="<?=site_url("master/consulate/save");?>"> 
      <!-- #BeginEditable "isi" -->
      <table width="100%" border="0" cellpadding="0" cellspacing="0" dwcopytype="CopyTableCell">
        <tr> 
          <td width="18%" class="formcolor">Konsulat</td>
          <td width="32%" class="formcolor"> 
	<input type="hidden" name="consulateid" value="<?=$consulateData['id']?>">
            <input type="text" name="consulatename" size="25" value="<?=$consulateData['name']?>"> 
          </td>
        </tr>
      </table>

  <tr> 
    <td align="right">
	 	<input type="button" class="formbox" value=" Save " OnClick="javascript:this.form.submit()">
	 	
	 	
		<input type="button" class="formbox" value=" Refresh " OnClick="javascript:window.location='<?=site_url("master/consulate/page");?>'">
	 	
	 	<input type="button" class="formbox" value=" Close " OnClick="javascript:window.close()">
	 	    </td>
  </tr>  <tr> 
    <td align="right">&nbsp;</td>
  </tr>
<?=$this->validation->error_string; ?>
  <tr>
    <td><!-- #BeginEditable "table" -->
	<?=$paging;?>

      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td class="palareport" width="10%">No</td>
          <td class="palareport">Konsulat</td>
        </tr>
        <?  


            $line=0+$page= $this->uri->segment(4, 0);
            foreach($consulateList as $item) {
        ?>
            
            <tr> 
                <td class="kiritabel">&nbsp;<?=++$line?></td>
                <td class="isitabel">&nbsp;
                    <a href="<?=site_url("master/consulate/edit/consulateid/".$item->consulateid);?>"><?=$item->consulatename ?></a>&nbsp;&nbsp;
                    <a href="<?=site_url("master/consulate/remove/consulateid/".$item->consulateid);?>">(hapus)</a>
                </td>
        </tr>
        <? }?>
		        </table>
				<?=$paging;?>
      <!-- #EndEditable --></td>

  </tr>
</table>
</body>
</html>
