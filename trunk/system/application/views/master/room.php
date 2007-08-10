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

<form name="rimba" method="post" action="/~spawn/ppia/mt_room.php?action=save">
    <!-- #BeginEditable "isi" --> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
          <td width="17%" class="formcolor">Nama</td>
          <td width="83%" class="formcolor">
            <input type="text" name="name" value="" size=25>
          </td>
        </tr>

	<tr>
          <td width="17%" class="formcolor">Musyrif/Musyrifah</td>
          <td width="83%" class="formcolor">
            <input type="text" name="parent" value="" size=25>
          </td>
        </tr>

        <tr> 
          <td width="17%" class="formcolor">Rayon</td>

          <td width="83%" class="formcolor"> 
				<input type="hidden" name="roomid" value="">
				<select name="regionid">
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
        </tr>

        <tr> 
          <td width="17%" class="formcolor">Ketua Kamar</td>
          <td width="83%" class="formcolor">
				<input type="hidden" id="studentid" name="studentheadid" value="">
				<input type=text size=25 readonly id="studentname" value=""> &nbsp; 
				<input type="button" class="formbox" value=" Pilih Siswa... " onClick="javascript:window.open('db_lookup.php?opener=1','Search Student','width=600,height=400,menubar=no,toolbar=no,location=no')">
          </td>
        </tr>
        <tr> 
          <td width="17%" class="formcolor">Kampus</td>

          <td width="83%" class="formcolor"> 
				<select name="campusid">
				<option></option><option label="Darunnajah 1" value="3">Darunnajah 1</option>
	
				</select>
          </td>
        </tr>
        <tr> 
          <td width="17%" class="formcolor">Kapasitas</td>
          <td width="83%" class="formcolor"> 
            <input type="text"  name="capacity" value="" size=5>

          </td>
        </tr>
        <tr> 
          <td width="17%" class="formcolor">Terisi</td>
          <td width="83%" class="formcolor"> 
            <input type="text"  name="filled" value="" disabled size=5>
          </td>
        </tr>
      </table>

      <!-- #EndEditable --></td>
		  <tr> 
    <td align="right">
	 	<input type="button" class="formbox" value=" Save " OnClick="javascript:this.form.submit()">
	 	
	 	
		<input type="button" class="formbox" value=" Refresh " OnClick="javascript:window.location='/~spawn/ppia/mt_room.php?'">
	 	
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
        </tr>
		         <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=11">ASEAN 2</a></td>
          <td width="20%" class="isitabel">Ust. Iwan Halwani, S.Ag </td>
          <td width="20%" class="isitabel">ASEAN</td>

          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel">10</td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=12">ASEAN 3</a></td>

          <td width="20%" class="isitabel">Ust. Cariwan, S.H.I </td>
          <td width="20%" class="isitabel">ASEAN</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel">10</td>
          <td width="10%" class="isitabel">7</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=13">ASEAN 4</a></td>
          <td width="20%" class="isitabel">Ust. Nurhamid, lc, M.Pd. </td>
          <td width="20%" class="isitabel">ASEAN</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>

          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=14">ASEAN 5</a></td>
          <td width="20%" class="isitabel">Ust. Nurus Siroj, S.Pd. </td>
          <td width="20%" class="isitabel">ASEAN</td>

          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=15">ASEAN 6</a></td>

          <td width="20%" class="isitabel">Ust. Cariwan, S.H.I </td>
          <td width="20%" class="isitabel">ASEAN</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=16">MADINAH 1</a></td>
          <td width="20%" class="isitabel">Ust. H. Imam Ibnu Hajar, M.Ag </td>
          <td width="20%" class="isitabel">MADINAH</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>

          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=17">MADINAH 2</a></td>
          <td width="20%" class="isitabel">Ust. Awarudin </td>
          <td width="20%" class="isitabel">MADINAH</td>

          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=18">MAKKAH 1</a></td>

          <td width="20%" class="isitabel">Ust. Ahmad Mustaghfirin </td>
          <td width="20%" class="isitabel">MAKKAH</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=19">MAKKAH 2</a></td>
          <td width="20%" class="isitabel">Ust. Agus Sugianto, S.Ag </td>
          <td width="20%" class="isitabel">MAKKAH</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>

          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=20">MAKKAH 3</a></td>
          <td width="20%" class="isitabel">Ust. Nurudin Ambari, S.Ag </td>
          <td width="20%" class="isitabel">MAKKAH</td>

          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=21">MESIR 1</a></td>

          <td width="20%" class="isitabel">Ust. Fady Zulham Shah </td>
          <td width="20%" class="isitabel">MESIR</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=22">MESIR 2</a></td>
          <td width="20%" class="isitabel">Ust. Fady Zulham Shah </td>
          <td width="20%" class="isitabel">MESIR</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>

          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=23">MESIR 3</a></td>
          <td width="20%" class="isitabel">Ust. Fady Zulham Shah </td>
          <td width="20%" class="isitabel">MESIR</td>

          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=24">NUSANTARA</a></td>

          <td width="20%" class="isitabel">Ust. Nurus Siroj, S.Pd. </td>
          <td width="20%" class="isitabel">NUSANTARA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=25">NUSANTARA 201</a></td>
          <td width="20%" class="isitabel">Ust. A. Bayu Abdullah </td>
          <td width="20%" class="isitabel">NUSANTARA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>

          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=26">NUSANTARA 202</a></td>
          <td width="20%" class="isitabel">Ust. Zamroni Wafa </td>
          <td width="20%" class="isitabel">NUSANTARA</td>

          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=27">NUSANTARA 203</a></td>

          <td width="20%" class="isitabel">Ust. Ahmad Agil Winanto </td>
          <td width="20%" class="isitabel">NUSANTARA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=28">NUSANTARA 204</a></td>
          <td width="20%" class="isitabel">Ust. M. Yusro </td>
          <td width="20%" class="isitabel">NUSANTARA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>

          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=29">NUSANTARA 205</a></td>
          <td width="20%" class="isitabel">Ust. Agus Suhendi </td>
          <td width="20%" class="isitabel">NUSANTARA</td>

          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=30">NUSANTARA 206</a></td>

          <td width="20%" class="isitabel">Ust. Syukron Asyari </td>
          <td width="20%" class="isitabel">NUSANTARA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=31">NUSANTARA 207</a></td>
          <td width="20%" class="isitabel">Ust. M. Ali Sodikin </td>
          <td width="20%" class="isitabel">NUSANTARA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>

          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=32">NUSANTARA 301 A</a></td>
          <td width="20%" class="isitabel">Ust. Nasirin </td>
          <td width="20%" class="isitabel">NUSANTARA</td>

          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=33">NUSANTARA 301 B</a></td>

          <td width="20%" class="isitabel">Ust. Matnur Ritonga </td>
          <td width="20%" class="isitabel">NUSANTARA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=34">NUSANTARA 302</a></td>
          <td width="20%" class="isitabel">Ust. Choirus Sholeh </td>
          <td width="20%" class="isitabel">NUSANTARA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>

          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=35">NUSANTARA 302 </a></td>
          <td width="20%" class="isitabel">Ust. Choirus Sholeh </td>
          <td width="20%" class="isitabel">NUSANTARA</td>

          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=36">NUSANTARA 303</a></td>

          <td width="20%" class="isitabel">Ust. Kusnadi </td>
          <td width="20%" class="isitabel">NUSANTARA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=37">NUSANTARA 304</a></td>
          <td width="20%" class="isitabel">Ust. Ridwan Nurmawan, S.Th.I </td>
          <td width="20%" class="isitabel">NUSANTARA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>

          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=38">NUSANTARA 305</a></td>
          <td width="20%" class="isitabel">Ust. Syukur Yakub, S.E.I </td>
          <td width="20%" class="isitabel">NUSANTARA</td>

          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=39">NUSANTARA 306</a></td>

          <td width="20%" class="isitabel">Ust. Asro Kamali </td>
          <td width="20%" class="isitabel">NUSANTARA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=40">NUSANTARA 307</a></td>
          <td width="20%" class="isitabel">Ust. Hanun Rusdianto </td>
          <td width="20%" class="isitabel">NUSANTARA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>

          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=41">RINBA 201</a></td>
          <td width="20%" class="isitabel">Ust. Nofriadi </td>
          <td width="20%" class="isitabel">RINBA</td>

          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=42">RINBA 202</a></td>

          <td width="20%" class="isitabel">Ust. Nofriadi </td>
          <td width="20%" class="isitabel">RINBA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=43">RINBA 203</a></td>
          <td width="20%" class="isitabel">Ust. Ali Yusuf Syakir </td>
          <td width="20%" class="isitabel">RINBA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>

          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=44">RINBA 204</a></td>
          <td width="20%" class="isitabel">Ust. Ali Yusuf Syakir </td>
          <td width="20%" class="isitabel">RINBA</td>

          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=45">RINBA 205</a></td>

          <td width="20%" class="isitabel">Ust. M. Fajar N </td>
          <td width="20%" class="isitabel">RINBA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=46">RINBA 206</a></td>
          <td width="20%" class="isitabel">Ust. M. Fajar N </td>
          <td width="20%" class="isitabel">RINBA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>

          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=47">RINBA 207</a></td>
          <td width="20%" class="isitabel">Ust. Nana Sutisna </td>
          <td width="20%" class="isitabel">RINBA</td>

          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=48">RINBA 208</a></td>

          <td width="20%" class="isitabel">Ust. Rahmat Ghusnul A. </td>
          <td width="20%" class="isitabel">RINBA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=49">RINBA 209</a></td>
          <td width="20%" class="isitabel">Ust. Sibrin Mukhlis </td>
          <td width="20%" class="isitabel">RINBA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>

          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=50">RINBA 210</a></td>
          <td width="20%" class="isitabel">Ust. Sibrin Mukhlis </td>
          <td width="20%" class="isitabel">RINBA</td>

          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=51">RINBA 301</a></td>

          <td width="20%" class="isitabel">Ust. Rifai Mufadhol </td>
          <td width="20%" class="isitabel">RINBA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=52">RINBA 302</a></td>
          <td width="20%" class="isitabel">Ust. Rifai Mufadhol </td>
          <td width="20%" class="isitabel">RINBA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>

          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=53">RINBA 303</a></td>
          <td width="20%" class="isitabel">Ust. Ahmad Muammar </td>
          <td width="20%" class="isitabel">RINBA</td>

          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=54">RINBA 304</a></td>

          <td width="20%" class="isitabel">Ust. Jeni Heriyanto </td>
          <td width="20%" class="isitabel">RINBA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=55">RINBA 305</a></td>
          <td width="20%" class="isitabel">Ust. Arif M. Iqbal </td>
          <td width="20%" class="isitabel">RINBA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>

          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=56">RINBA 306</a></td>
          <td width="20%" class="isitabel">Ust. Arif M. Iqbal </td>
          <td width="20%" class="isitabel">RINBA</td>

          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=57">RINBA 307</a></td>

          <td width="20%" class="isitabel">Ust. M. Ilmi Wirawan </td>
          <td width="20%" class="isitabel">RINBA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=58">RINBA 308</a></td>
          <td width="20%" class="isitabel">Ust. Ahmad Awaludin </td>
          <td width="20%" class="isitabel">RINBA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>

          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=59">RINBA 309</a></td>
          <td width="20%" class="isitabel">M. Yusuf Wibisono </td>
          <td width="20%" class="isitabel">RINBA</td>

          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=60">RINBA 310</a></td>

          <td width="20%" class="isitabel">M. Yusuf Wibisono </td>
          <td width="20%" class="isitabel">RINBA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=61">RINBA 401</a></td>
          <td width="20%" class="isitabel">Ust. Bahrul Arifudin </td>
          <td width="20%" class="isitabel">RINBA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>

          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=62">RINBA 402</a></td>
          <td width="20%" class="isitabel">Ust. Husni Tamrin </td>
          <td width="20%" class="isitabel">RINBA</td>

          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=63">RINBA 403</a></td>

          <td width="20%" class="isitabel">Ust. Iwan Hasan B. </td>
          <td width="20%" class="isitabel">RINBA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=64">RINBA 404</a></td>
          <td width="20%" class="isitabel">Ust. Iwan Hasan Basori </td>
          <td width="20%" class="isitabel">RINBA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>

          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=65">RINBA 405</a></td>
          <td width="20%" class="isitabel">Ust. Dwi Bagus Imawan </td>
          <td width="20%" class="isitabel">RINBA</td>

          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=66">RINBA 406</a></td>

          <td width="20%" class="isitabel">Ust. Dwi Bagus Imawan </td>
          <td width="20%" class="isitabel">RINBA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=67">RINBA 407</a></td>
          <td width="20%" class="isitabel">Ust. H. Kurniawan Arif </td>
          <td width="20%" class="isitabel">RINBA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>

          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=68">RINBA 408</a></td>
          <td width="20%" class="isitabel">Ust. Farhan Kamilulloh </td>
          <td width="20%" class="isitabel">RINBA</td>

          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=69">RINBA 409</a></td>

          <td width="20%" class="isitabel">Ust. Putra Perdana </td>
          <td width="20%" class="isitabel">RINBA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>
          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel"><a href="/~spawn/ppia/mt_room.php?action=edit&roomid=70">RINBA 410</a></td>
          <td width="20%" class="isitabel">Ust. Abdullah </td>
          <td width="20%" class="isitabel">RINBA</td>
          <td width="20%" class="isitabel">AHMAD FAROUQ</td>
          <td width="20%" class="isitabel">Darunnajah 1</td>

          <td width="10%" class="isitabel"></td>
          <td width="10%" class="isitabel">0</td>
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
