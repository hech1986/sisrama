<html>
<head>

<SCRIPT LANGUAGE="JavaScript">

<!-- Begin
function placeFocus() {
if (document.forms.length > 0) {
var field = document.forms[0];
for (i = 0; i < field.length; i++) {
if ((field.elements[i].type == "text") || (field.elements[i].type == "textarea") || (field.elements[i].type == "password" ) || (field.elements[i].type.toString().charAt(0) == "s")) {
document.forms[0].elements[i].focus();
break;
         }
          }
             }
        }
//  End -->

</script>


<title>PPIA - Program Absen dan Perijinan</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="docs/afs.css" type="text/css">
</script>
<link rel="stylesheet" href="themes/default/template.css" type="text/css">
</head>

<body bgcolor="#FFFFFF" text="#000000" topmargin="0" onLoad="placeFocus()">
<table width="750" border="0" cellspacing="0" cellpadding="0" align="center">

  <tr> 
    <td class="banner" height=65 width=700>&nbsp;</td>
  </tr>
  <tr> 
    <td bgcolor="#003366" class="formbox" height=35> 
      <h3>Program Perijinan dan Absensi Darunnajah</h3>
    </td>
  </tr>
  <tr> 
    <td> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0">

        <tr> 
          <td width="43%" valign="top"><br>
            <img src="images/mesjid.jpg" ><br>
            <br>
          </td>
          <td width="57%" valign="top"> <br>
            <table width="100%" cellspacing="0" cellpadding="0" class="line">
              <tr> 
                <td valign="top" class="content"> 
                  <h3><font color="#0066CC">User Login</font></h3>

						
						<form name=login method=post action=/~spawn/ppia/index.php?action=login>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td class="content" width="28%" bgcolor="#E9E9E9">Username</td>
							 <td class="content" width="72%" bgcolor="#E9E9E9">
									  	
										<input type="password" name="username" value="">
                      </td>
                    </tr>
                    <tr> 
                      <td class="content" width="28%" bgcolor="#E9E9E9">Password</td>

                      <td class="content" width="72%" bgcolor="#E9E9E9"> 
                        <input type="password" name="passwd" value="">
                      </td>
                    </tr>
                    <tr> 
                      <td class="content" width="28%" bgcolor="#E9E9E9">&nbsp;</td>
                      <td class="content" width="72%" bgcolor="#E9E9E9">
	<input type="submit" class="formbox" name="sbm" value=" Login ">
                      </td>
                    </tr>

                    <tr> 
                      <td class="content" width="28%">&nbsp;</td>
                      <td class="content" width="72%">&nbsp;</td>
                    </tr>
                    <tr> 
                      <td class="content" width="28%" bgcolor="#E9E9E9">&nbsp;</td>
                      <td class="content" width="72%" bgcolor="#E9E9E9">Forgot 
                        your password?</td>
                    </tr>
                  </table>

                  <br>
                </td>
              </tr>
            </table>
            <br>
            <br>
            <br>
            <table width="100%" cellspacing="0" cellpadding="0" class="line">
              <tr> 
                <td align="center" class="content">&nbsp; </td>

              </tr>
            </table>
          </td>
        </tr>
        <tr align="center"> 
          <td colspan="2" height="22" background="images/footer.png" class="footer"> 
            Pondok Pesantren Darunnajah<br>
            Ulujami Jakarta Selatan</td>
        </tr>

      </table>
    </td>
  </tr>
</table>
</body>
</html>
