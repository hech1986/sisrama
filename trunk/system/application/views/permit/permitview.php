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
<title>Form Perijinan Santri</title>
<!-- #EndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="themes/default/template.css" type="text/css">
</head><body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" onLoad="placeFocus()">




<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
  <!--tr> 
    <td align="right"><img src="images/atslogo.jpg" width="42" height="30"></td>
  </tr-->
  <tr> 
    <td align="right" valign="center" class="submenu"><img src="images/dn_logo_smallest.gif"  align="left"><!-- #BeginEditable "judul" -->Form Perijinan Santri<!-- #EndEditable --></td>
  </tr>
  <tr> 
    <td> 
      &nbsp;
<form name="rimba" enctype="multipart/form-data" method="post" action="/sisrama/permit.php?action=save">
	
	<script>
	function printMe() {
   	document.forms[0]['action'].value = 'print';
   	document.forms[0].submit();
	}
	</script>
	
    <!-- #BeginEditable "isi" --> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="17%" class="formcolor">Siswa</td>
          <td width="83%" class="formcolor" colspan=3>
				<input type="hidden" name="action" value="save">
				<input type="hidden" id="studentid" name="studentid" value="">
				<input type="hidden" id="permitid" name="permitid" value="">
				<input type=text size=25 readonly id="studentname" value=""> &nbsp; 
				<input type="button" class="formbox" value=" Pilih Siswa... " onClick="javascript:window.open('db_lookup.php?opener=1','Search Student','width=600,height=400,menubar=no,toolbar=no,location=no')">
          </td>
        </tr>
<div id=detailstudent style="display:'none'">
			 <tr>
          <td width="17%" class="formcolor">Nomor Induk</td>
          <td width="83%" class="formcolor" colspan=3>
         <input type="text" id=regnumber name="regnumber" readonly value="" size=10>
          </td>
        </tr>
			 <tr>
          <td width="17%" class="formcolor">Kelas</td>
          <td width="83%" class="formcolor" colspan=3>
         <input type="text" id=studclass name="class" readonly value="" size=5>
          </td>
        </tr>
</div>
		<tr>
          <td width="17%" class="formcolor">Tanggal Izin</td>
          <td width="35%" class="formcolor">
			<select name="pdateDay">
<option></option><option label="01" value="1">01</option>
<option label="02" value="2">02</option>
<option label="03" value="3">03</option>
<option label="04" value="4">04</option>
<option label="05" value="5">05</option>
<option label="06" value="6" selected="selected">06</option>
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
<select name="pdateMonth">
<option></option><option label="01" value="01">01</option>
<option label="02" value="02">02</option>
<option label="03" value="03">03</option>
<option label="04" value="04" selected="selected">04</option>
<option label="05" value="05">05</option>
<option label="06" value="06">06</option>
<option label="07" value="07">07</option>
<option label="08" value="08">08</option>
<option label="09" value="09">09</option>
<option label="10" value="10">10</option>
<option label="11" value="11">11</option>
<option label="12" value="12">12</option>
</select>
<select name="pdateYear">
<option></option><option label="2008" value="2008" selected="selected">2008</option>
</select> - 
			<select name="ptimeHour">
<option></option><option label="00" value="00">00</option>
<option label="01" value="01">01</option>
<option label="02" value="02">02</option>
<option label="03" value="03">03</option>
<option label="04" value="04">04</option>
<option label="05" value="05">05</option>
<option label="06" value="06">06</option>
<option label="07" value="07">07</option>
<option label="08" value="08">08</option>
<option label="09" value="09">09</option>
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
<option label="22" value="22" selected="selected">22</option>
<option label="23" value="23">23</option>
</select>
<select name="ptimeMinute">
<option></option><option label="00" value="00">00</option>
<option label="01" value="01">01</option>
<option label="02" value="02">02</option>
<option label="03" value="03">03</option>
<option label="04" value="04">04</option>
<option label="05" value="05">05</option>
<option label="06" value="06">06</option>
<option label="07" value="07">07</option>
<option label="08" value="08">08</option>
<option label="09" value="09">09</option>
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
<option label="32" value="32">32</option>
<option label="33" value="33">33</option>
<option label="34" value="34">34</option>
<option label="35" value="35">35</option>
<option label="36" value="36">36</option>
<option label="37" value="37">37</option>
<option label="38" value="38">38</option>
<option label="39" value="39">39</option>
<option label="40" value="40">40</option>
<option label="41" value="41">41</option>
<option label="42" value="42">42</option>
<option label="43" value="43">43</option>
<option label="44" value="44">44</option>
<option label="45" value="45">45</option>
<option label="46" value="46">46</option>
<option label="47" value="47">47</option>
<option label="48" value="48">48</option>
<option label="49" value="49">49</option>
<option label="50" value="50">50</option>
<option label="51" value="51" selected="selected">51</option>
<option label="52" value="52">52</option>
<option label="53" value="53">53</option>
<option label="54" value="54">54</option>
<option label="55" value="55">55</option>
<option label="56" value="56">56</option>
<option label="57" value="57">57</option>
<option label="58" value="58">58</option>
<option label="59" value="59">59</option>
</select>

          </td>
          <td width="17%" class="formcolor">Batas Izin</td>
          <td width="30%" class="formcolor">
			<select name="exdateDay">
<option></option><option label="01" value="1">01</option>
<option label="02" value="2">02</option>
<option label="03" value="3">03</option>
<option label="04" value="4">04</option>
<option label="05" value="5">05</option>
<option label="06" value="6" selected="selected">06</option>
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
<select name="exdateMonth">
<option></option><option label="01" value="01">01</option>
<option label="02" value="02">02</option>
<option label="03" value="03">03</option>
<option label="04" value="04" selected="selected">04</option>
<option label="05" value="05">05</option>
<option label="06" value="06">06</option>
<option label="07" value="07">07</option>
<option label="08" value="08">08</option>
<option label="09" value="09">09</option>
<option label="10" value="10">10</option>
<option label="11" value="11">11</option>
<option label="12" value="12">12</option>
</select>
<select name="exdateYear">
<option></option><option label="2008" value="2008" selected="selected">2008</option>
</select> - 
			<select name="extimeHour">
<option></option><option label="00" value="00">00</option>
<option label="01" value="01">01</option>
<option label="02" value="02">02</option>
<option label="03" value="03">03</option>
<option label="04" value="04">04</option>
<option label="05" value="05">05</option>
<option label="06" value="06">06</option>
<option label="07" value="07">07</option>
<option label="08" value="08">08</option>
<option label="09" value="09">09</option>
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
<option label="22" value="22" selected="selected">22</option>
<option label="23" value="23">23</option>
</select>
<select name="extimeMinute">
<option></option><option label="00" value="00">00</option>
<option label="01" value="01">01</option>
<option label="02" value="02">02</option>
<option label="03" value="03">03</option>
<option label="04" value="04">04</option>
<option label="05" value="05">05</option>
<option label="06" value="06">06</option>
<option label="07" value="07">07</option>
<option label="08" value="08">08</option>
<option label="09" value="09">09</option>
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
<option label="32" value="32">32</option>
<option label="33" value="33">33</option>
<option label="34" value="34">34</option>
<option label="35" value="35">35</option>
<option label="36" value="36">36</option>
<option label="37" value="37">37</option>
<option label="38" value="38">38</option>
<option label="39" value="39">39</option>
<option label="40" value="40">40</option>
<option label="41" value="41">41</option>
<option label="42" value="42">42</option>
<option label="43" value="43">43</option>
<option label="44" value="44">44</option>
<option label="45" value="45">45</option>
<option label="46" value="46">46</option>
<option label="47" value="47">47</option>
<option label="48" value="48">48</option>
<option label="49" value="49">49</option>
<option label="50" value="50">50</option>
<option label="51" value="51" selected="selected">51</option>
<option label="52" value="52">52</option>
<option label="53" value="53">53</option>
<option label="54" value="54">54</option>
<option label="55" value="55">55</option>
<option label="56" value="56">56</option>
<option label="57" value="57">57</option>
<option label="58" value="58">58</option>
<option label="59" value="59">59</option>
</select>

          </td>
        </tr>

        <tr> 
          <td width="17%" class="formcolor">Tujuan</td>
          <td width="25%" class="formcolor">
			<textarea name="destination" cols=25 rows=3></textarea> 
          </td>
          <td width="17%" class="formcolor">Alasan</td>
          <td width="83%" class="formcolor">
			<textarea name="reason" cols=25 rows=3></textarea> 
          </td>
        </tr>
        <tr> 
          <td width="17%" class="formcolor">Yang Mendampingi</td>
          <td width="83%" class="formcolor" colspan=3>
			<input type="text" name="supervisor" value="" size=25>
          </td>
        </tr>
			<tr>
				<td colspan=5 class="formcolor"><hr width=100% size=1></td>
			</tr>
			<tr>
          <td width="17%" class="formcolor">Waktu Kedatangan</td>
          <td width="25%" class="formcolor" colspan=4>
         <select name="retdateDay">
<option></option><option label="01" value="1">01</option>
<option label="02" value="2">02</option>
<option label="03" value="3">03</option>
<option label="04" value="4">04</option>
<option label="05" value="5">05</option>
<option label="06" value="6" selected="selected">06</option>
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
<select name="retdateMonth">
<option></option><option label="01" value="01">01</option>
<option label="02" value="02">02</option>
<option label="03" value="03">03</option>
<option label="04" value="04" selected="selected">04</option>
<option label="05" value="05">05</option>
<option label="06" value="06">06</option>
<option label="07" value="07">07</option>
<option label="08" value="08">08</option>
<option label="09" value="09">09</option>
<option label="10" value="10">10</option>
<option label="11" value="11">11</option>
<option label="12" value="12">12</option>
</select>
<select name="retdateYear">
<option></option><option label="2008" value="2008" selected="selected">2008</option>
</select> - 
			<select name="rettimeHour">
<option></option><option label="00" value="00">00</option>
<option label="01" value="01">01</option>
<option label="02" value="02">02</option>
<option label="03" value="03">03</option>
<option label="04" value="04">04</option>
<option label="05" value="05">05</option>
<option label="06" value="06">06</option>
<option label="07" value="07">07</option>
<option label="08" value="08">08</option>
<option label="09" value="09">09</option>
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
<option label="22" value="22" selected="selected">22</option>
<option label="23" value="23">23</option>
</select>
<select name="rettimeMinute">
<option></option><option label="00" value="00">00</option>
<option label="01" value="01">01</option>
<option label="02" value="02">02</option>
<option label="03" value="03">03</option>
<option label="04" value="04">04</option>
<option label="05" value="05">05</option>
<option label="06" value="06">06</option>
<option label="07" value="07">07</option>
<option label="08" value="08">08</option>
<option label="09" value="09">09</option>
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
<option label="32" value="32">32</option>
<option label="33" value="33">33</option>
<option label="34" value="34">34</option>
<option label="35" value="35">35</option>
<option label="36" value="36">36</option>
<option label="37" value="37">37</option>
<option label="38" value="38">38</option>
<option label="39" value="39">39</option>
<option label="40" value="40">40</option>
<option label="41" value="41">41</option>
<option label="42" value="42">42</option>
<option label="43" value="43">43</option>
<option label="44" value="44">44</option>
<option label="45" value="45">45</option>
<option label="46" value="46">46</option>
<option label="47" value="47">47</option>
<option label="48" value="48">48</option>
<option label="49" value="49">49</option>
<option label="50" value="50">50</option>
<option label="51" value="51" selected="selected">51</option>
<option label="52" value="52">52</option>
<option label="53" value="53">53</option>
<option label="54" value="54">54</option>
<option label="55" value="55">55</option>
<option label="56" value="56">56</option>
<option label="57" value="57">57</option>
<option label="58" value="58">58</option>
<option label="59" value="59">59</option>
</select>

          </td>
			</tr>
			 <tr>
          <td width="17%" class="formcolor">Keterangan</td>
          <td width="25%" class="formcolor" colspan=4>
         <textarea name="notes" cols=25 rows=3></textarea>
          </td>
			</tr>
			 <tr>
          <td width="17%" class="formcolor">Yang Mengijinkan</td>
          <td width="25%" class="formcolor" colspan=4>
                    <select name="permitter">
			<option></option>
                    </select>
			
          </td>
			</tr>
      </table>
      <!-- #EndEditable --></td>
		  <tr> 
    <td align="right">
	 	<input type="button" class="formbox" value=" Save " OnClick="javascript:this.form.submit()">
	 	
	 	<input type="button" class="formbox" value=" Search " OnClick="javascript:window.location='db_lookup.php?type=permit'">
		<input type="button" class="formbox" value=" Refresh " OnClick="javascript:window.location='/sisrama/permit.php?'">
	 	
	 	<input type="button" class="formbox" value=" Close " OnClick="javascript:window.close()">
	 	    </td>
  </tr>  <tr>
    <td><!-- #BeginEditable "table" -->
      <!-- #EndEditable --></td>
  </tr>
</table>
<table width="95%" cellspacing=0 cellpadding=0 align="center">
        <tr align="center"> 
	<td colspan="2" height="22" class="footer" align="center"><!--Powered by sisrama 0.5.5--> 
            </td>
        </tr>
      </table>
</body>
</html>