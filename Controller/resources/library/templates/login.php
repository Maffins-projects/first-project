<?php 

 	include("_connect.php");
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UML Software</title>

<link href="uml_colour_scheme.css" rel="stylesheet" type="text/css" />
<link href="uml.css" rel="stylesheet" type="text/css" />

<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script language="javascript">
	if (AC_FL_RunContent == 0) {
		alert("This page requires AC_RunActiveContent.js.");
	} else {
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0',
			'width', '780',
			'height', '280',
			'src', 'XMLSlideshow',
			'quality', 'high',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'align', 'middle',
			'play', 'true',
			'loop', 'true',
			'scale', 'noborder',
			'wmode', 'transparent',
			'devicefont', 'false',
			'id', 'XMLSlideshow',
			'bgcolor', '#ffffff',
			'name', 'XMLSlideshow',
			'menu', 'true',
			'allowFullScreen', 'false',
			'allowScriptAccess','sameDomain',
			'movie', 'XMLSlideshow',
			'salign', ''
			); //end AC code
	}
</script>

<style type="text/css">
<!--
.style1 {font-weight: bold}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>

<body>
<table width="940" border="0" align="center" cellpadding="6" cellspacing="0">
  <tr>
    <td valign="top"><div align="left">
      <div class="subHeaderBtn">
        <p>Log in</p>
      </div>
      <div  class="umltext">
        <table width="100%" height="270" border="0" align="center" cellpadding="2" cellspacing="0">
          <!--DWLayoutTable-->
          <tr >
            <td width="962" height="199" valign="top"><div>
              <table width="384" border="0" align="center" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <form action='accounts.php' method='post' name='registration' id='registration' target='_parent' >
                  <tr valign='middle'>
                    <td height="32" align='center' valign='middle'><div align="center" class="style9">UML Login Form </div></td>
                  </tr>
                  <tr >
                    <td height='24' valign='top'><strong>Username [Email] <br />
                      <input name='username' type='text' class="textpaddednorm4"  id='username'/>
                      </strong><span ><strong><br />
                      </strong></span></td>
                  </tr>
                  <tr >
                    <td height='29' valign='top'><strong>Password</strong><br />
                      <input name='password' type='password' class="textpaddednorm4"  id='password5' />
                      <br /></td>
                  </tr>
                  <tr>
                    <td height='80' valign='top' ><div align="center">
                      <input name="submit" type="submit" class="umlfontgrey" id="submit" value="Submit" />
                      <br />
                      <br />
                      To get a Registration Code SMS the word &quot;JOIN&quot; to 42655.<br />
                      Sms Cost R30.00 once off.</div></td>
                  </tr>
                </form>
              </table>
            </div></td>
          </tr>
        </table>
      </div>
    </div></td>
  </tr>
</table>
</body>
</html>
