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
<title>Absensi</title>
<!-- #EndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="themes/default/template.css" type="text/css">
</head><body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" onLoad="placeFocus()">



<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <!--tr> 
    <td align="right"><img src="images/atslogo.jpg" width="42" height="30"></td>
  </tr-->
  <tr> 
    <td align="right" valign="center" class="submenu"><img src="images/dn_logo_smallest.gif"  align="left"><!-- #BeginEditable "judul" -->Absensi<!-- #EndEditable --></td>
  </tr>
  <tr> 
    <td> 
      &nbsp;
<form name="rimba" method="post" action="/~spawn/ppia/presence.php?action=save">

	<script language="javascript">
	function pageJump(id,type) {
		if (type == 'region') {
			window.location="presence.php?regionid="+id;
		}
		if (type == 'room') {
			region = document.getElementById('regionid');
			window.location="presence.php?roomid="+id+"&regionid="+region.value;
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
	 function selectAll() {
		
					
	}
	</script>

      <!-- #BeginEditable "isi" -->
      <table width="100%" border="0" cellpadding="0" cellspacing="0" dwcopytype="CopyTableCell">
        <tr> 
          <td width="18%" class="formcolor">Tanggal</td>
          <td width="32%" class="formcolor"> 
	<input type="hidden" name="presenceid" value="">
		<select name="Date_Day">

<option></option><option label="01" value="1">01</option>
<option label="02" value="2">02</option>
<option label="03" value="3">03</option>
<option label="04" value="4">04</option>
<option label="05" value="5" selected="selected">05</option>
<option label="06" value="6">06</option>
<option label="07" value="7">07</option>
<option label="08" value="8">08</option>
<option label="09" value="9">09</option>

<option label="10" value="10">10</option>
<option label="11" value="11">11</option>
<option label="12" value="12">12</option>
<option label="13" value="13">13</option>
<option label="14" value="14">14</option>
<option label="15" value="15">15</option>
<option label="16" value="16">16</option>
<option label="17" value="17">17</option>
<option label="18" value="18">18</option>

<option label="19" value="19">19</option>
<option label="20" value="20">20</option>
<option label="21" value="21">21</option>
<option label="22" value="22">22</option>
<option label="23" value="23">23</option>
<option label="24" value="24">24</option>
<option label="25" value="25">25</option>
<option label="26" value="26">26</option>
<option label="27" value="27">27</option>

<option label="28" value="28">28</option>
<option label="29" value="29">29</option>
<option label="30" value="30">30</option>
<option label="31" value="31">31</option>
</select>
<select name="Date_Month">
<option></option><option label="01" value="01">01</option>
<option label="02" value="02">02</option>
<option label="03" value="03">03</option>
<option label="04" value="04">04</option>

<option label="05" value="05">05</option>
<option label="06" value="06">06</option>
<option label="07" value="07">07</option>
<option label="08" value="08" selected="selected">08</option>
<option label="09" value="09">09</option>
<option label="10" value="10">10</option>
<option label="11" value="11">11</option>
<option label="12" value="12">12</option>
</select>

<select name="Date_Year">
<option></option><option label="2006" value="2006">2006</option>
<option label="2007" value="2007" selected="selected">2007</option>
<option label="2008" value="2008">2008</option>
</select> 
		<input type="button" class="formbox" value="Check" onClick="checkMe()">
          </td>
			</tr>
			<tr>
			<td colspan=2 class=formcolor>

			<table width=100% border="0" cellpadding="0" cellspacing="0">
				 <tr>
          <td width="17%" class="formcolor">Rayon</td>
          <td width="83%" class="formcolor">
				<input type="hidden" name="regionid" value="">
            <select id="regionid" onChange="pageJump(this.options[this.selectedIndex].value,'region');">
            <option></option><option label="ALHAMRA" value="14">ALHAMRA</option>
<option label="ARAFAH" value="12">ARAFAH</option>

<option label="ASEAN" value="7">ASEAN</option>
<option label="CORDOBA" value="17">CORDOBA</option>
<option label="GRANADA" value="15">GRANADA</option>
<option label="MADINAH" value="8">MADINAH</option>
<option label="MAKKAH" value="9">MAKKAH</option>
<option label="MESIR" value="6">MESIR</option>
<option label="MINA" value="13">MINA</option>
<option label="NUSANTARA" value="11">NUSANTARA</option>
<option label="RINBA" value="10">RINBA</option>

<option label="ROBITHOH" value="16">ROBITHOH</option>

            </select>
          </td>
			<td width="17%" class="formcolor">Musyrif/Musyrifah</td>
          <td width="83%" class="formcolor">
            <input type="text" readonly name="parent" value="" size=25>
          </td>
        </tr>

			<tr>
			 <td width="17%" class="formcolor">Kamar</td>
          <td width="83%" class="formcolor">
            <input type="hidden" id="roomid" name="roomid" value="">
            <select onchange="pageJump(this.options[this.selectedIndex].value,'room');">
            <option></option>
            </select>
          </td>

			<td width="17%" class="formcolor">Ketua Kamar</td>
          <td width="83%" class="formcolor">
            <input type="hidden" id="studentid" name="studentheadid" value="">
            <input type=text size=25 readonly id="studentname" value=""> &nbsp;
          </td>
			</tr>
			<tr>
			<td width="17%" class="formcolor">Kampus</td>

          <td width="83%" class="formcolor">
            <select name="campusid" disabled>
            <option></option><option label="Darunnajah 1" value="3">Darunnajah 1</option>

            </select>
          </td>
 <td width="17%" class="formcolor">Kapasitas</td>
          <td width="83%" class="formcolor">

            <input type="text"  name="capacity" value="" size=5>
          </td>
			</tr>
			</table>
			</td>
        </tr>
      </table>
  <tr> 
    <td align="right">

	 	<input type="button" class="formbox" value=" Save " OnClick="javascript:this.form.submit()">
	 	
	 	
		<input type="button" class="formbox" value=" Refresh " OnClick="javascript:window.location='/~spawn/ppia/presence.php?'">
	 	
	 	<input type="button" class="formbox" value=" Close " OnClick="javascript:window.close()">
	 	    </td>
  </tr>  <tr> 
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td><!-- #BeginEditable "table" -->

	<input class="formbox" type="button" name="selAll" onClick="selectAll()" value="Select Hadir">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td class="palareport" width="20%">No Induk</td>
          <td class="palareport">Nama Lengkap</td>
          <td class="palareport">Kelas</td>
          <td class="palareport" width="10%">H</td>

          <td class="palareport" width="10%">I</td>
          <td class="palareport" width="10%">A</td>
          <td class="palareport" width="10%">S</td>
        </tr>
		       </table>
      <!-- #EndEditable --></td>
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
