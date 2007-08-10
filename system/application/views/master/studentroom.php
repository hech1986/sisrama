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
<title>Siswa Kamar</title>
<!-- #EndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="themes/default/template.css" type="text/css">
</head><body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" onLoad="placeFocus()">




<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <!--tr> 
    <td align="right"><img src="images/atslogo.jpg" width="42" height="30"></td>
  </tr-->
  <tr> 
    <td align="right" valign="center" class="submenu"><img src="images/dn_logo_smallest.gif"  align="left"><!-- #BeginEditable "judul" -->Siswa Kamar<!-- #EndEditable --></td>
  </tr>
  <tr> 
    <td> 
      &nbsp;

<form name="rimba" method="post" action="/~spawn/ppia/roomstudent.php?action=save">
		<script>
		
			function changeClass(url) {
				window.location="roomstudent.php?roomid="+url;
			}
		
		</script>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
		<td class="formcolor">
 		Dari
		<select name="fromroom" onChange="changeClass(this.options[this.selectedIndex].value)">
	<option value="-1"> -- Siswa Baru -- </option>

	<option></option><option label="ASEAN 2   (Ust. Iwan Halwani, S.Ag)" value="11">ASEAN 2   (Ust. Iwan Halwani, S.Ag)</option>
<option label="ASEAN 3   (Ust. Cariwan, S.H.I)" value="12">ASEAN 3   (Ust. Cariwan, S.H.I)</option>
<option label="ASEAN 4   (Ust. Nurhamid, lc, M.Pd.)" value="13">ASEAN 4   (Ust. Nurhamid, lc, M.Pd.)</option>
<option label="ASEAN 5   (Ust. Nurus Siroj, S.Pd.)" value="14">ASEAN 5   (Ust. Nurus Siroj, S.Pd.)</option>
<option label="ASEAN 6   (Ust. Cariwan, S.H.I)" value="15">ASEAN 6   (Ust. Cariwan, S.H.I)</option>
<option label="MADINAH 1   (Ust. H. Imam Ibnu Hajar, M.Ag)" value="16">MADINAH 1   (Ust. H. Imam Ibnu Hajar, M.Ag)</option>
<option label="MADINAH 2   (Ust. Awarudin)" value="17">MADINAH 2   (Ust. Awarudin)</option>
<option label="MAKKAH 1   (Ust. Ahmad Mustaghfirin)" value="18">MAKKAH 1   (Ust. Ahmad Mustaghfirin)</option>

<option label="MAKKAH 2   (Ust. Agus Sugianto, S.Ag)" value="19">MAKKAH 2   (Ust. Agus Sugianto, S.Ag)</option>
<option label="MAKKAH 3   (Ust. Nurudin Ambari, S.Ag)" value="20">MAKKAH 3   (Ust. Nurudin Ambari, S.Ag)</option>
<option label="MESIR 1   (Ust. Fady Zulham Shah)" value="21">MESIR 1   (Ust. Fady Zulham Shah)</option>
<option label="MESIR 2   (Ust. Fady Zulham Shah)" value="22">MESIR 2   (Ust. Fady Zulham Shah)</option>
<option label="MESIR 3   (Ust. Fady Zulham Shah)" value="23">MESIR 3   (Ust. Fady Zulham Shah)</option>
<option label="NUSANTARA   (Ust. Nurus Siroj, S.Pd.)" value="24">NUSANTARA   (Ust. Nurus Siroj, S.Pd.)</option>
<option label="NUSANTARA 201   (Ust. A. Bayu Abdullah)" value="25">NUSANTARA 201   (Ust. A. Bayu Abdullah)</option>
<option label="NUSANTARA 202   (Ust. Zamroni Wafa)" value="26">NUSANTARA 202   (Ust. Zamroni Wafa)</option>
<option label="NUSANTARA 203   (Ust. Ahmad Agil Winanto)" value="27">NUSANTARA 203   (Ust. Ahmad Agil Winanto)</option>

<option label="NUSANTARA 204   (Ust. M. Yusro)" value="28">NUSANTARA 204   (Ust. M. Yusro)</option>
<option label="NUSANTARA 205   (Ust. Agus Suhendi)" value="29">NUSANTARA 205   (Ust. Agus Suhendi)</option>
<option label="NUSANTARA 206   (Ust. Syukron Asyari)" value="30">NUSANTARA 206   (Ust. Syukron Asyari)</option>
<option label="NUSANTARA 207   (Ust. M. Ali Sodikin)" value="31">NUSANTARA 207   (Ust. M. Ali Sodikin)</option>
<option label="NUSANTARA 301 A   (Ust. Nasirin)" value="32">NUSANTARA 301 A   (Ust. Nasirin)</option>
<option label="NUSANTARA 301 B   (Ust. Matnur Ritonga)" value="33">NUSANTARA 301 B   (Ust. Matnur Ritonga)</option>
<option label="NUSANTARA 302   (Ust. Choirus Sholeh)" value="34">NUSANTARA 302   (Ust. Choirus Sholeh)</option>
<option label="NUSANTARA 302    (Ust. Choirus Sholeh)" value="35">NUSANTARA 302    (Ust. Choirus Sholeh)</option>
<option label="NUSANTARA 303   (Ust. Kusnadi)" value="36">NUSANTARA 303   (Ust. Kusnadi)</option>

<option label="NUSANTARA 304   (Ust. Ridwan Nurmawan, S.Th.I)" value="37">NUSANTARA 304   (Ust. Ridwan Nurmawan, S.Th.I)</option>
<option label="NUSANTARA 305   (Ust. Syukur Yakub, S.E.I)" value="38">NUSANTARA 305   (Ust. Syukur Yakub, S.E.I)</option>
<option label="NUSANTARA 306   (Ust. Asro Kamali)" value="39">NUSANTARA 306   (Ust. Asro Kamali)</option>
<option label="NUSANTARA 307   (Ust. Hanun Rusdianto)" value="40">NUSANTARA 307   (Ust. Hanun Rusdianto)</option>
<option label="RINBA 201   (Ust. Nofriadi)" value="41">RINBA 201   (Ust. Nofriadi)</option>
<option label="RINBA 202   (Ust. Nofriadi)" value="42">RINBA 202   (Ust. Nofriadi)</option>
<option label="RINBA 203   (Ust. Ali Yusuf Syakir)" value="43">RINBA 203   (Ust. Ali Yusuf Syakir)</option>
<option label="RINBA 204   (Ust. Ali Yusuf Syakir)" value="44">RINBA 204   (Ust. Ali Yusuf Syakir)</option>
<option label="RINBA 205   (Ust. M. Fajar N)" value="45">RINBA 205   (Ust. M. Fajar N)</option>

<option label="RINBA 206   (Ust. M. Fajar N)" value="46">RINBA 206   (Ust. M. Fajar N)</option>
<option label="RINBA 207   (Ust. Nana Sutisna)" value="47">RINBA 207   (Ust. Nana Sutisna)</option>
<option label="RINBA 208   (Ust. Rahmat Ghusnul A.)" value="48">RINBA 208   (Ust. Rahmat Ghusnul A.)</option>
<option label="RINBA 209   (Ust. Sibrin Mukhlis)" value="49">RINBA 209   (Ust. Sibrin Mukhlis)</option>
<option label="RINBA 210   (Ust. Sibrin Mukhlis)" value="50">RINBA 210   (Ust. Sibrin Mukhlis)</option>
<option label="RINBA 301   (Ust. Rifai Mufadhol)" value="51">RINBA 301   (Ust. Rifai Mufadhol)</option>
<option label="RINBA 302   (Ust. Rifai Mufadhol)" value="52">RINBA 302   (Ust. Rifai Mufadhol)</option>
<option label="RINBA 303   (Ust. Ahmad Muammar)" value="53">RINBA 303   (Ust. Ahmad Muammar)</option>
<option label="RINBA 304   (Ust. Jeni Heriyanto)" value="54">RINBA 304   (Ust. Jeni Heriyanto)</option>

<option label="RINBA 305   (Ust. Arif M. Iqbal)" value="55">RINBA 305   (Ust. Arif M. Iqbal)</option>
<option label="RINBA 306   (Ust. Arif M. Iqbal)" value="56">RINBA 306   (Ust. Arif M. Iqbal)</option>
<option label="RINBA 307   (Ust. M. Ilmi Wirawan)" value="57">RINBA 307   (Ust. M. Ilmi Wirawan)</option>
<option label="RINBA 308   (Ust. Ahmad Awaludin)" value="58">RINBA 308   (Ust. Ahmad Awaludin)</option>
<option label="RINBA 309   (M. Yusuf Wibisono)" value="59">RINBA 309   (M. Yusuf Wibisono)</option>
<option label="RINBA 310   (M. Yusuf Wibisono)" value="60">RINBA 310   (M. Yusuf Wibisono)</option>
<option label="RINBA 401   (Ust. Bahrul Arifudin)" value="61">RINBA 401   (Ust. Bahrul Arifudin)</option>
<option label="RINBA 402   (Ust. Husni Tamrin)" value="62">RINBA 402   (Ust. Husni Tamrin)</option>
<option label="RINBA 403   (Ust. Iwan Hasan B.)" value="63">RINBA 403   (Ust. Iwan Hasan B.)</option>

<option label="RINBA 404   (Ust. Iwan Hasan Basori)" value="64">RINBA 404   (Ust. Iwan Hasan Basori)</option>
<option label="RINBA 405   (Ust. Dwi Bagus Imawan)" value="65">RINBA 405   (Ust. Dwi Bagus Imawan)</option>
<option label="RINBA 406   (Ust. Dwi Bagus Imawan)" value="66">RINBA 406   (Ust. Dwi Bagus Imawan)</option>
<option label="RINBA 407   (Ust. H. Kurniawan Arif)" value="67">RINBA 407   (Ust. H. Kurniawan Arif)</option>
<option label="RINBA 408   (Ust. Farhan Kamilulloh)" value="68">RINBA 408   (Ust. Farhan Kamilulloh)</option>
<option label="RINBA 409   (Ust. Putra Perdana)" value="69">RINBA 409   (Ust. Putra Perdana)</option>
<option label="RINBA 410   (Ust. Abdullah)" value="70">RINBA 410   (Ust. Abdullah)</option>

		</select>

			</td>
		<td class="formcolor">
 		Pindahkan ke Kamar <select name="toroom">
	<option></option><option label="ASEAN 2   (Ust. Iwan Halwani, S.Ag)" value="11">ASEAN 2   (Ust. Iwan Halwani, S.Ag)</option>
<option label="ASEAN 3   (Ust. Cariwan, S.H.I)" value="12">ASEAN 3   (Ust. Cariwan, S.H.I)</option>
<option label="ASEAN 4   (Ust. Nurhamid, lc, M.Pd.)" value="13">ASEAN 4   (Ust. Nurhamid, lc, M.Pd.)</option>
<option label="ASEAN 5   (Ust. Nurus Siroj, S.Pd.)" value="14">ASEAN 5   (Ust. Nurus Siroj, S.Pd.)</option>
<option label="ASEAN 6   (Ust. Cariwan, S.H.I)" value="15">ASEAN 6   (Ust. Cariwan, S.H.I)</option>

<option label="MADINAH 1   (Ust. H. Imam Ibnu Hajar, M.Ag)" value="16">MADINAH 1   (Ust. H. Imam Ibnu Hajar, M.Ag)</option>
<option label="MADINAH 2   (Ust. Awarudin)" value="17">MADINAH 2   (Ust. Awarudin)</option>
<option label="MAKKAH 1   (Ust. Ahmad Mustaghfirin)" value="18">MAKKAH 1   (Ust. Ahmad Mustaghfirin)</option>
<option label="MAKKAH 2   (Ust. Agus Sugianto, S.Ag)" value="19">MAKKAH 2   (Ust. Agus Sugianto, S.Ag)</option>
<option label="MAKKAH 3   (Ust. Nurudin Ambari, S.Ag)" value="20">MAKKAH 3   (Ust. Nurudin Ambari, S.Ag)</option>
<option label="MESIR 1   (Ust. Fady Zulham Shah)" value="21">MESIR 1   (Ust. Fady Zulham Shah)</option>
<option label="MESIR 2   (Ust. Fady Zulham Shah)" value="22">MESIR 2   (Ust. Fady Zulham Shah)</option>
<option label="MESIR 3   (Ust. Fady Zulham Shah)" value="23">MESIR 3   (Ust. Fady Zulham Shah)</option>
<option label="NUSANTARA   (Ust. Nurus Siroj, S.Pd.)" value="24">NUSANTARA   (Ust. Nurus Siroj, S.Pd.)</option>

<option label="NUSANTARA 201   (Ust. A. Bayu Abdullah)" value="25">NUSANTARA 201   (Ust. A. Bayu Abdullah)</option>
<option label="NUSANTARA 202   (Ust. Zamroni Wafa)" value="26">NUSANTARA 202   (Ust. Zamroni Wafa)</option>
<option label="NUSANTARA 203   (Ust. Ahmad Agil Winanto)" value="27">NUSANTARA 203   (Ust. Ahmad Agil Winanto)</option>
<option label="NUSANTARA 204   (Ust. M. Yusro)" value="28">NUSANTARA 204   (Ust. M. Yusro)</option>
<option label="NUSANTARA 205   (Ust. Agus Suhendi)" value="29">NUSANTARA 205   (Ust. Agus Suhendi)</option>
<option label="NUSANTARA 206   (Ust. Syukron Asyari)" value="30">NUSANTARA 206   (Ust. Syukron Asyari)</option>
<option label="NUSANTARA 207   (Ust. M. Ali Sodikin)" value="31">NUSANTARA 207   (Ust. M. Ali Sodikin)</option>
<option label="NUSANTARA 301 A   (Ust. Nasirin)" value="32">NUSANTARA 301 A   (Ust. Nasirin)</option>
<option label="NUSANTARA 301 B   (Ust. Matnur Ritonga)" value="33">NUSANTARA 301 B   (Ust. Matnur Ritonga)</option>

<option label="NUSANTARA 302   (Ust. Choirus Sholeh)" value="34">NUSANTARA 302   (Ust. Choirus Sholeh)</option>
<option label="NUSANTARA 302    (Ust. Choirus Sholeh)" value="35">NUSANTARA 302    (Ust. Choirus Sholeh)</option>
<option label="NUSANTARA 303   (Ust. Kusnadi)" value="36">NUSANTARA 303   (Ust. Kusnadi)</option>
<option label="NUSANTARA 304   (Ust. Ridwan Nurmawan, S.Th.I)" value="37">NUSANTARA 304   (Ust. Ridwan Nurmawan, S.Th.I)</option>
<option label="NUSANTARA 305   (Ust. Syukur Yakub, S.E.I)" value="38">NUSANTARA 305   (Ust. Syukur Yakub, S.E.I)</option>
<option label="NUSANTARA 306   (Ust. Asro Kamali)" value="39">NUSANTARA 306   (Ust. Asro Kamali)</option>
<option label="NUSANTARA 307   (Ust. Hanun Rusdianto)" value="40">NUSANTARA 307   (Ust. Hanun Rusdianto)</option>
<option label="RINBA 201   (Ust. Nofriadi)" value="41">RINBA 201   (Ust. Nofriadi)</option>
<option label="RINBA 202   (Ust. Nofriadi)" value="42">RINBA 202   (Ust. Nofriadi)</option>

<option label="RINBA 203   (Ust. Ali Yusuf Syakir)" value="43">RINBA 203   (Ust. Ali Yusuf Syakir)</option>
<option label="RINBA 204   (Ust. Ali Yusuf Syakir)" value="44">RINBA 204   (Ust. Ali Yusuf Syakir)</option>
<option label="RINBA 205   (Ust. M. Fajar N)" value="45">RINBA 205   (Ust. M. Fajar N)</option>
<option label="RINBA 206   (Ust. M. Fajar N)" value="46">RINBA 206   (Ust. M. Fajar N)</option>
<option label="RINBA 207   (Ust. Nana Sutisna)" value="47">RINBA 207   (Ust. Nana Sutisna)</option>
<option label="RINBA 208   (Ust. Rahmat Ghusnul A.)" value="48">RINBA 208   (Ust. Rahmat Ghusnul A.)</option>
<option label="RINBA 209   (Ust. Sibrin Mukhlis)" value="49">RINBA 209   (Ust. Sibrin Mukhlis)</option>
<option label="RINBA 210   (Ust. Sibrin Mukhlis)" value="50">RINBA 210   (Ust. Sibrin Mukhlis)</option>
<option label="RINBA 301   (Ust. Rifai Mufadhol)" value="51">RINBA 301   (Ust. Rifai Mufadhol)</option>

<option label="RINBA 302   (Ust. Rifai Mufadhol)" value="52">RINBA 302   (Ust. Rifai Mufadhol)</option>
<option label="RINBA 303   (Ust. Ahmad Muammar)" value="53">RINBA 303   (Ust. Ahmad Muammar)</option>
<option label="RINBA 304   (Ust. Jeni Heriyanto)" value="54">RINBA 304   (Ust. Jeni Heriyanto)</option>
<option label="RINBA 305   (Ust. Arif M. Iqbal)" value="55">RINBA 305   (Ust. Arif M. Iqbal)</option>
<option label="RINBA 306   (Ust. Arif M. Iqbal)" value="56">RINBA 306   (Ust. Arif M. Iqbal)</option>
<option label="RINBA 307   (Ust. M. Ilmi Wirawan)" value="57">RINBA 307   (Ust. M. Ilmi Wirawan)</option>
<option label="RINBA 308   (Ust. Ahmad Awaludin)" value="58">RINBA 308   (Ust. Ahmad Awaludin)</option>
<option label="RINBA 309   (M. Yusuf Wibisono)" value="59">RINBA 309   (M. Yusuf Wibisono)</option>
<option label="RINBA 310   (M. Yusuf Wibisono)" value="60">RINBA 310   (M. Yusuf Wibisono)</option>

<option label="RINBA 401   (Ust. Bahrul Arifudin)" value="61">RINBA 401   (Ust. Bahrul Arifudin)</option>
<option label="RINBA 402   (Ust. Husni Tamrin)" value="62">RINBA 402   (Ust. Husni Tamrin)</option>
<option label="RINBA 403   (Ust. Iwan Hasan B.)" value="63">RINBA 403   (Ust. Iwan Hasan B.)</option>
<option label="RINBA 404   (Ust. Iwan Hasan Basori)" value="64">RINBA 404   (Ust. Iwan Hasan Basori)</option>
<option label="RINBA 405   (Ust. Dwi Bagus Imawan)" value="65">RINBA 405   (Ust. Dwi Bagus Imawan)</option>
<option label="RINBA 406   (Ust. Dwi Bagus Imawan)" value="66">RINBA 406   (Ust. Dwi Bagus Imawan)</option>
<option label="RINBA 407   (Ust. H. Kurniawan Arif)" value="67">RINBA 407   (Ust. H. Kurniawan Arif)</option>
<option label="RINBA 408   (Ust. Farhan Kamilulloh)" value="68">RINBA 408   (Ust. Farhan Kamilulloh)</option>
<option label="RINBA 409   (Ust. Putra Perdana)" value="69">RINBA 409   (Ust. Putra Perdana)</option>

<option label="RINBA 410   (Ust. Abdullah)" value="70">RINBA 410   (Ust. Abdullah)</option>

		</select>
			</td>
        </tr>
      </table>
      <!-- #EndEditable --></td>
		  <tr> 
    <td align="right">
	 	<input type="button" class="formbox" value=" Save " OnClick="javascript:this.form.submit()">

	 	
	 	
		<input type="button" class="formbox" value=" Refresh " OnClick="javascript:window.location='/~spawn/ppia/roomstudent.php?'">
	 	
	 	<input type="button" class="formbox" value=" Close " OnClick="javascript:window.close()">
	 	    </td>
  </tr>  <tr>
    <td><!-- #BeginEditable "table" -->
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td class="palareport" width="10%">Pilih Siswa</td>

          <td class="palareport" width="10%"><a href="roomstudent.php?classid=&order=regnumber">No Induk Siswa</a></td>
          <td class="palareport" width="37%"><a href="roomstudent.php?classid=&order=name">Nama</a></td>
        </tr>
		         <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="738"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11647</td>
          <td width="50%" class="isitabel">&nbsp;GHAZI ZULAVA ALIEF -- 1 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="739"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11653</td>
          <td width="50%" class="isitabel">&nbsp;HARIZ AULIA -- 1 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="740"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11665</td>

          <td width="50%" class="isitabel">&nbsp;JALALUDDIN ASSUYUTI -- 1 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="741"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11671</td>
          <td width="50%" class="isitabel">&nbsp;LUTHFY IMAN EKA PUTRA -- 1 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="742"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11681</td>
          <td width="50%" class="isitabel">&nbsp;MOH. SYARIF HIDAYAT -- 1 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="743"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11691</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMAD KHADAFI AMRAN -- 1 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="744"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11698</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD AQIL TAMMIMI RANGKUTI -- 1 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="745"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11705</td>

          <td width="50%" class="isitabel">&nbsp;MUHAMMAD DIAZ ABDILLAH -- 1 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="746"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11707</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD FAJRI -- 1 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="747"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11713</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD IQBAL ALAYUB -- 1 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="748"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11720</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD NUFUS RAHMATULLAH -- 1 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="749"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11722</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD REYHAN DERIAN -- 1 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="750"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11731</td>

          <td width="50%" class="isitabel">&nbsp;MUHAMMAD THOWWAFI ALFIANSYAH -- 1 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="751"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11733</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD ZAKI -- 1 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="752"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11737</td>
          <td width="50%" class="isitabel">&nbsp;NANDA AULIA AKBAR -- 1 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="753"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11748</td>
          <td width="50%" class="isitabel">&nbsp;QURAISY SYIHAB -- 1 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="754"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11762</td>
          <td width="50%" class="isitabel">&nbsp;RIYAN ALVIAN -- 1 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="755"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11763</td>

          <td width="50%" class="isitabel">&nbsp;RIZKI AULIA RAHMAN -- 1 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="756"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11770</td>
          <td width="50%" class="isitabel">&nbsp;ROFIQ MUQADDAM ALI -- 1 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="757"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11773</td>
          <td width="50%" class="isitabel">&nbsp;SABIL ILHAM PRAWIRA -- 1 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="758"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11774</td>
          <td width="50%" class="isitabel">&nbsp;SAVERO WINUDHAPRATAMA -- 1 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="759"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11780</td>
          <td width="50%" class="isitabel">&nbsp;SYAUQI DZULFIKAR F -- 1 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="760"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11786</td>

          <td width="50%" class="isitabel">&nbsp;WAFI FAUZAN -- 1 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="761"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11788</td>
          <td width="50%" class="isitabel">&nbsp;WHISNU GINANDJAR ADJIE NOTONEGORO -- 1 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="762"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11536</td>
          <td width="50%" class="isitabel">&nbsp;ACHMAD DENDY ADIYATMA -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="763"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11537</td>
          <td width="50%" class="isitabel">&nbsp;ACHMAD FAIDHULLAH -- 1 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="764"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11540</td>
          <td width="50%" class="isitabel">&nbsp;ADE RAFRI -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="765"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11547</td>

          <td width="50%" class="isitabel">&nbsp;AGATHON CAVI -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="766"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11553</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD FATONI FATDLLU ROBBI -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="767"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11557</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD ZUL JALAL -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="768"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11561</td>
          <td width="50%" class="isitabel">&nbsp;AKMAL RAFIF -- 1 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="769"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11562</td>
          <td width="50%" class="isitabel">&nbsp;ALAMSYAH -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="770"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11574</td>

          <td width="50%" class="isitabel">&nbsp;AMIZA ZULFI -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="771"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11593</td>
          <td width="50%" class="isitabel">&nbsp;AUZAN NUR ADLI -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="772"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11601</td>
          <td width="50%" class="isitabel">&nbsp;DENDY KURNIA HARAHAP -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="773"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11618</td>
          <td width="50%" class="isitabel">&nbsp;ERY ASWADIN -- 1 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="774"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11645</td>
          <td width="50%" class="isitabel">&nbsp;GALLILY SELMI -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="775"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11648</td>

          <td width="50%" class="isitabel">&nbsp;HADI KURNIA -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="776"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11649</td>
          <td width="50%" class="isitabel">&nbsp;HADI MUKHTAROM -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="777"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11696</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD ALI IBRAHIM -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="778"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11692</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMAD PADLY PRADANA DAENG LEO -- 1 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="779"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11719</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD NAUFAL RIZAL -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="780"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11724</td>

          <td width="50%" class="isitabel">&nbsp;MUHAMMAD RIFQI ELNANZA ALBA -- 1 B </td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="781"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11726</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD ROCKY -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="782"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11699</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD ARFIAN MUBARAK -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="783"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11682</td>
          <td width="50%" class="isitabel">&nbsp;MOHAMAD BELANEGARA -- 1 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="784"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11710</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD IMAN SIBGHATULLAH -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="785"></td>
          <td width="30%" class="isitabel">&nbsp;</td>

          <td width="50%" class="isitabel">&nbsp;M. Iqbal -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="786"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11717</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD MUFLIH HARAKI -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="787"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11725</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD RIZKI BAIHAQI -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="788"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11743</td>
          <td width="50%" class="isitabel">&nbsp;PANDU ANDI WIGUNA  -- 1 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="789"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11767</td>
          <td width="50%" class="isitabel">&nbsp;RIZKY MUHAMMAD IQBAL -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="790"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11787</td>

          <td width="50%" class="isitabel">&nbsp;WAHYU ANUGERAH PUTRA -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="791"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11533</td>
          <td width="50%" class="isitabel">&nbsp;ABAD NURUL HAKIM -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="792"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11534</td>
          <td width="50%" class="isitabel">&nbsp;ABDUL AZIZ -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="793"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11542</td>
          <td width="50%" class="isitabel">&nbsp;ADI HARJITO -- 1 C</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="794"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11555</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD SHIRATZ AZIZ -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="795"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11556</td>

          <td width="50%" class="isitabel">&nbsp;AHMAD WICAKSANA PUTRA -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="796"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11569</td>
          <td width="50%" class="isitabel">&nbsp;ALVIN LAZUARDI NUR -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="797"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11570</td>
          <td width="50%" class="isitabel">&nbsp;AMANDA PRADHITA PRANGGAPATI -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="798"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11579</td>
          <td width="50%" class="isitabel">&nbsp;ANDRE RIZALDI -- 1 C</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="799"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11580</td>
          <td width="50%" class="isitabel">&nbsp;ANDRE SUPRIYANTO -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="800"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11700</td>

          <td width="50%" class="isitabel">&nbsp;MUHAMMAD AUDI GHAFFARI -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="801"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11594</td>
          <td width="50%" class="isitabel">&nbsp;AZKA AMANY -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="802"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11598</td>
          <td width="50%" class="isitabel">&nbsp;BIAS CAHYA ISLAMI -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="803"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11599</td>
          <td width="50%" class="isitabel">&nbsp;BINTANG BAYU MUKTI AJI -- 1 C</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="804"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11608</td>
          <td width="50%" class="isitabel">&nbsp;DICKY DHARMAWAN -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="805"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11641</td>

          <td width="50%" class="isitabel">&nbsp;FIKRI KHAIRUL RIZAL -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="806"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11620</td>
          <td width="50%" class="isitabel">&nbsp;FACHRI ADRIANSYAH -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="807"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11623</td>
          <td width="50%" class="isitabel">&nbsp;FADHEL DEVITO ANAROS -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="808"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11621</td>
          <td width="50%" class="isitabel">&nbsp;FADEL MUHAMMAD ANUGRAH -- 1 C</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="809"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11633</td>
          <td width="50%" class="isitabel">&nbsp;FARDHAN AKBAR SYUKUR  -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="810"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11636</td>

          <td width="50%" class="isitabel">&nbsp;FARRY RIZKITA -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="811"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11640</td>
          <td width="50%" class="isitabel">&nbsp;FERY IRAWAN -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="812"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11643</td>
          <td width="50%" class="isitabel">&nbsp;FIRMAN WIJAYA KUSUMA -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="813"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11655</td>
          <td width="50%" class="isitabel">&nbsp;HILMAN MAULIDIN -- 1 C</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="814"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11656</td>
          <td width="50%" class="isitabel">&nbsp;IBAR DONNY ROSYADHI -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="815"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11657</td>

          <td width="50%" class="isitabel">&nbsp;IBNU YAUZI -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="816"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11660</td>
          <td width="50%" class="isitabel">&nbsp;ILHAM SURYA PURNOMO -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="817"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11658</td>
          <td width="50%" class="isitabel">&nbsp;IHSANURIZA HAROMAIN -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="818"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11669</td>
          <td width="50%" class="isitabel">&nbsp;LINUS DHIAN PRAKOSO -- 1 C</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="819"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11695</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD AFRI MARZUKI -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="820"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11687</td>

          <td width="50%" class="isitabel">&nbsp;MOKHAMAD FIKRI ALFAWAID -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="821"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11673</td>
          <td width="50%" class="isitabel">&nbsp;M RIDWAN ATTAUFIQI -- 1 C </td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="822"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11676</td>
          <td width="50%" class="isitabel">&nbsp;MAHDI ALAYDRUS -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="823"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11747</td>
          <td width="50%" class="isitabel">&nbsp;QORI ASHARI ROSYID -- 1 C</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="824"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11757</td>
          <td width="50%" class="isitabel">&nbsp;RIDHO FAUZAN -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="825"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11753</td>

          <td width="50%" class="isitabel">&nbsp;RAYNOT ERVANDA -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="826"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11760</td>
          <td width="50%" class="isitabel">&nbsp;RIFAI DERMAWAN -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="827"></td>

          <td width="30%" class="isitabel">&nbsp;</td>
          <td width="50%" class="isitabel">&nbsp;Rizal -- 1 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="828"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11777</td>
          <td width="50%" class="isitabel">&nbsp;SUFYAN ZULKARNAIN -- 1 C</td>
        </tr>

		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="829"></td>
          <td width="30%" class="isitabel">&nbsp;</td>
          <td width="50%" class="isitabel">&nbsp;Yaya -- 1 C </td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="830"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11538</td>
          <td width="50%" class="isitabel">&nbsp;ACHMAD FAIZAL RIWANTO -- 1D</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="831"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11545</td>
          <td width="50%" class="isitabel">&nbsp;ADONIS ALHARIS -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="832"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11546</td>

          <td width="50%" class="isitabel">&nbsp;AFIFUDDIN ALI  -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="833"></td>
          <td width="30%" class="isitabel">&nbsp;</td>
          <td width="50%" class="isitabel">&nbsp;Agil Abdi Aulia -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="834"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11549</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD ABDUL WASI -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="835"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11550</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD AZHAR -- 1 D</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="836"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11575</td>
          <td width="50%" class="isitabel">&nbsp;ANANDA JODI PRAMONO -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="837"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11597</td>

          <td width="50%" class="isitabel">&nbsp;BAYU SETIA YUPA -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="838"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11617</td>
          <td width="50%" class="isitabel">&nbsp;ERICO PRATAMA SAHARDIKA T -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="839"></td>

          <td width="30%" class="isitabel">&nbsp;</td>
          <td width="50%" class="isitabel">&nbsp;Faisal F -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="840"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11630</td>
          <td width="50%" class="isitabel">&nbsp;FAIZAL AMIR -- 1 D</td>
        </tr>

		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="841"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11632</td>
          <td width="50%" class="isitabel">&nbsp;FANI SETIAWAN -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="842"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11635</td>

          <td width="50%" class="isitabel">&nbsp;FARIZ ZAKARIA -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="843"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11646</td>
          <td width="50%" class="isitabel">&nbsp;GEMA FAJAR PRAMUDITA ADJI -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="844"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11650</td>
          <td width="50%" class="isitabel">&nbsp;HADIATULLAH -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="845"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11664</td>
          <td width="50%" class="isitabel">&nbsp;ISMI SUNARKO -- 1 D</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="846"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11668</td>
          <td width="50%" class="isitabel">&nbsp;KHOIRUL UMAM -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="847"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11670</td>

          <td width="50%" class="isitabel">&nbsp;LUQMAN HAKIM PRIYONO -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="848"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11768</td>
          <td width="50%" class="isitabel">&nbsp;M RIZKY RAMADHAN -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="849"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11709</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD HARUN ALRASYID -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="850"></td>
          <td width="30%" class="isitabel">&nbsp;</td>
          <td width="50%" class="isitabel">&nbsp;M. Hidayat -- 1 D</td>
        </tr>

		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="851"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11697</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD ALI REZA -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="852"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11703</td>

          <td width="50%" class="isitabel">&nbsp;MUHAMMAD BOFID BAIHAQI -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="853"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11715</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD JANU SEMESTA -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="854"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11727</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD ROIS NUSYAIR -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="855"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11730</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD SYARIPUDIN HIDAYATTULLAH -- 1 D</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="856"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11764</td>
          <td width="50%" class="isitabel">&nbsp;RIZKI SATRIA -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="857"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11769</td>

          <td width="50%" class="isitabel">&nbsp;ROBBY KURNIA UTAMA -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="858"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11779</td>
          <td width="50%" class="isitabel">&nbsp;SYAHRU RAMADYANTO  -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="859"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11781</td>
          <td width="50%" class="isitabel">&nbsp;TODI RAHMAT ASH SIDDIQ -- 1 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="860"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11783</td>
          <td width="50%" class="isitabel">&nbsp;VARWEIS AHMED -- 1 D</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="861"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11535</td>
          <td width="50%" class="isitabel">&nbsp;ABYAN PERDANA PUTRA -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="862"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11544</td>

          <td width="50%" class="isitabel">&nbsp;ADNAN HARIADI -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="863"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11548</td>
          <td width="50%" class="isitabel">&nbsp;AGE SURYA DWIPA CHANDRA -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="864"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11560</td>
          <td width="50%" class="isitabel">&nbsp;AKBAR NURWAHYU ARIFIN PUTRA -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="865"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11573</td>
          <td width="50%" class="isitabel">&nbsp;AMIRUL IHSAN RAHARDJO -- 1 E</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="866"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11684</td>
          <td width="50%" class="isitabel">&nbsp;MOHAMMAD DENIZ ISKANDAR -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="867"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11604</td>

          <td width="50%" class="isitabel">&nbsp;DENNY INDRA MAULANA -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="868"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11607</td>
          <td width="50%" class="isitabel">&nbsp;DEWO MUKTI -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="869"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11609</td>
          <td width="50%" class="isitabel">&nbsp;DINUR WIKRA ANANTA -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="870"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11610</td>
          <td width="50%" class="isitabel">&nbsp;DOFFIKAR BATUTA -- 1 E</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="871"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11613</td>
          <td width="50%" class="isitabel">&nbsp;EDOIN FAHLEPI -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="872"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11614</td>

          <td width="50%" class="isitabel">&nbsp;EKA SAPUTRA YUPA -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="873"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11615</td>
          <td width="50%" class="isitabel">&nbsp;EKRI RIANDA -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="874"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11619</td>
          <td width="50%" class="isitabel">&nbsp;FACHMI MAJID -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="875"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11642</td>
          <td width="50%" class="isitabel">&nbsp;FIKRI ZAIN -- 1 E</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="876"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11661</td>
          <td width="50%" class="isitabel">&nbsp;IMAM ASRORI -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="877"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11675</td>

          <td width="50%" class="isitabel">&nbsp;M. QODRIAT AFANDI -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="878"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11678</td>
          <td width="50%" class="isitabel">&nbsp;MHD. ARIF MUNANDAR -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="879"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11685</td>
          <td width="50%" class="isitabel">&nbsp;MOHAMMAD GUSNARDI BAHALWAN -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="880"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11689</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMAD BIRIL MUSTOFA -- 1 E</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="881"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11690</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMAD FADILAH ABDUL GANI -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="882"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11706</td>

          <td width="50%" class="isitabel">&nbsp;MUHAMMAD FADLI AMIRUL IQBAL -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="883"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11711</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD INDRA GEMILANG -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="884"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11716</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD JULIANSYAH ISKANDAR -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="885"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11736</td>
          <td width="50%" class="isitabel">&nbsp;MUKTI SYARIF RAZEN  -- 1 E</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="886"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11744</td>
          <td width="50%" class="isitabel">&nbsp;PONCO SULISTYANTO -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="887"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11755</td>

          <td width="50%" class="isitabel">&nbsp;REVQY PALEVA AKMAL SEPTYANISWARA -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="888"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11772</td>
          <td width="50%" class="isitabel">&nbsp;RYAN NOVYANDRA -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="889"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11775</td>
          <td width="50%" class="isitabel">&nbsp;SAYYID MUHAMMAD UMAR ASSAGAF -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="890"></td>
          <td width="30%" class="isitabel">&nbsp;</td>
          <td width="50%" class="isitabel">&nbsp;Yusuf A -- 1 E</td>
        </tr>

		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="891"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11792</td>
          <td width="50%" class="isitabel">&nbsp;ZIO ZULKARNAEIN -- 1 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="892"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11539</td>

          <td width="50%" class="isitabel">&nbsp;ADE KURNIAWAN -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="893"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11554</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD RIZKY FUJIANTO -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="894"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11568</td>
          <td width="50%" class="isitabel">&nbsp;ALIZA AULIA -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="895"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11571</td>
          <td width="50%" class="isitabel">&nbsp;AMARFACHRY -- 1 F</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="896"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11585</td>
          <td width="50%" class="isitabel">&nbsp;APRILIO MELODY -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="897"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11586</td>

          <td width="50%" class="isitabel">&nbsp;APUL PUTRA SUNANTI SIMANJUNTAK -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="898"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11588</td>
          <td width="50%" class="isitabel">&nbsp;ARDHI SYAIFULLAH -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="899"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11589</td>
          <td width="50%" class="isitabel">&nbsp;ARIEF AKBARI -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="900"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11596</td>
          <td width="50%" class="isitabel">&nbsp;BAKHTIAR -- 1 F</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="901"></td>
          <td width="30%" class="isitabel">&nbsp;</td>
          <td width="50%" class="isitabel">&nbsp;Bima putra -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="902"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11611</td>

          <td width="50%" class="isitabel">&nbsp;DONY FADILA -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="903"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11616</td>
          <td width="50%" class="isitabel">&nbsp;ELNATH SPLENDIDTA WAFIG GEMILANG -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="904"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11634</td>
          <td width="50%" class="isitabel">&nbsp;FARID SYAUQI -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="905"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11638</td>
          <td width="50%" class="isitabel">&nbsp;FEBRIANTO ADI KUSUMA -- 1 F</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="906"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11663</td>
          <td width="50%" class="isitabel">&nbsp;IRWAN -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="907"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11667</td>

          <td width="50%" class="isitabel">&nbsp;KHAERUL KUSTIAN -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="908"></td>
          <td width="30%" class="isitabel">&nbsp;</td>
          <td width="50%" class="isitabel">&nbsp;M. Fikri Ramadhan -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="909"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11674</td>
          <td width="50%" class="isitabel">&nbsp;M. HARITZAH SATADINI HUSAIN CARLOS -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="910"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11679</td>
          <td width="50%" class="isitabel">&nbsp;MOH SYAMSUL FUAD  -- 1 F</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="911"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11686</td>
          <td width="50%" class="isitabel">&nbsp;MOHAMMAD IRFAN -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="912"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11693</td>

          <td width="50%" class="isitabel">&nbsp;MUHAMAD RIZWAN AFFANDI -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="913"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11712</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD IQBAL  -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="914"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11718</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD NABIL AKMAL AL GIFARI -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="915"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11723</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD RIDHAN -- 1 F</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="916"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11728</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD RULLI MUNDAFAR -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="917"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11732</td>

          <td width="50%" class="isitabel">&nbsp;MUHAMMAD VINDRY ALI -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="918"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11735</td>
          <td width="50%" class="isitabel">&nbsp;MUHASIM -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="919"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11738</td>
          <td width="50%" class="isitabel">&nbsp;NAUFAL DWI SAPUTRA -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="920"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11740</td>
          <td width="50%" class="isitabel">&nbsp;NOER RACHMAN ABDILLAH -- 1 F</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="921"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11742</td>
          <td width="50%" class="isitabel">&nbsp;NUR ALAMSYAH -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="922"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11745</td>

          <td width="50%" class="isitabel">&nbsp;POTOPPOY -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="923"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11759</td>
          <td width="50%" class="isitabel">&nbsp;RIDWAN - JUNIANSAH -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="924"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11765</td>
          <td width="50%" class="isitabel">&nbsp;RIZKI WIJAYA PRATAMA -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="925"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11771</td>
          <td width="50%" class="isitabel">&nbsp;RONI DWI PRATAMA YURI -- 1 F</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="926"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11778</td>
          <td width="50%" class="isitabel">&nbsp;SUNAN HIDAYATULLAH -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="927"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11784</td>

          <td width="50%" class="isitabel">&nbsp;VIQI ALFIANDRI -- 1 F</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="928"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11541</td>
          <td width="50%" class="isitabel">&nbsp;ADE SAPUTRA -- 1 G</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="929"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11551</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD FADLUL MUADZOM -- 1 G</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="930"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11558</td>
          <td width="50%" class="isitabel">&nbsp;AJI ARYA RADITYA NUGRAHA ISKANDARSYAH. B -- 1 G</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="931"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11563</td>
          <td width="50%" class="isitabel">&nbsp;ALDY RENALDY -- 1 G</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="932"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11566</td>

          <td width="50%" class="isitabel">&nbsp;ALI ZAENAL ABIDIN AHMAD ASSEGAF -- 1 G</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="933"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11581</td>
          <td width="50%" class="isitabel">&nbsp;ANDRIAN FERTILLA -- 1 G</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="934"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11583</td>
          <td width="50%" class="isitabel">&nbsp;ANGGORO YOGI PRASTOWO -- 1 G</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="935"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11591</td>
          <td width="50%" class="isitabel">&nbsp;ARMANDA SUGARA  -- 1 G</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="936"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11595</td>
          <td width="50%" class="isitabel">&nbsp;AZMI GAFARI -- 1 G</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="937"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11624</td>

          <td width="50%" class="isitabel">&nbsp;FADHLI KHAIRIN -- 1 G</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="938"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11625</td>
          <td width="50%" class="isitabel">&nbsp;FADIL MAHYIDDIN -- 1 G</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="939"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11626</td>
          <td width="50%" class="isitabel">&nbsp;FAFA ZANUAR HERDIMAN -- 1 G</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="940"></td>
          <td width="30%" class="isitabel">&nbsp;</td>
          <td width="50%" class="isitabel">&nbsp;Fajri Fadly -- 1 G</td>
        </tr>

		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="941"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11637</td>
          <td width="50%" class="isitabel">&nbsp;FAUZAN -- 1 G</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="942"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11639</td>

          <td width="50%" class="isitabel">&nbsp;FERDIANSYAH RAMADHAN -- 1 G</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="943"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11652</td>
          <td width="50%" class="isitabel">&nbsp;HANIF HAWARI -- 1 G</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="944"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11659</td>
          <td width="50%" class="isitabel">&nbsp;ILHAM GUMILANG -- 1 G</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="945"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11713</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD IQBAL ALAYUB -- 1 G</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="946"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11680</td>
          <td width="50%" class="isitabel">&nbsp;MOH. RIZKI CH. LAMORO -- 1 G</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="947"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11688</td>

          <td width="50%" class="isitabel">&nbsp;MUHAMAD ANDREANSYAH PUTRA -- 1 G</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="948"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11714</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD IRFAN TUBAKA -- 1 G</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="949"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11739</td>
          <td width="50%" class="isitabel">&nbsp;NAUFAL PRATAMA -- 1 G</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="950"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11746</td>
          <td width="50%" class="isitabel">&nbsp;PRAMADANA NURAHMAN -- 1 G</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="951"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11761</td>
          <td width="50%" class="isitabel">&nbsp;RIKO SAPUTRA -- 1 G</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="952"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11790</td>

          <td width="50%" class="isitabel">&nbsp;YOGA PRAMONA -- 1 G</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="953"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11019</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD SYAHABUDDIN -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="954"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11020</td>
          <td width="50%" class="isitabel">&nbsp;ACHMAD FARISTYAWAN YAHYA -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="955"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11022</td>
          <td width="50%" class="isitabel">&nbsp;ACHMAD REZKI CHAIRAMSYAH -- 2 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="956"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11031</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD MARZUKI -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="957"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11039</td>

          <td width="50%" class="isitabel">&nbsp;ALAN NOVANDI -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="958"></td>
          <td width="30%" class="isitabel">&nbsp;</td>
          <td width="50%" class="isitabel">&nbsp;Ari M Faiz -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="959"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11056</td>
          <td width="50%" class="isitabel">&nbsp;AUDI MARCAL -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="960"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11066</td>
          <td width="50%" class="isitabel">&nbsp;BINTANG ROFEIKA SAID -- 2 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="961"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11067</td>
          <td width="50%" class="isitabel">&nbsp;CHAIDIR ALI -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="962"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11069</td>

          <td width="50%" class="isitabel">&nbsp;DAVID AGUS SANDA -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="963"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11075</td>
          <td width="50%" class="isitabel">&nbsp;EFRILIAN -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="964"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11080</td>
          <td width="50%" class="isitabel">&nbsp;FAIZ FEBRIYAN HAFARA -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="965"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11083</td>
          <td width="50%" class="isitabel">&nbsp;FATHUL HADI -- 2 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="966"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11084</td>
          <td width="50%" class="isitabel">&nbsp;FATKAN KARIM ATMAJA -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="967"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11089</td>

          <td width="50%" class="isitabel">&nbsp;FITRAH AWALUDDIN -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="968"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11093</td>
          <td width="50%" class="isitabel">&nbsp;GUNTUR ANDI SAPUTRA -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="969"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11107</td>
          <td width="50%" class="isitabel">&nbsp;IMAM KHAIRUL ANNAS -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="970"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11113</td>
          <td width="50%" class="isitabel">&nbsp;JABBAR HANACARAKA -- 2 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="971"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11115</td>
          <td width="50%" class="isitabel">&nbsp;JIHAD ARDHILLAH -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="972"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11152</td>

          <td width="50%" class="isitabel">&nbsp;MUHAMMAD FAISAL RACHMAN -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="973"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11122</td>
          <td width="50%" class="isitabel">&nbsp;M IDHAM AGUNG S -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="974"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11161</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD SANDI ROSYADI -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="975"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11163</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD SYARIFUDDIN HIZBULLOH -- 2 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="976"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11151</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD FAHMI -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="977"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11167</td>

          <td width="50%" class="isitabel">&nbsp;OKTARIJAL ABDUL RAZIK KARAMI -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="978"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11173</td>
          <td width="50%" class="isitabel">&nbsp;RENDY HERLAMBANG -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="979"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11175</td>
          <td width="50%" class="isitabel">&nbsp;REYHAN RYANAFI -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="980"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11185</td>
          <td width="50%" class="isitabel">&nbsp;SADLY EL-UDWANY EL-BAGIZ -- 2 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="981"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11198</td>
          <td width="50%" class="isitabel">&nbsp;TARUKENIKO GAYO -- 2 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="982"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11030</td>

          <td width="50%" class="isitabel">&nbsp;AHMAD IZZUDDIN ROHMATULLOH -- 2 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="983"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11044</td>
          <td width="50%" class="isitabel">&nbsp;ANDRE IRAWAN -- 2 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="984"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11048</td>
          <td width="50%" class="isitabel">&nbsp;ARIEF RAHMAN HAKIM -- 2 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="985"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11057</td>
          <td width="50%" class="isitabel">&nbsp;AZHARUDDIN -- 2 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="986"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11060</td>
          <td width="50%" class="isitabel">&nbsp;BAGUS SASMITA AJI -- 2 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="987"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11065</td>

          <td width="50%" class="isitabel">&nbsp;BETAP RACHMAN -- 2 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="988"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11070</td>
          <td width="50%" class="isitabel">&nbsp;DIKA SEPTIAN PRATAMA -- 2 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="989"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11073</td>
          <td width="50%" class="isitabel">&nbsp;DITO YUDA PERWIRA -- 2 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="990"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11461</td>
          <td width="50%" class="isitabel">&nbsp;FAHAD JAMALUDDIN* -- 2 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="991"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11091</td>
          <td width="50%" class="isitabel">&nbsp;GALIH ARIYO TRILAKSONO -- 2 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="992"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11096</td>

          <td width="50%" class="isitabel">&nbsp;HENDY DARMANSYAH -- 2 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="993"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11100</td>
          <td width="50%" class="isitabel">&nbsp;IBRAHIM ABDULLAH -- 2 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="994"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11127</td>
          <td width="50%" class="isitabel">&nbsp;M. BAGHIA NURUL ILMAN -- 2 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="995"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11145</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD ABDAN MUFLIH -- 2 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="996"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11138</td>
          <td width="50%" class="isitabel">&nbsp;MOHAMMAD RIZKA -- 2 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="997"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11162</td>

          <td width="50%" class="isitabel">&nbsp;MUHAMMAD SHALAHUDDIN SUTEJA -- 2 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="998"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11130</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMAD UMAR MUALIM -- 2 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="999"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11157</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD IRHAM ROMADHON -- 2 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1000"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11168</td>
          <td width="50%" class="isitabel">&nbsp;PRASETYO ADHI NUGROHO -- 2  B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1001"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11170</td>
          <td width="50%" class="isitabel">&nbsp;RAFIQI AMMAR -- 2 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1002"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11174</td>

          <td width="50%" class="isitabel">&nbsp;RERE MARETTA MAGENDA -- 2 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1003"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11183</td>
          <td width="50%" class="isitabel">&nbsp;RIZKI NURANFALAH -- 2 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1004"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11188</td>
          <td width="50%" class="isitabel">&nbsp;SATRIO RAHARJO -- 2 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1005"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11196</td>
          <td width="50%" class="isitabel">&nbsp;SYARIF KAMALIUDIN M -- 2 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1006"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11034</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD SYAMLANI SYARIEF -- 2 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1007"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11035</td>

          <td width="50%" class="isitabel">&nbsp;AHMAD ZAKI ZAMANI -- 2 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1008"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11037</td>
          <td width="50%" class="isitabel">&nbsp;AKBAR DWILISANTO -- 2 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1009"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11042</td>
          <td width="50%" class="isitabel">&nbsp;ALFI AL ANDIKA -- 2 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1010"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11051</td>
          <td width="50%" class="isitabel">&nbsp;ARIF RAHMAN HAKIM -- 2 C</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1011"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11049</td>
          <td width="50%" class="isitabel">&nbsp;ARIEL PRATAMA -- 2 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1012"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11055</td>

          <td width="50%" class="isitabel">&nbsp;ASRUL SANI NASUTION -- 2 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1013"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11085</td>
          <td width="50%" class="isitabel">&nbsp;FAUZAN AFFAN ZAKI -- 2 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1014"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11088</td>
          <td width="50%" class="isitabel">&nbsp;FIRDAUS ANDIKA RAMADHAN -- 2 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1015"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11094</td>
          <td width="50%" class="isitabel">&nbsp;HASAN ASY ARY DWIEARTO -- 2 C</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1016"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11095</td>
          <td width="50%" class="isitabel">&nbsp;HASBI RIFALDI -- 2 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1017"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11099</td>

          <td width="50%" class="isitabel">&nbsp;IBNU HADI SUDRAJAT -- 2 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1018"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11103</td>
          <td width="50%" class="isitabel">&nbsp;IHSAN NUGRAHA -- 2 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1019"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11119</td>
          <td width="50%" class="isitabel">&nbsp;KHOIRUL UMAM -- 2 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1020"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11117</td>
          <td width="50%" class="isitabel">&nbsp;KHALID ADI MAULANA -- 2 C</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1021"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11137</td>
          <td width="50%" class="isitabel">&nbsp;MOHAMMAD FAJRUL FUAD -- 2 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1022"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11155</td>

          <td width="50%" class="isitabel">&nbsp;MUHAMMAD GILANG GUMILAR -- 2 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1023"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11140</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMAD BILAL AKBAR -- 2 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1024"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11153</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD FAISHAL ANDIKA -- 2 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1025"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11156</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD IQBAL ZUHRI -- 2 C</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1026"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11133</td>
          <td width="50%" class="isitabel">&nbsp;MEIGY AKBAR -- 2 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1027"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11142</td>

          <td width="50%" class="isitabel">&nbsp;MUHAMAD LUTHFI -- 2 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1028"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11178</td>
          <td width="50%" class="isitabel">&nbsp;RICKY ZALKIFLI PUTRA PERDANA -- 2 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1029"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11186</td>
          <td width="50%" class="isitabel">&nbsp;SALASA DARMA UTAMA -- 2 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1030"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11187</td>
          <td width="50%" class="isitabel">&nbsp;SATRIA EKA PUTRA  -- 2 C</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1031"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11189</td>
          <td width="50%" class="isitabel">&nbsp;SATRYA NOOR SYAFEI -- 2 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1032"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11205</td>

          <td width="50%" class="isitabel">&nbsp;ZAINUL MUHTAROM -- 2 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1033"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11038</td>
          <td width="50%" class="isitabel">&nbsp;AL BANI LUHUR ISTIGHFAR -- 2 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1034"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11062</td>
          <td width="50%" class="isitabel">&nbsp;BAMBANG WICAKSONO SUPRIYANTO -- 2 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1035"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11063</td>
          <td width="50%" class="isitabel">&nbsp;BAYU CAKRA DININGRAT -- 2 D</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1036"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11102</td>
          <td width="50%" class="isitabel">&nbsp;IGHLASUL HASHEMI ROLLANDIAZ -- 2 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1037"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11078</td>

          <td width="50%" class="isitabel">&nbsp;FAISAL ACHMAD -- 2 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1038"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11081</td>
          <td width="50%" class="isitabel">&nbsp;FARHAN AMIN -- 2 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1039"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11090</td>
          <td width="50%" class="isitabel">&nbsp;FUAD DWI PUTRA -- 2 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1040"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11097</td>
          <td width="50%" class="isitabel">&nbsp;HERDIAN SAPUTRA -- 2 D</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1041"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11102</td>
          <td width="50%" class="isitabel">&nbsp;IGHLASUL HASHEMI ROLLANDIAZ -- 2 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1042"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11105</td>

          <td width="50%" class="isitabel">&nbsp;IMAM BUDIMAN -- 2 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1043"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11118</td>
          <td width="50%" class="isitabel">&nbsp;KHANZI AMALUL AHLI -- 2 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1044"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11121</td>
          <td width="50%" class="isitabel">&nbsp;LUKMAN KHOLIL AHMAD -- 2 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1045"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11154</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD FAKHRUL ARIFIN SYAHRAN -- 2 D</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1046"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11165</td>
          <td width="50%" class="isitabel">&nbsp;NIRWAN FAISAL -- 2 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1047"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11182</td>

          <td width="50%" class="isitabel">&nbsp;RIZALDI NURILHUDA -- 2 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1048"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11190</td>
          <td width="50%" class="isitabel">&nbsp;SEPTIAN FACHRI ICHSANI -- 2 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1049"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11197</td>
          <td width="50%" class="isitabel">&nbsp;SYIFA AHMAD FAJRI HADIYANTO PUTRA -- 2 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1050"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11200</td>
          <td width="50%" class="isitabel">&nbsp;TOMMY HUTOMO TIRAS -- 2 D</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1051"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11203</td>
          <td width="50%" class="isitabel">&nbsp;YASER KOTO -- 2 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1052"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11204</td>

          <td width="50%" class="isitabel">&nbsp;YUSUP FADILLAH -- 2 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1053"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11023</td>
          <td width="50%" class="isitabel">&nbsp;ACHMAD WIJAYA -- 2 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1054"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11029</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD CHAIRUL ANHARI -- 2 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1055"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11033</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD SETIAWAN -- 2 E</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1056"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11046</td>
          <td width="50%" class="isitabel">&nbsp;ANDRI PRATAMA SAPUTRA -- 2 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1057"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11072</td>

          <td width="50%" class="isitabel">&nbsp;DIPPO PRASETYA HERLIKO -- 2 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1058"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11074</td>
          <td width="50%" class="isitabel">&nbsp;DODY ARDIAN PUTRA -- 2 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1059"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11076</td>
          <td width="50%" class="isitabel">&nbsp;FADIEL RAMADHAN -- 2 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1060"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11086</td>
          <td width="50%" class="isitabel">&nbsp;FAUZAN ALHAZMI -- 2 E</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1061"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11087</td>
          <td width="50%" class="isitabel">&nbsp;FENDY ARMANSAH -- 2 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1062"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11092</td>

          <td width="50%" class="isitabel">&nbsp;GHULAM MUBARAK -- 2 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1063"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11098</td>
          <td width="50%" class="isitabel">&nbsp;IBNU AHMAD MUHAJIR -- 2 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1064"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11106</td>
          <td width="50%" class="isitabel">&nbsp;IMAM FARID -- 2 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1065"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11123</td>
          <td width="50%" class="isitabel">&nbsp;M IMAM ZAMZAMI -- 2 E</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1066"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11110</td>
          <td width="50%" class="isitabel">&nbsp;IRHAMZAH -- 2 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1067"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11112</td>

          <td width="50%" class="isitabel">&nbsp;J.J FACHRI MUSHODDIQ -- 2 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1068"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11124</td>
          <td width="50%" class="isitabel">&nbsp;M NUR SIRAJUDDIEN AL HAAS -- 2 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1069"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11166</td>
          <td width="50%" class="isitabel">&nbsp;NOVERDI -- 2 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1070"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11172</td>
          <td width="50%" class="isitabel">&nbsp;RAMADHANI KOSASIH ATMAWIRJA -- 2 E</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1071"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.11201</td>
          <td width="50%" class="isitabel">&nbsp;TRI DERRY SETIADI -- 2 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1072"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10490</td>

          <td width="50%" class="isitabel">&nbsp;ABDAN AL KHAIRAAT -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1073"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10493</td>
          <td width="50%" class="isitabel">&nbsp;ABDULLAH -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1074"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10495</td>
          <td width="50%" class="isitabel">&nbsp;ACHMAD FADILLAH -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1075"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10505</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD FAISAL NUGROHO -- 3 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1076"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10507</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD FARIS MUBAROK -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1077"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10513</td>

          <td width="50%" class="isitabel">&nbsp;AHMAD MULTAZAM -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1078"></td>
          <td width="30%" class="isitabel">&nbsp;</td>
          <td width="50%" class="isitabel">&nbsp;Arya Adi Nugraha -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1079"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10537</td>
          <td width="50%" class="isitabel">&nbsp;AUFI ACHRI -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1080"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10543</td>
          <td width="50%" class="isitabel">&nbsp;BIMA ARISANDI -- 3 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1081"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10560</td>
          <td width="50%" class="isitabel">&nbsp;FAHMI HIDAYAT -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1082"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10563</td>

          <td width="50%" class="isitabel">&nbsp;FAJAR MAULANA -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1083"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10566</td>
          <td width="50%" class="isitabel">&nbsp;FARHAN RIZA -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1084"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10567</td>
          <td width="50%" class="isitabel">&nbsp;FARID DARWIS GHIAST -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1085"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10571</td>
          <td width="50%" class="isitabel">&nbsp;FAZLUR RAHMAN -- 3 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1086"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10573</td>
          <td width="50%" class="isitabel">&nbsp;FIKRI BAGUS ZAKARIA -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1087"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10909</td>

          <td width="50%" class="isitabel">&nbsp;FITRAH AKBAR -- 3A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1088"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10579</td>
          <td width="50%" class="isitabel">&nbsp;GALIH RASYID RAHMANDIYAH -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1089"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10580</td>
          <td width="50%" class="isitabel">&nbsp;GEMA ILHAM PANGESTU -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1090"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10583</td>
          <td width="50%" class="isitabel">&nbsp;GHANIY KURNIA ARIFIAN -- 3A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1091"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10590</td>
          <td width="50%" class="isitabel">&nbsp;HUSNUL QARI -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1092"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10638</td>

          <td width="50%" class="isitabel">&nbsp;MUHAMMAD AMAR -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1093"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10647</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD IRSAN FACHRY MUAMMAL -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1094"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10630</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMAD RANDY WIGUNA SEMESTA -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1095"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10674</td>
          <td width="50%" class="isitabel">&nbsp;RANDY LUKMANA -- 3 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1096"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10681</td>
          <td width="50%" class="isitabel">&nbsp;RIDHO HANAN ASROWI -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1097"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10682</td>

          <td width="50%" class="isitabel">&nbsp;RIFKY BASRI TAHAR -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1098"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10968</td>
          <td width="50%" class="isitabel">&nbsp;RIZALUDDIN -- 3A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1099"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10694</td>
          <td width="50%" class="isitabel">&nbsp;RYAN ADITYA -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1100"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10702</td>
          <td width="50%" class="isitabel">&nbsp;SEPTIAN CATUR AGUNG -- 3 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1101"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10711</td>
          <td width="50%" class="isitabel">&nbsp;YOGA PRIYA SAMAPTA -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1102"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10712</td>

          <td width="50%" class="isitabel">&nbsp;YUSUF ANBAR FIRDAUSI -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1103"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10715</td>
          <td width="50%" class="isitabel">&nbsp;ZULHILMI WICAKSONO -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1104"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10516</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD ZIKRY FEBRIAN -- 3 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1105"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10511</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD HUDZAIRI -- 3 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1106"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10512</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD MUAMMAR QADAFI  -- 3 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1107"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10535</td>

          <td width="50%" class="isitabel">&nbsp;ASEP IMAM FIRMANSYAH -- 3 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1108"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10539</td>
          <td width="50%" class="isitabel">&nbsp;AWWALUL BILAL -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1109"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10545</td>
          <td width="50%" class="isitabel">&nbsp;CENDHY GITHEA ERSEDYABHAKTI -- 3 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1110"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10550</td>
          <td width="50%" class="isitabel">&nbsp;DEVI NUGRAHA -- 3 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1111"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10555</td>
          <td width="50%" class="isitabel">&nbsp;EDWIN RAHMADIAN -- 3 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1112"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10572</td>

          <td width="50%" class="isitabel">&nbsp;FEMI DWI RIZALDI -- 3 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1113"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10585</td>
          <td width="50%" class="isitabel">&nbsp;HADYAN FARIZ ZHAFIRI -- 3 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1114"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10592</td>
          <td width="50%" class="isitabel">&nbsp;IBNU ADITYA ROHMAN -- 3 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1115"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10594</td>
          <td width="50%" class="isitabel">&nbsp;IFTAH ABDUL FATAH -- 3 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1116"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10598</td>
          <td width="50%" class="isitabel">&nbsp;IMAM MUJAHID -- 3 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1117"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10607</td>

          <td width="50%" class="isitabel">&nbsp;KHOIDI UMAR ALKATIRI -- 3 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1118"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10651</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD NATSIR ILVIRA -- 3 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1119"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11455</td>
          <td width="50%" class="isitabel">&nbsp;M. FADLI ABADI -- 3 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1120"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10969</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMAD JALIL ABDURAHMAN -- 3 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1121"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10653</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD RADHINAL CENDEKIA -- 3 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1122"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10619</td>

          <td width="50%" class="isitabel">&nbsp;MARSHUKI -- 3 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1123"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10654</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD REZA PUTRA SULISTYO -- 3 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1124"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10663</td>
          <td width="50%" class="isitabel">&nbsp;MUSTAFA SANGADJI -- 3 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1125"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10665</td>
          <td width="50%" class="isitabel">&nbsp;NUR MOH SAFEI -- 3 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1126"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10691</td>
          <td width="50%" class="isitabel">&nbsp;ROMADHONA AKBAR HADY -- 3 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1127"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10692</td>

          <td width="50%" class="isitabel">&nbsp;ROMMY EDDITIYAWARMAN -- 3 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1128"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10699</td>
          <td width="50%" class="isitabel">&nbsp;SANTYO HADI LAKSONO -- 3 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1129"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10494</td>
          <td width="50%" class="isitabel">&nbsp;ABU DZAR NICOLA -- 3 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1130"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10500</td>
          <td width="50%" class="isitabel">&nbsp;ADITYA WARDHANA -- 3 C</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1131"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10536</td>
          <td width="50%" class="isitabel">&nbsp;ASYRAF ILMANSYAH HIA -- 3 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1132"></td>
          <td width="30%" class="isitabel">&nbsp;2.05.10910</td>

          <td width="50%" class="isitabel">&nbsp;AZKARUL MAHDI -- 3 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1133"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10548</td>
          <td width="50%" class="isitabel">&nbsp;CHAIRUL HANIFI -- 3 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1134"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10556</td>
          <td width="50%" class="isitabel">&nbsp;ERWIN MAHENDRA HAMZAH -- 3 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1135"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10586</td>
          <td width="50%" class="isitabel">&nbsp;HAFIZ NURHADI -- 3 C</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1136"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10608</td>
          <td width="50%" class="isitabel">&nbsp;KOEN ARIEF PERMANA -- 3 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1137"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10612</td>

          <td width="50%" class="isitabel">&nbsp;M. AIDIR RAHMAN -- 3 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1138"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10627</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMAD ARIF HAYATULLAH -- 3 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1139"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10655</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD REZZA HIDAYAT -- 3 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1140"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10645</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD IHSANUL HABIBI -- 3 C</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1141"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10649</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD KRESNA PRIO UTOMO -- 3 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1142"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10650</td>

          <td width="50%" class="isitabel">&nbsp;MUHAMMAD MUSTAFA KAMAL -- 3 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1143"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10657</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD RIZKY APRILLIANUR -- 3 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1144"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10672</td>
          <td width="50%" class="isitabel">&nbsp;RAMA RACHDIAN ADIGUNA -- 3 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1145"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10676</td>
          <td width="50%" class="isitabel">&nbsp;REDIKA MAULANA -- 3 C</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1146"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10685</td>
          <td width="50%" class="isitabel">&nbsp;RISKI LEGIATMA -- 3 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1147"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10688</td>

          <td width="50%" class="isitabel">&nbsp;RIZKI SETIAWAN -- 3 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1148"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10697</td>
          <td width="50%" class="isitabel">&nbsp;SANDI MAULANA -- 3 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1149"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10703</td>
          <td width="50%" class="isitabel">&nbsp;SEPTIANDIKA ASMAN PUTRA -- 3 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1150"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10705</td>
          <td width="50%" class="isitabel">&nbsp;SYAFEI -- 3 C</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1151"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10707</td>
          <td width="50%" class="isitabel">&nbsp;TENGKU MUHAMMAD IDRUS -- 3 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1152"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11457</td>

          <td width="50%" class="isitabel">&nbsp;AHMAD RUDIANTO KASWADI -- 3 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1153"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10514</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD SUBARKAH REMAZ -- 3 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1154"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10515</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD SUDARMAN -- 3 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1155"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10533</td>
          <td width="50%" class="isitabel">&nbsp;ARIEF WIBISONO -- 3 D</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1156"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10553</td>
          <td width="50%" class="isitabel">&nbsp;DIMAS SEPTI BAKUMS -- 3 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1157"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10554</td>

          <td width="50%" class="isitabel">&nbsp;EDEN TYCER PUTRA -- 3 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1158"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10559</td>
          <td width="50%" class="isitabel">&nbsp;FACHRI RAMADHANA -- 3 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1159"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10561</td>
          <td width="50%" class="isitabel">&nbsp;FAHMI NURHADIAN -- 3 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1160"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10562</td>
          <td width="50%" class="isitabel">&nbsp;FAIZ RAMADHAN -- 3 D</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1161"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10582</td>
          <td width="50%" class="isitabel">&nbsp;GERRY IHWANDRA -- 3 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1162"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10595</td>

          <td width="50%" class="isitabel">&nbsp;IMAM FIRMANSYAH -- 3 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1163"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10636</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD AFIEF SULAIMAN -- 3 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1164"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10614</td>
          <td width="50%" class="isitabel">&nbsp;M. NURLATHIF SUBAGJA -- 3 D </td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1165"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10661</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD THAYYIB SALEH -- 3 D </td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1166"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10669</td>
          <td width="50%" class="isitabel">&nbsp;RACHMAT HIDAYAT -- 3 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1167"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10671</td>

          <td width="50%" class="isitabel">&nbsp;RAHMAN HAKIM -- 3 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1168"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10673</td>
          <td width="50%" class="isitabel">&nbsp;RAMADIAN AGRI PUTRA -- 3 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1169"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10690</td>
          <td width="50%" class="isitabel">&nbsp;RIZKY MEDIAWAN -- 3 D</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1170"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10708</td>
          <td width="50%" class="isitabel">&nbsp;THAYA ALIZI -- 3 D</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1171"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10504</td>
          <td width="50%" class="isitabel">&nbsp;AGUS FATONI -- 3 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1172"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10532</td>

          <td width="50%" class="isitabel">&nbsp;ARIEF BUDIHARJO -- 3 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1173"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10547</td>
          <td width="50%" class="isitabel">&nbsp;CHAIRUL FAZRI -- 3 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1174"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10549</td>
          <td width="50%" class="isitabel">&nbsp;DENIS EKA ROSLIAN -- 3 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1175"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10558</td>
          <td width="50%" class="isitabel">&nbsp;FACHRI PUTRA ANSHOR -- 3 E</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1176"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10575</td>
          <td width="50%" class="isitabel">&nbsp;FIRMANDANI -- 3 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1177"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10587</td>

          <td width="50%" class="isitabel">&nbsp;HAFIZ ZIKRY MUHAMMAD -- 3 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1178"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10601</td>
          <td width="50%" class="isitabel">&nbsp;INDRA BAYU -- 3 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1179"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10625</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMAD AKBAR -- 3 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1180"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10648</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD KAFIE QADRI -- 3 E</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1181"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10615</td>
          <td width="50%" class="isitabel">&nbsp;M. ROSIKHUL IMAN -- 3 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1182"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10660</td>

          <td width="50%" class="isitabel">&nbsp;MUHAMMAD SINGGIH JATI PAMUNGKAS -- 3 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1183"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10664</td>
          <td width="50%" class="isitabel">&nbsp;MUYASSIR -- 3 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1184"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10666</td>
          <td width="50%" class="isitabel">&nbsp;PANDU RAMDANI -- 3 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1185"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10667</td>
          <td width="50%" class="isitabel">&nbsp;PRATAMA ADI RAMADHANI -- 3 E</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1186"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10710</td>
          <td width="50%" class="isitabel">&nbsp;YAYAN SUGIARTO -- 3 E</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1187"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.9955</td>

          <td width="50%" class="isitabel">&nbsp;AHMAD MATHHURI -- 4 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1188"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11410</td>
          <td width="50%" class="isitabel">&nbsp;AZHARI RANGKUTI -- 4 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1189"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.10974</td>
          <td width="50%" class="isitabel">&nbsp;DEDEK RAHMAT PRATAMA ARMAN -- 3 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1190"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.9995</td>
          <td width="50%" class="isitabel">&nbsp;DESTRIO BUDIWIRATNO  -- 4 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1191"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10000</td>
          <td width="50%" class="isitabel">&nbsp;DORI PERDANA -- 4 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1192"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10011</td>

          <td width="50%" class="isitabel">&nbsp;FAJAR RAHMATTULLAH  -- 4 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1193"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10019</td>
          <td width="50%" class="isitabel">&nbsp;FUAD HAQIQI -- 4 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1194"></td>

          <td width="30%" class="isitabel">&nbsp;1.03.10020</td>
          <td width="50%" class="isitabel">&nbsp;FUAD MUHAMMAD IBRAHIM -- 4 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1195"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10027</td>
          <td width="50%" class="isitabel">&nbsp;GUNAWAN MULTI FEBRIANUS -- 4 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1196"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10030</td>
          <td width="50%" class="isitabel">&nbsp;HAFIDH IHSAN BAIHAQI -- 4 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1197"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11412</td>

          <td width="50%" class="isitabel">&nbsp;HANIEF -- 4 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1198"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10034</td>
          <td width="50%" class="isitabel">&nbsp;HARIST FACHRUDDIN AL MAHI -- 4 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1199"></td>

          <td width="30%" class="isitabel">&nbsp;1.03.10057</td>
          <td width="50%" class="isitabel">&nbsp;IZMIR AZLAN BIJAK BESTARI -- 4 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1200"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10106</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD EKA PUTRA  -- 4 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1201"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10990</td>
          <td width="50%" class="isitabel">&nbsp;MOCHAMAD RIO DAMARA -- 4 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1202"></td>
          <td width="30%" class="isitabel">&nbsp;</td>

          <td width="50%" class="isitabel">&nbsp;M. Kholilullah -- 4 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1203"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10989</td>
          <td width="50%" class="isitabel">&nbsp;MASSEWWA -- 4 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1204"></td>

          <td width="30%" class="isitabel">&nbsp;1.03.10088</td>
          <td width="50%" class="isitabel">&nbsp;MUAMMAR SUHENDRA -- 4 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1205"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11415</td>
          <td width="50%" class="isitabel">&nbsp;QASHMAL SAIFUDDIN -- 4 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1206"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10147</td>
          <td width="50%" class="isitabel">&nbsp;RIJALUL KAHFI  -- 4 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1207"></td>
          <td width="30%" class="isitabel">&nbsp;</td>

          <td width="50%" class="isitabel">&nbsp;Teuku Amizal -- 4</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1208"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10172</td>
          <td width="50%" class="isitabel">&nbsp;WADIL MUQODDAS TUA -- 4 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1209"></td>

          <td width="30%" class="isitabel">&nbsp;1.03.10180</td>
          <td width="50%" class="isitabel">&nbsp;ZULFIKAR ALI AKBAR -- 4 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1210"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.9938</td>
          <td width="50%" class="isitabel">&nbsp;ABU BAKAR -- 4 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1211"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.9957</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD SYARIF REZA  -- 4 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1212"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11416</td>

          <td width="50%" class="isitabel">&nbsp;AJUDIN M. ZAIN -- 4 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1213"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10970</td>
          <td width="50%" class="isitabel">&nbsp;ALFIANUDDIN -- 4 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1214"></td>

          <td width="30%" class="isitabel">&nbsp;1.03.9968</td>
          <td width="50%" class="isitabel">&nbsp;ANDRI NURIMAN ADHIWIKARTA -- 4 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1215"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10984</td>
          <td width="50%" class="isitabel">&nbsp;ISMI HABIBI -- 4 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1216"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.9994</td>
          <td width="50%" class="isitabel">&nbsp;DENNY SARWANI -- 4 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1217"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10979</td>

          <td width="50%" class="isitabel">&nbsp;FAJAR PURNAMA ALAM -- 4 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1218"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10981</td>
          <td width="50%" class="isitabel">&nbsp;HADI NUR RASYID -- 4 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1219"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11418</td>
          <td width="50%" class="isitabel">&nbsp;HAFIZD NASRUN -- 4 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1220"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10053</td>
          <td width="50%" class="isitabel">&nbsp;IRSYAD ZULFAHMI -- 4 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1221"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10094</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMAD FAHMI HAKIM -- 4 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1222"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10992</td>

          <td width="50%" class="isitabel">&nbsp;M. ISA IDRIS -- 4 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1223"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10077</td>
          <td width="50%" class="isitabel">&nbsp;MAYSAL KHAIRUNNAS BAHER -- 4 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1224"></td>

          <td width="30%" class="isitabel">&nbsp;1.03.10125</td>
          <td width="50%" class="isitabel">&nbsp;NIZAR NUGRAHA -- 4 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1225"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10129</td>
          <td width="50%" class="isitabel">&nbsp;OKTA HERIAWAN -- 4 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1226"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10485</td>
          <td width="50%" class="isitabel">&nbsp;SYAMSUDDIN -- 4 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1227"></td>
          <td width="30%" class="isitabel">&nbsp;</td>

          <td width="50%" class="isitabel">&nbsp;YANUAR SUMARNO -- 4 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1228"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.9942</td>
          <td width="50%" class="isitabel">&nbsp;ADAM PAMUNGKAS  -- 4 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1229"></td>

          <td width="30%" class="isitabel">&nbsp;1.03.9959</td>
          <td width="50%" class="isitabel">&nbsp;ALDI CAHYA RAMADHAN -- 4 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1230"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11421</td>
          <td width="50%" class="isitabel">&nbsp;ANDI RAHMAN -- 4 C</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1231"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10971</td>
          <td width="50%" class="isitabel">&nbsp;ANTON WAHYUANTO -- 4 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1232"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11423</td>

          <td width="50%" class="isitabel">&nbsp;DEDE -- 4 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1233"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10976</td>
          <td width="50%" class="isitabel">&nbsp;EDDI SUPRIYADI -- 4 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1234"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.10977</td>
          <td width="50%" class="isitabel">&nbsp;ERSI RAMADONI -- 4 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1235"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10036</td>
          <td width="50%" class="isitabel">&nbsp;HARUN ARRASYID -- 4 C</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1236"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10043</td>
          <td width="50%" class="isitabel">&nbsp;IHSAN ABDULLAH -- 4 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1237"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11425</td>

          <td width="50%" class="isitabel">&nbsp;M. RIZKA -- 4 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1238"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10118</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD RIZA AKBAR -- 4 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1239"></td>

          <td width="30%" class="isitabel">&nbsp;1.03.10073</td>
          <td width="50%" class="isitabel">&nbsp;M. SAUT RANTO PARULIAN N -- 4 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1240"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10988</td>
          <td width="50%" class="isitabel">&nbsp;M. YUSUF SAYUDIE -- 4 C</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1241"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11426</td>
          <td width="50%" class="isitabel">&nbsp;M. FAHRUROJI -- 4 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1242"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11428</td>

          <td width="50%" class="isitabel">&nbsp;MURDHANI M. MARSOLLY -- 4 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1243"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10999</td>
          <td width="50%" class="isitabel">&nbsp;REZKA AKBAR SEPTIAN -- 4 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1244"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11424</td>
          <td width="50%" class="isitabel">&nbsp;M. ZIA EL-HAQ -- 4 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1245"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10179</td>
          <td width="50%" class="isitabel">&nbsp;ZUHRIYANSYAH RACHMAT -- 4 C</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1246"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.9935</td>
          <td width="50%" class="isitabel">&nbsp;ABDUL GHOFUR KAFI -- 4 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1247"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11430</td>

          <td width="50%" class="isitabel">&nbsp;ADI FAHIMUDDIN -- 4 MAK_A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1248"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.9953</td>
          <td width="50%" class="isitabel">&nbsp;AGUNG BISMA AUFAR SUHIAT -- 4 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1249"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11431</td>
          <td width="50%" class="isitabel">&nbsp;AGUNG SYAFRULLAH -- 4 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1250"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.9981</td>
          <td width="50%" class="isitabel">&nbsp;BADRU TAMAN AHDA -- 4 MAK-A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1251"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11432</td>
          <td width="50%" class="isitabel">&nbsp;BINTARA SURYANSYAH -- 4 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1252"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10973</td>

          <td width="50%" class="isitabel">&nbsp;DARUL IHSAN -- 4 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1253"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11433</td>
          <td width="50%" class="isitabel">&nbsp;EDI TURMUDI -- 4 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1254"></td>

          <td width="30%" class="isitabel">&nbsp;1.03.10108</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD FATIH FARHA LUBBI -- 4 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1255"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10016</td>
          <td width="50%" class="isitabel">&nbsp;FATIH ZULFAHMI -- 4 MAK-A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1256"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10033</td>
          <td width="50%" class="isitabel">&nbsp;HANIEF MONADY -- 4 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1257"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11434</td>

          <td width="50%" class="isitabel">&nbsp;LUTHFILAH AMIN -- 4 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1258"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10993</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD KHADAFI -- 4 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1259"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.10994</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD MIFTAHUDDIN -- 4 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1260"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10159</td>
          <td width="50%" class="isitabel">&nbsp;SADAM HUSEN -- 4 MAK-A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1261"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10121</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD ZULFIKAR -- 4 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1262"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10127</td>

          <td width="50%" class="isitabel">&nbsp;NURHADI -- 4 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1263"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10998</td>
          <td width="50%" class="isitabel">&nbsp;RAHMAT SHALEH -- 4 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1264"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.11002</td>
          <td width="50%" class="isitabel">&nbsp;SUNANDAR SULAIMAN -- 4 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1265"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10166</td>
          <td width="50%" class="isitabel">&nbsp;SYARIF HIDAYAT TULLAH -- 4 MAK-A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1266"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10929</td>
          <td width="50%" class="isitabel">&nbsp;SYARIEF HIDAYATULLAH -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1267"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10407</td>

          <td width="50%" class="isitabel">&nbsp;ACHMAD FAROBI -- 5 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1268"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9485</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD FAUZAN -- 5 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1269"></td>

          <td width="30%" class="isitabel">&nbsp;1.02.9491</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD SHAFA ALAZKA -- 5 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1270"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9498</td>
          <td width="50%" class="isitabel">&nbsp;ALLAY MAUDUDI -- 5 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1271"></td>
          <td width="30%" class="isitabel">&nbsp;1.04</td>
          <td width="50%" class="isitabel">&nbsp;ARDANI YUSUF PRAWIRA -- 5 A </td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1272"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9505</td>

          <td width="50%" class="isitabel">&nbsp;ARIEF MACHMUD -- 5 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1273"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10439</td>
          <td width="50%" class="isitabel">&nbsp;ARQY ARI HIDAYAT -- 5 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1274"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10440</td>
          <td width="50%" class="isitabel">&nbsp;ASRI ROZA NURA -- 5 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1275"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9514</td>
          <td width="50%" class="isitabel">&nbsp;AUFAR RAMADANO PUTRA -- 5 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1276"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10458</td>
          <td width="50%" class="isitabel">&nbsp;CAHERI -- 5  B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1277"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9521</td>

          <td width="50%" class="isitabel">&nbsp;CHASAN BAYU PRIYANTOKO -- 5 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1278"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10894</td>
          <td width="50%" class="isitabel">&nbsp;FAIR RAHMATU SHOLEH -- 5 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1279"></td>

          <td width="30%" class="isitabel">&nbsp;1.02.9544</td>
          <td width="50%" class="isitabel">&nbsp;FAQIH EL WAFA -- 5 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1280"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10483</td>
          <td width="50%" class="isitabel">&nbsp;GEMPAR RAHMAD -- 5 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1281"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10415</td>
          <td width="50%" class="isitabel">&nbsp;HANDARU JULIANTORO -- 5 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1282"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9559</td>

          <td width="50%" class="isitabel">&nbsp;HENGKI GUNAWAN -- 5 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1283"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9562</td>
          <td width="50%" class="isitabel">&nbsp;IBNU TSANI RANGGA ADIARI -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1284"></td>

          <td width="30%" class="isitabel">&nbsp;</td>
          <td width="50%" class="isitabel">&nbsp;Imam Abdillah -- 5  A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1285"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9565</td>
          <td width="50%" class="isitabel">&nbsp;IMAM ALI RAMADHAN -- 5 A</td>
        </tr>

		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1286"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9593</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD DICKY MAULANA -- 5 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1287"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9624</td>

          <td width="50%" class="isitabel">&nbsp;NAUFAL UMASANGADJI -- 5 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1288"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9626</td>
          <td width="50%" class="isitabel">&nbsp;NUR RAHMAN WAHYU HIDAYAT -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1289"></td>

          <td width="30%" class="isitabel">&nbsp;1.02.9655.</td>
          <td width="50%" class="isitabel">&nbsp;SUBHI MAHMASONI -- 5 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1290"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10899</td>
          <td width="50%" class="isitabel">&nbsp;TRI BUDI PRAMONO -- 5 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1291"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10457</td>
          <td width="50%" class="isitabel">&nbsp;ZAKY  -- 5 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1292"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9490</td>

          <td width="50%" class="isitabel">&nbsp;AHMAD RIFKY ANWARI -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1293"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11403</td>
          <td width="50%" class="isitabel">&nbsp;ABDUL ROZAK -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1294"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10422</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD ABDURRAHMAN -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1295"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9477</td>
          <td width="50%" class="isitabel">&nbsp;ADI FAHRUDIN -- 5 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1296"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9493</td>
          <td width="50%" class="isitabel">&nbsp;AKHMAD AGURIZAL NITI ANDROMEDA -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1297"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9487</td>

          <td width="50%" class="isitabel">&nbsp;AHMAD KAMAL FANANI -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1298"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10892</td>
          <td width="50%" class="isitabel">&nbsp;AKHIRUL RASYMY -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1299"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.10893</td>
          <td width="50%" class="isitabel">&nbsp;ALI MIFTAHUDDIN -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1300"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10437</td>
          <td width="50%" class="isitabel">&nbsp;ARI UMBORO SENO -- 5 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1301"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9528</td>
          <td width="50%" class="isitabel">&nbsp;DIMAS NURJAHRI -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1302"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10953</td>

          <td width="50%" class="isitabel">&nbsp;FAISAL ENCANG -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1303"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9541</td>
          <td width="50%" class="isitabel">&nbsp;FAISAL HIDAYATULLOH -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1304"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.10954</td>
          <td width="50%" class="isitabel">&nbsp;FAJRIN -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1305"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9547</td>
          <td width="50%" class="isitabel">&nbsp;FAUZAN LUTHFI -- 5 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1306"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10421</td>
          <td width="50%" class="isitabel">&nbsp;LUTHFI SETYAWAN -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1307"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9578</td>

          <td width="50%" class="isitabel">&nbsp;LUTHFRI -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1308"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10950</td>
          <td width="50%" class="isitabel">&nbsp;MOCHAMAD AWALUDIN ROMDONI -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1309"></td>

          <td width="30%" class="isitabel">&nbsp;1.02.9597</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMAD GHOJALI -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1310"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9597</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMAD GHOJALI -- 5 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1311"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11401</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD ZUHA -- 5 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1312"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10897</td>

          <td width="50%" class="isitabel">&nbsp;MUKHTAR HANADI -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1313"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11407</td>
          <td width="50%" class="isitabel">&nbsp;NIDA HILMY -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1314"></td>

          <td width="30%" class="isitabel">&nbsp;1.02.9640</td>
          <td width="50%" class="isitabel">&nbsp;REZA RAMDAN -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1315"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9647</td>
          <td width="50%" class="isitabel">&nbsp;RIAWAN AFIF SOEDHARMO -- 5 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1316"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9614</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD RULIANSYAH ARIFIN -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1317"></td>
          <td width="30%" class="isitabel">&nbsp;1.20.9660</td>

          <td width="50%" class="isitabel">&nbsp;TAUFIQ HASAN -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1318"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10431</td>
          <td width="50%" class="isitabel">&nbsp;WAWAN DARMAWAN -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1319"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11406</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD YOGI ANDIKA -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1320"></td>
          <td width="30%" class="isitabel">&nbsp;</td>
          <td width="50%" class="isitabel">&nbsp;Yulianto -- 5 B</td>
        </tr>

		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1321"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10896</td>
          <td width="50%" class="isitabel">&nbsp;JUL FADRI -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1323"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10408</td>

          <td width="50%" class="isitabel">&nbsp;AGAM HUDIAZ -- 5 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1324"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9486</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD HAEKAL -- 5 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1325"></td>

          <td width="30%" class="isitabel">&nbsp;1.02.9501</td>
          <td width="50%" class="isitabel">&nbsp;ANHARI -- 5 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1326"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10436</td>
          <td width="50%" class="isitabel">&nbsp;ARDYA CHARISMA PRAPANCA -- 5 MAK-A </td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1327"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9517</td>
          <td width="50%" class="isitabel">&nbsp;BAYU ADIYA P -- 5 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1328"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10949</td>

          <td width="50%" class="isitabel">&nbsp;GUFRON HADI -- 5 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1329"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10414</td>
          <td width="50%" class="isitabel">&nbsp;GUGUS FIRMANSYAH -- 5 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1330"></td>

          <td width="30%" class="isitabel">&nbsp;1.02.9573</td>
          <td width="50%" class="isitabel">&nbsp;IRVAN GUNADHARMA -- 5 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1331"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9588</td>
          <td width="50%" class="isitabel">&nbsp;MOH.IBROH ULI NUHA -- 5 MAK-A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1332"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9616</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD YAUMI NURROHMAN -- 5 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1333"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9620</td>

          <td width="50%" class="isitabel">&nbsp;MUHAMMAD ZUL IKROM -- 5 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1334"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9621</td>
          <td width="50%" class="isitabel">&nbsp;MUHDI ABDUL AZIZ -- 5 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1335"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.10898</td>
          <td width="50%" class="isitabel">&nbsp;ORGANDA -- 5 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1336"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9631</td>
          <td width="50%" class="isitabel">&nbsp;RAHMAT RAMADHAN REMAZ -- 5 MAK-A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1337"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10430</td>
          <td width="50%" class="isitabel">&nbsp;SOFWAN AZWARI -- 5 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1338"></td>
          <td width="30%" class="isitabel">&nbsp;1.01.8982</td>

          <td width="50%" class="isitabel">&nbsp;ABDUL ROSYID -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1339"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.9869</td>
          <td width="50%" class="isitabel">&nbsp;ACHMAD ISRADI ADITYA. B -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1340"></td>

          <td width="30%" class="isitabel">&nbsp;1.01.8984</td>
          <td width="50%" class="isitabel">&nbsp;ACHMAD TORIQ -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1341"></td>
          <td width="30%" class="isitabel">&nbsp;1.01.8992</td>
          <td width="50%" class="isitabel">&nbsp;AHLAN ZULFAKHRI -- 6 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1342"></td>
          <td width="30%" class="isitabel">&nbsp;1.01.8996</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD ISA ANSYORI -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1343"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.9871</td>

          <td width="50%" class="isitabel">&nbsp;ANDIKA RANGGA WIJAYA -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1344"></td>
          <td width="30%" class="isitabel">&nbsp;1.01.9000</td>
          <td width="50%" class="isitabel">&nbsp;ANDREW BERNANDA -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1345"></td>

          <td width="30%" class="isitabel">&nbsp;1.01.9026</td>
          <td width="50%" class="isitabel">&nbsp;DIO MOHAMAD NURDIANSAH -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1346"></td>
          <td width="30%" class="isitabel">&nbsp;1.00.8535</td>
          <td width="50%" class="isitabel">&nbsp;FADLAN AL ABROR -- 6 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1347"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11391</td>
          <td width="50%" class="isitabel">&nbsp;GILANG ANGGRIANDIKA -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1348"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10888</td>

          <td width="50%" class="isitabel">&nbsp;IHSAN  -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1349"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.9882</td>
          <td width="50%" class="isitabel">&nbsp;IKHSAN RASYIDI -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1350"></td>

          <td width="30%" class="isitabel">&nbsp;1.01.9090</td>
          <td width="50%" class="isitabel">&nbsp;MIFTAH FARID -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1351"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.9889</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD HAYKAL -- 6 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1352"></td>
          <td width="30%" class="isitabel">&nbsp;1.01.9119</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD SONI LAZUARDI -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1353"></td>
          <td width="30%" class="isitabel">&nbsp;1.01.9123</td>

          <td width="50%" class="isitabel">&nbsp;MUSTAKIM -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1354"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.9891</td>
          <td width="50%" class="isitabel">&nbsp;NASRUL ULUM -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1355"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11392</td>
          <td width="50%" class="isitabel">&nbsp;NOVEL LEGA -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1356"></td>
          <td width="30%" class="isitabel">&nbsp;1.01.9127</td>
          <td width="50%" class="isitabel">&nbsp;NUR ARIF KARTIKA -- 6 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1357"></td>
          <td width="30%" class="isitabel">&nbsp;1.01.9114</td>
          <td width="50%" class="isitabel">&nbsp;REZA SAENJULA PUTRA -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1358"></td>
          <td width="30%" class="isitabel">&nbsp;1.01.9143</td>

          <td width="50%" class="isitabel">&nbsp;RIFQI HILMAN -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1359"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10393</td>
          <td width="50%" class="isitabel">&nbsp;RIJAL MASYAHID FITRAH -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1360"></td>

          <td width="30%" class="isitabel">&nbsp;1.01.9155</td>
          <td width="50%" class="isitabel">&nbsp;RIZKY SYAHPUTRA -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1361"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.9899</td>
          <td width="50%" class="isitabel">&nbsp;SAIDIMAN HADINATA -- 6 A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1362"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10929</td>
          <td width="50%" class="isitabel">&nbsp;SYARIEF HIDAYATULLAH -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1363"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10930</td>

          <td width="50%" class="isitabel">&nbsp;YOGI RATMO M. -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1364"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11393</td>
          <td width="50%" class="isitabel">&nbsp;ZUMAR ACHMAD SHOLEH -- 6 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1365"></td>

          <td width="30%" class="isitabel">&nbsp;1.01.8983</td>
          <td width="50%" class="isitabel">&nbsp;ACHMAD SYAEPUDIN -- 6 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1366"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.9867</td>
          <td width="50%" class="isitabel">&nbsp;AFDHAL MUHARMAN -- 6 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1367"></td>
          <td width="30%" class="isitabel">&nbsp;1.01.8995</td>
          <td width="50%" class="isitabel">&nbsp;AHMAD FARWIS -- 6 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1368"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10927</td>

          <td width="50%" class="isitabel">&nbsp;AHMAD HAERANI MARSAF -- 6 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1369"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.9870</td>
          <td width="50%" class="isitabel">&nbsp;ANDI M. NURUL AFDHAL -- 6 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1370"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11395</td>
          <td width="50%" class="isitabel">&nbsp;ANDRI RIZKY AGUSTIAN -- 6 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1371"></td>
          <td width="30%" class="isitabel">&nbsp;</td>
          <td width="50%" class="isitabel">&nbsp;ANGGA RAKSANAGARA -- 6 B</td>
        </tr>

		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1372"></td>
          <td width="30%" class="isitabel">&nbsp;1.01.9002</td>
          <td width="50%" class="isitabel">&nbsp;ANGGIT FITRIYADI -- 6 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1373"></td>
          <td width="30%" class="isitabel">&nbsp;1.01.9007</td>

          <td width="50%" class="isitabel">&nbsp;ARIEF RAHMAN HAKIM -- 6 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1374"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11396</td>
          <td width="50%" class="isitabel">&nbsp;ARIF RAHMAN  -- 6 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1375"></td>

          <td width="30%" class="isitabel">&nbsp;1.01.9030</td>
          <td width="50%" class="isitabel">&nbsp;DWIMA RIZKY RUDJITO -- 6 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1376"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.9875</td>
          <td width="50%" class="isitabel">&nbsp;FAISAL PARTAKUSUMA R. -- 6 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1377"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.9850</td>
          <td width="50%" class="isitabel">&nbsp;FAJAR CANDRA PERDAPA -- 6 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1378"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10388</td>

          <td width="50%" class="isitabel">&nbsp;HERI FAYOL -- 6 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1379"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10925</td>
          <td width="50%" class="isitabel">&nbsp;IMAMAH AL HAKAM -- 6 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1380"></td>

          <td width="30%" class="isitabel">&nbsp;1.01.9070</td>
          <td width="50%" class="isitabel">&nbsp;ISMAIL KHAIRURRIJAL -- 6 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1381"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11397</td>
          <td width="50%" class="isitabel">&nbsp;M. KHOLID -- 6 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1382"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10928</td>
          <td width="50%" class="isitabel">&nbsp;MAHATHIR -- 6 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1383"></td>
          <td width="30%" class="isitabel">&nbsp;1.01.9104</td>

          <td width="50%" class="isitabel">&nbsp;MUHAMAD YUSUF -- 6 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1384"></td>
          <td width="30%" class="isitabel">&nbsp;1.01.9121</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD Z. RAHMATILLAH -- 6 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1385"></td>

          <td width="30%" class="isitabel">&nbsp;1.03.9931</td>
          <td width="50%" class="isitabel">&nbsp;RAJIF FANDI -- 6 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1386"></td>
          <td width="30%" class="isitabel">&nbsp;1.01.9134</td>
          <td width="50%" class="isitabel">&nbsp;RAMA ANDRI WARDANA -- 6 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1387"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.9897</td>
          <td width="50%" class="isitabel">&nbsp;ROMMY RAHMANDI L. -- 6 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1388"></td>
          <td width="30%" class="isitabel">&nbsp;1.01.9035</td>

          <td width="50%" class="isitabel">&nbsp;FAIZ IBNU AWALI -- 6 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1389"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10387</td>
          <td width="50%" class="isitabel">&nbsp;HENDAR ALI IRAWAN -- 6 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1390"></td>

          <td width="30%" class="isitabel">&nbsp;1.03.9880</td>
          <td width="50%" class="isitabel">&nbsp;HUBBAINI -- 6 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1391"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9398</td>
          <td width="50%" class="isitabel">&nbsp;IZHAR MALIK -- 6 MAK-A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1392"></td>
          <td width="30%" class="isitabel">&nbsp;1.01.9076</td>
          <td width="50%" class="isitabel">&nbsp;KAMAL HASAN -- 6 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1393"></td>
          <td width="30%" class="isitabel">&nbsp;1.01.9101</td>

          <td width="50%" class="isitabel">&nbsp;M. DIDA BANI ADAM -- 6 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1394"></td>
          <td width="30%" class="isitabel">&nbsp;1.01.9103</td>
          <td width="50%" class="isitabel">&nbsp;M. SHOHIHULLAH -- 6 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1395"></td>

          <td width="30%" class="isitabel">&nbsp;1.03.9887</td>
          <td width="50%" class="isitabel">&nbsp;MAKSUSI -- 6 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1396"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.9884</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMAD SYAHID KALJA -- 6 MAK-A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1397"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10932</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD BASAR -- 6 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1398"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10931</td>

          <td width="50%" class="isitabel">&nbsp;MUHAMMAD BASYIR -- 6 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1399"></td>
          <td width="30%" class="isitabel">&nbsp;1.01.9111</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD HANIF -- 6 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1400"></td>

          <td width="30%" class="isitabel">&nbsp;1.04.10392</td>
          <td width="50%" class="isitabel">&nbsp;MUMTAZ IBNU YASSA -- 6 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1401"></td>
          <td width="30%" class="isitabel">&nbsp;1.01.9132</td>
          <td width="50%" class="isitabel">&nbsp;QADARASNADI RASYID -- 6 MAK-A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1402"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.9896</td>
          <td width="50%" class="isitabel">&nbsp;REZA FAJRURRAHMAN -- 6 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1403"></td>
          <td width="30%" class="isitabel">&nbsp;1.01.9148</td>

          <td width="50%" class="isitabel">&nbsp;RIZAL MAHMUDI -- 6 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1404"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10394</td>
          <td width="50%" class="isitabel">&nbsp;SIFRUL AKHYAR -- 6 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1405"></td>

          <td width="30%" class="isitabel">&nbsp;1.01.9369</td>
          <td width="50%" class="isitabel">&nbsp;YESALEH BIN YAHYA -- 6 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1406"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10395</td>
          <td width="50%" class="isitabel">&nbsp;YOGA PERMANA -- 6 MAK-A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1407"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11466</td>
          <td width="50%" class="isitabel">&nbsp;ACHMAD REZA -- Int. A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1408"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11467</td>

          <td width="50%" class="isitabel">&nbsp;AGUNG WIRO PRABOWO -- Int. A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1409"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11468</td>
          <td width="50%" class="isitabel">&nbsp;AGUS WIDAYAT -- Int. A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1410"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11469</td>
          <td width="50%" class="isitabel">&nbsp;AHCMAD LUDFI -- Int. A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1411"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11489</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD ANDI FAUZAN -- Int. A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1412"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11471</td>
          <td width="50%" class="isitabel">&nbsp;ARIEF INDRA MULYA -- Int. A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1413"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11473</td>

          <td width="50%" class="isitabel">&nbsp;ASDES QOMAR -- Int. A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1414"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11474</td>
          <td width="50%" class="isitabel">&nbsp;ATMA AL-AZIZI -- Int. A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1415"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11475</td>
          <td width="50%" class="isitabel">&nbsp;BAGINDA MUHAMMAD RANDA -- Int. A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1416"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11476</td>
          <td width="50%" class="isitabel">&nbsp;DIEMAS IRAWAN -- Int. A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1417"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11478</td>
          <td width="50%" class="isitabel">&nbsp;EKO RIYADI -- Int. A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1418"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11479</td>

          <td width="50%" class="isitabel">&nbsp;GAGAS ARIASAKTI WINATA -- Int. A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1419"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11480</td>
          <td width="50%" class="isitabel">&nbsp;GAUNG PERDANA -- Int. A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1420"></td>

          <td width="30%" class="isitabel">&nbsp;</td>
          <td width="50%" class="isitabel">&nbsp;Iqbal.H -- Int. A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1421"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11485</td>
          <td width="50%" class="isitabel">&nbsp;JUNAIDI ABDULLAH -- Int. A</td>
        </tr>

		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1422"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11487</td>
          <td width="50%" class="isitabel">&nbsp;MOHAMMAD BENI KURNIAWAN -- Int. A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1423"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11490</td>

          <td width="50%" class="isitabel">&nbsp;MUHAMMAD HAMDAN -- Int. A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1424"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11488</td>
          <td width="50%" class="isitabel">&nbsp;MOHAMMAD RENDY B -- Int. A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1425"></td>

          <td width="30%" class="isitabel">&nbsp;1.06.11486</td>
          <td width="50%" class="isitabel">&nbsp;M.WILDAN HANAFIAH  -- Int. A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1426"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11492</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD YASIN -- Int. A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1427"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11493</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD YUSUF -- Int. A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1428"></td>
          <td width="30%" class="isitabel">&nbsp;</td>

          <td width="50%" class="isitabel">&nbsp;Fakhri</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1429"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10081</td>
          <td width="50%" class="isitabel">&nbsp;MOCHAMMAD ZIA`ULHAQ</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1430"></td>

          <td width="30%" class="isitabel">&nbsp;</td>
          <td width="50%" class="isitabel">&nbsp;M RIZA H</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1431"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10018</td>
          <td width="50%" class="isitabel">&nbsp;FIKRI   -- 4 C</td>
        </tr>

		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1432"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10955</td>
          <td width="50%" class="isitabel">&nbsp;SAIFUL BAHRI -- 5 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1433"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10076</td>

          <td width="50%" class="isitabel">&nbsp;MAULANA HASANUDIN -- 4 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1434"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9546</td>
          <td width="50%" class="isitabel">&nbsp;FATHUR ROCHMAN -- 5 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1435"></td>

          <td width="30%" class="isitabel">&nbsp;</td>
          <td width="50%" class="isitabel">&nbsp;M RIZKI SAAD</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1436"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10130</td>
          <td width="50%" class="isitabel">&nbsp;PAHRIL RACHMAN -- 4 B</td>
        </tr>

		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1437"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11422</td>
          <td width="50%" class="isitabel">&nbsp;AZI TRY WIBAWA -- 4 C</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1438"></td>
          <td width="30%" class="isitabel">&nbsp;</td>
          <td width="50%" class="isitabel">&nbsp;M JULIANDI</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1439"></td>
          <td width="30%" class="isitabel">&nbsp;</td>
          <td width="50%" class="isitabel">&nbsp;TEUKU UMAR </td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1440"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9503</td>

          <td width="50%" class="isitabel">&nbsp;ARDYANSYAH</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1441"></td>
          <td width="30%" class="isitabel">&nbsp;1.04.10436</td>
          <td width="50%" class="isitabel">&nbsp;ARDYA CHARISMA PRAPANCA -- 5 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1442"></td>

          <td width="30%" class="isitabel">&nbsp;1.02.9618</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD ZAKY  -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1443"></td>
          <td width="30%" class="isitabel">&nbsp;1.02.9608</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMAD MACHMUD  -- 5 B</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1444"></td>
          <td width="30%" class="isitabel">&nbsp;</td>
          <td width="50%" class="isitabel">&nbsp;M Zainul -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1445"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10975</td>

          <td width="50%" class="isitabel">&nbsp;DENNI NUGRAHA -- 4 A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1446"></td>
          <td width="30%" class="isitabel">&nbsp;1.03.10061</td>
          <td width="50%" class="isitabel">&nbsp;JEFRY ZAKI BUSTARI -- 4 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1447"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.10991</td>
          <td width="50%" class="isitabel">&nbsp;MUHAMMAD FAJRI -- 4 MAK-A</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1448"></td>
          <td width="30%" class="isitabel">&nbsp;1.05.10972</td>
          <td width="50%" class="isitabel">&nbsp;BAYU AJI NUGRAHA -- 4 MAK-A</td>

        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1449"></td>
          <td width="30%" class="isitabel">&nbsp;1.06.11409</td>
          <td width="50%" class="isitabel">&nbsp;SYAHRUL HADI SUMIRAT -- 5 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1450"></td>
          <td width="30%" class="isitabel">&nbsp;</td>

          <td width="50%" class="isitabel">&nbsp;Adi Wicaksono -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1451"></td>
          <td width="30%" class="isitabel">&nbsp;</td>
          <td width="50%" class="isitabel">&nbsp;Fajar.Al ghozali -- 1 B</td>
        </tr>
		          <tr> 
          <td width="20%" class="kiritabel">&nbsp;<input type="checkbox" name="addme[]" value="1322"></td>

          <td width="30%" class="isitabel">&nbsp;1.05.10946</td>
          <td width="50%" class="isitabel">&nbsp;ABDUL BA`IS SUBHI -- 5 MAK-A</td>
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
