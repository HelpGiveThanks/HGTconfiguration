<!DOCTYPE html>
<html>
<head>
<link 



/*  111111111111111111111111111111111	*/

/* Code in your favorite icon which shows up in browser tabs. */ 
/*NOTE: You can do a find/replace to deal with all 9 instances of "YOURSITE.COM/YOURTBGfolder".  This will leave just your Forum and GitHub urls to be added in below. */
rel="icon" type="image/png" 


	href="http://YOURSITE.COM/YOURTBGfolder/thebuggenie/favicon.png" />


    {asset name='Head'}</head>
<body id="{$BodyID}" class="{$BodyClass}">
    <table   cellpadding=0 cellspacing=0 >
        <tr id="TopMenu" cellpadding=0 cellspacing=0 >
            <td id="logo_container"><a  
	
	
/* Code in your website url and TBG folder name for your icon wiki page and image file location. */


	href="http://YOURSITE.COM/YOURTBGfolder/thebuggenie/wiki/AboutTheIcon"><img alt="Site Icon" 
	
	
	src="http://YOURSITE.COM/YOURTBGfolder/thebuggenie/header.png" 
	
	  
	  
	
/*  222222222222222222222222222222222  */
	
/* Experiment with icon size and padding (5px 5px 5px 5px = TOP RIGHT BOTTOM LEFT) to match the icon in TGB exactly.  If you increase the icons height, you will need to decrease the bottom padding = 5px 5px 0px 5px. */	
	style="width: 24px; height: 24px; padding: 5px 5px 5px 5px;"></img></a></td><td id="forum_cell"><a id="forum_button"
    
    
	
	
/*  333333333333333333333333333333333  */	
	
/* Type in your Forum url, replacing http://YOURSITE.COM/YOURforum. */
    href="http://YOURSITE.COM/YOURforum/">Forum</a></td><td><a style="margin-left: 20px; color: white;" 
    
    
	
	
/*  444444444444444444444444444444444  */

/* Type in your GitHub url, replacing http://github.com/YOURorganization */	
    href="https://github.com/YOURorganization">GitHub </a><a style="margin-left: 20px; color: white;" 
    
	
	
	
    
    href="http://YOURSITE.COM/YOURTBGfolder/thebuggenie/wiki/Overview">Overview </a><a style="margin-left: 20px; color: white;" 
    
    
    href="http://YOURSITE.COM/YOURTBGfolder/thebuggenie">Project Manager </a></td>
    
    
            <td>{module name="MeModule"}</td>
        </tr>
    </table>
<div id="Frame">
 <div id="Head">
   <div class="Row">
         <div class="SiteSearch">{searchbox}</div>
     <ul class="SiteMenu">
      {dashboard_link}
      {discussions_link}
      {activity_link}
      {inbox_link}
      {custom_menu}

      {signinout_link}
     </ul>
   </div>
  </div>
  <div id="Body">
    <div class="Row">
      <div class="Column PanelColumn" id="Panel">
         {asset name="Panel"}
      </div>
      <div class="Column ContentColumn" id="Content">{asset name="Content"}</div>
    </div>
  </div>
  <div id="Foot">
    <div class="Row">
      {asset name="Foot"}
        <table cellpadding=0 cellspacing=0 style="table-layout: auto; margin: 0 auto 0 auto;">
            <tr><td style="width: auto; font-size: 0.9em; color:#333333"><a style="color:#00A400;" 
    
    
  /* Code in your website url and TBG folder name for privacy, terms of use, and about TGB pages.*/

    
      href="http://YOURSITE.COM/YOURTBGfolder/thebuggenie/wiki/Privacy" target="_blank">
      Privacy </a>|<a style="color:#00A400;" 
    
    
      href="http://YOURSITE.COM/YOURTBGfolder/thebuggenie/wiki/TermsOfUse" target="_blank">
      Terms of Use </a>| Project Manager <a style="color:#00A400;" 
    
    
      href="http://YOURSITE.COM/YOURTBGfolder/thebuggenie/about" target="_blank">
      The Bug Genie</a>|
    
    
      Forum <a style="color:#00A400;"href="http://vanillaforums.org/" target="_blank" >Vanilla </a>| 
      Website Configuration <a style="color:#00A400;" href="http://helpgivethanks.org/apps/thebuggenie/wiki/CollaborativeWebsiteConfiguration" target="_blank" >HGT </a>| 
      Content Copyright (except where noted) <a style="color:#00A400;" href="http://creativecommons.org/licenses/by/4.0/" target="_blank">CC BY 4.0</a>
            </td></tr>
        </table>
    </div>
  </div>
</div>
{event name="AfterBody"}
</body>
</html>