<?php

/*
#######################################
#     e107 website system plguin      #
#     AACGC Friend System             #
#     by M@CH!N3                      #
#     http://www.aacgc.com            #
#######################################
*/

include_lan(e_PLUGIN."aacgc_friendsys/languages/".e_LANGUAGE.".php");

//-----------------------------------------------------------------------------------------------------------+
//-----------------------------------------------------------------------------------------------------------+	


$text1 .= "
<table class='fborder' style='width:100%;'>
	<tr>
        <td style='width:30%' class='button'>";
        if (e_PAGE == "admin_main.php") {
        $text1 .= "
		<b>
		<a style='cursor:hand; text-decoration:none' href='admin_main.php'>>> ".AFSYS_28." <<</a></b>";
        } else {
        $text1 .= "
        <a style='cursor:hand; text-decoration:none' href='admin_main.php'>".AFSYS_28."</a>";}



$text1 .= "
           </td>
           </tr><td style='width:30%' class='header'>-</b>";



$text1 .= "</td>
           </tr>
	<tr>
        <td style='width:30%' class='button'>";
        if (e_PAGE == "admin_config.php") {
        $text1 .= "
		<b>
		<a style='cursor:hand; text-decoration:none' href='admin_config.php'>>> ".AFSYS_29." <<</a></b>";
        } else {
        $text1 .= "
        <a style='cursor:hand; text-decoration:none' href='admin_config.php'>".AFSYS_29."</a>";}





$text1 .= "
           </td>
           </tr><td style='width:30%' class='header'>-</b>";

$text1 .= "
</td>
</tr>
<tr>
<td style='width:30%' class='button'>";
if (e_PAGE == "admin_vupdate.php") 
{$text1 .= "
<b>
<a style='cursor:hand; text-decoration:none' href='admin_vupdate.php'>>> ".AFSYS_30." <<</a>
</b>";}
else
{$text1 .= "
<a style='cursor:hand; text-decoration:none' href='admin_vupdate.php'>".AFSYS_30."</a>";}

$text1 .= "</td>
           </tr>";


//--------------------------------------------------------------------------------------------


$text1 .= "<tr><td><br><br><br><br><br><br>
<center>
Donate To AACGC.
<form action='https://www.paypal.com/cgi-bin/webscr' method='post'>
<input type='hidden' name='cmd' value='_s-xclick'>
<input type='hidden' name='hosted_button_id' value='6506985'>
<input type='image' src='https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif' border='0' name='submit' alt='PayPal - The safer, easier way to pay online!'>
<img alt='' border='0' src='https://www.paypal.com/en_US/i/scr/pixel.gif' width='1' height='1'>
</form>
<br><br>
</td></tr>";

$text1 .= "<tr>
           <td style='width:30%' class='button'>
           <b><a style='cursor:hand; text-decoration:none' href='http://www.aacgc.com/SSGC/e107_plugins/faq/faq.php' target='_blank'>AACGC FAQs</a></b>
           </td>
           </tr>";


$text1 .= "<tr><td style='width:30%' class='header'>-</b></td></tr>";


$text1 .= "<tr>
           <td style='width:30%' class='button'>
           <b><a style='cursor:hand; text-decoration:none' href='http://www.aacgc.com/SSGC/e107_plugins/bug_tracker/bugs.php' target='_blank'>AACGC BugTracker</a></b>
           </td>
           </tr>";

//-----------------------------------------------------------------------------------------------------






$ns -> tablerender($ttl1, $text1);

?>
