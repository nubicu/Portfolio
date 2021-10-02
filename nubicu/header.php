<!-- FREE TEMPLATE BY WWW.ZYMIC.COM -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to nubicu's personal site</title>
<link href="code/css.css" rel="stylesheet" type="text/css" />


<script language="JavaScript">
//<!--
function getLongDateString()
{	//method defined on class Date.
	//Returns a date string of the form: Day DD Month,YYYY
	//(e.g. Duminica 27 Septembrie, 1998)
	monthNames = new Array("Ianuarie","Februarie","Martie","Aprilie","Mai","Junie","Julie","August","Septembrie","Octombrie","Noiembrie","Decembrie");
dayNames = new Array("Duminica","Luni","Marti","Miercuri","Joi","Vineri","Sambata");
	dayOfWeek = this.getDay();
	day = dayNames[dayOfWeek];
	dateOfMonth = this.getDate();
monthNo = this.getMonth();
	month = monthNames[monthNo];
year = this.getYear();
	if (year < 2000)
year = year + 1900;
dateStr = day+" "+dateOfMonth+" "+month+", "+year;
	return dateStr;
}
//register the  method in the class Date
Date.prototype.getLongDateString=getLongDateString;

function DocDate()
{ //return the document modification date (excl.time)
//as a string
	DateTimeStr = document.lastModified;
	secOffset = Date.parse(DateTimeStr);
	if (secOffset == 0 || secOffset == null) //Opera3.2
			 dateStr = "Unknown";
	else
	{
		aDate = new Date();
		aDate.setTime(secOffset);
		//use method defined above
		datestr = aDate.getLongDateString();
	}
	return dateStr;
}
// --></script>

</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" class="bgmain"><table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td valign="top"><table width="780" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="3" rowspan="2" class="loginbg"><img src="images/spacer.gif" alt="spacer" height="15"/><center>
              </center></td>
            <td colspan="4" style="font-size:9px; color:#afafaf; padding-top:3px;">Welcome to www.nubicu.ezyro.com</td>
            <td><img src="images/spacer.gif" width="1" height="25" alt="1" /></td>
          </tr>
          <tr>
            <td colspan="4" rowspan="2">&nbsp;</td>
            <td><img src="images/spacer.gif" width="1" height="15" alt="1" /></td>
          </tr>
          <tr>
            <td colspan="3"><img src="images/top_logo.gif" alt="logo" width="368" height="83" border="0" usemap="#Map" /></td>
            <td><img src="images/spacer.gif" width="1" height="83" alt="1" /></td>
          </tr>
          <tr>
            <td class="navt1"><a href="index.php"><span style="color:yellow">Acasa</span></a></td>
            <td class="navt2"><a href="poze1.php"><span style="color:yellow">Galerie Foto</span></a></td>
            <td colspan="2" class="navt3"><a href="despre.php"><span style="color:yellow">Informatii</span></a></td>
            <td class="navt4"><a href="blog.php"><span style="color:yellow">Blogurile mele</span></a></td>
            <td class="navt5"><a href="other.php"><span style="color:yellow">Diverse</span></a></td>
            <td class="navt6"><a href="links.php"><span style="color:yellow">Linkuri</span></a></td>
            <td><img src="images/spacer.gif" width="1" height="41" alt="1" /></td>
          </tr>
          	<tr>
		<td colspan="7" valign="top" class="mcbg">
			<img src="images/header_11.gif" width="779" height="24" alt="header" />
			<table width="100%" border="0" cellspacing="8" cellpadding="0">
              <tr>
                <td width="152" valign="top"><img src="images/navigation.gif" alt="navigation" width="152" height="26" />
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="navoff" onmouseover="this.className='navon'" onmouseout="this.className='navoff'"><a href="index.php">Acasa</a>
                      </td>                    </tr>
                    <tr>
                      <td class="navoff" onmouseover="this.className='navon'" onmouseout="this.className='navoff'"><a href="poze1.php">Galerie Foto</a>
                      </td>                    </tr>
                    <tr>
                      <td class="navoff" onmouseover="this.className='navon'" onmouseout="this.className='navoff'"><a href="despre.php">Informatii</a>
                      </td>                    </tr>
                    <tr>
                      <td class="navoff" onmouseover="this.className='navon'" onmouseout="this.className='navoff'"><a href="blog.php">Blogurile mele</a>
                      </td>                    </tr>
                    <tr>
                      <td class="navoff" onmouseover="this.className='navon'" onmouseout="this.className='navoff'"><a href="other.php">Diverse</a>
                      </td>                    </tr>
		    <tr>
                      <td class="navoff" onmouseover="this.className='navon'" onmouseout="this.className='navoff'"><a href="links.php">Linkuri</a>
                      </td>                    </tr>
                  </table>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="leftcolheader">Latest News</td>
                    </tr>
                    <tr>
                      <td class="lcolbg">
					  <!--START STATS BOX CONTENT --> 
					  <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr><td align="center" valign="middle"><b><span style="color:red">Sunt inginer</span></b></td></tr>
	<tr><td align="justify" valign="middle">Acum sunt programator la Visteon Electronics Sofia.</td></tr>
	<tr>
	<td align="right" valign="middle"><small><script language="JavaScript">
//<!--
document.write("<center> Ultimul Update: ");
document.writeln(DocDate(),"</center>");
// -->
</script><!-- --></small></td>
	</tr>

</table>
<!--END STATS BOX CONTENT --></td>
                    </tr>
                    <tr>
                      <td><img src="images/bottom_col_foot.gif" alt="footer" width="152" height="7" /></td>
                    </tr>
                  </table></td>
                <td width="368" valign="top"><div align="center">
                  <table border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>