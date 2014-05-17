<!DOCTYPE html>
<html>
<head>


<link rel="icon" type="image/png" href="http://YOURSITE.COM/YOURicon/" />

    {asset name='Head'}
</head>

<body id="{$BodyID}" class="{$BodyClass}">

    <table style="font-size: 0.98em; font-family: 'Open Sans',sans-serif; width: 100%; height: 28px;" cellpadding=0 cellspacing=0>
    <td style="padding-top: 7px; background: #FAF3B8; width: 1%;" >	
    <a style="vertical-align: middle; padding: 5px; font-weight: bold; color: #000000; " href="http://YOURSITE.COM/YOURforum/">Forum</a>
    </td>	
    <td>
    <div id="TopMenu_gradient" style="
    padding-top: 7px;
    height: 28px;
    background: #6193cf; /* Old browsers */ ;
    background: -moz-linear-gradient(top, #6193cf 0%, #396ba7 100%); /* FF3.6+ */;
    background: -khtml-gradient(linear, left top, left bottom, from(#6193cf), to(#396ba7)); /* KHTML */;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#6193cf), color-stop(100%,#396ba7)); /* Chrome,Safari4+ */;
    background: -webkit-linear-gradient(top, #6193cf 0%,#396ba7 100%); /* Chrome10+,Safari5.1+ */;
    background: -o-linear-gradient(top, #6193cf 0%,#396ba7 100%); /* Opera11.10+ */;
    background: -ms-linear-gradient(top, #6193cf 0%,#396ba7 100%); /* IE10+ */;
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6193cf', endColorstr='#396ba7',GradientType=0 ); /* IE6-9 */;
    background: linear-gradient(top, #6193cf 0%,#396ba7 100%); /* W3C */;
    "/>
    <a style="margin-left: 20px; color: white;" href="https://github.com/YOURorganization">GitHub </a>
    <a style="margin-left: 20px; color: white;" href="http://YOURSITE.COM/YOURTBGfolder/thebuggenie/wiki/Overview">Overview </a>
    <a style="margin-left: 20px; color: white;" href="http://YOURSITE.COM/YOURTBGfolder/thebuggenie">Project Manager     </a>
    </div>
    </td>
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
      {profile_link}
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
    <tr>
    <td style="width: auto; font-size: 0.9em; color:#333333">
    <a style="color:#00A400;" href="http://YOURSITE.COM/YOURTBGfolder/thebuggenie/wiki/Privacy" target="_blank">Privacy </a>|
    <a style="color:#00A400;" href="http://YOURSITE.COM/YOURTBGfolder/thebuggenie/wiki/TermsOfUse" target="_blank">Terms of Use </a>|
    Project Manager <a style="color:#00A400;" href="http://YOURSITE.COM/YOURTBGfolder/thebuggenie/about" target="_blank">The Bug Genie </a>|
    Forum <a style="color:#00A400;" href="http://vanillaforums.org/" target="_blank" >Vanilla </a>| 
    Template <a style="color:#00A400;" href="http://helpgivethanks.org/apps/thebuggenie/wiki/WebsiteTemplate" target="_blank" >HGT </a>| 
    Content Copyright (except where noted) <a style="color:#00A400;" href="http://creativecommons.org/licenses/by/4.0/" target="_blank">CC BY 4.0</a>
    </td>
    </tr>
    </table>
      
    </div>
  </div>
</div>
{event name="AfterBody"}
</body>
</html>