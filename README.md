## Help Give Thanks Research Project Template

This template was created out of a need for an integrated website solution combining the powers of The Bug Genie (TBG) and Vanilla.   This template is aimed to be easy to install by relatively novice users to encourage wide spread use of these tools in everyday interactions with family and friends.  Read more about the Help Give Thanks Research Project here: http://HelpGiveThanks.org.

NOTE: The repository at https://github.com/HelpGiveThanks/HGTtemplate was created to make it easy to keep track of all files needed to accomplish this template in two different applications, but it is not a fork off of those applications, and so cannot be compared to them.  The actual fork off of TGB for the TGB template can found here https://github.com/virtualdavid/thebuggenie/tree/template.  The Vanilla theme files consists of a modified copy of its default theme version 2.1.  


Q&A and LastEdited https://github.com/HelpGiveThanks/addons/compare/vanilla:2.1...2.1

TGB https://github.com/HelpGiveThanks/thebuggenie/compare/thebuggenie:branch-32...nitrogen?expand=1

FirstLastNames https://github.com/HelpGiveThanks/HGTtemplate/commit/2c29e05638a8f23cfb253e546866562d52e2f38f

Vanilla https://github.com/HelpGiveThanks/vanilla/compare/2.1?expand=1
## Installation

This template is built to make installation easy.

#####A. Create a new project manager and forum for your family, roomates, friends, organization, business, etc.
1. Purchase a website hosting accounting that comes with a cPanel Version	11.42.+, PHP version	5.3.2+, MySQL version	5.1.7+.  I got mine here and am very happy with their service: http://www.umbrahosting.com/linux/shared-hosting $24/year + $10/year domain-name plan.  (Perfect for a small website.)
1. Log into your cPanel: http://YOURWEBSITE.ORG/cpanel.
1. Scroll down to Software/Services sections and click on Softaculous icon.
1. Enter 'The Bug' in the top right search box, and click on The Bug Genie.
1. Click install.
1. Leave most everything as is, but change
     1. In Directory 'buggenie' to 'pm' for project manager.
     1. Leave the password as 'pass' and change it when you're finished setting up (it's just a lot easier).  
     1. Change the email address to an email address associated with a Gravatar icon.
1. Click install.  
1. Next type 'vanilla' in the top right search box, and click on Vanilla.
1. Click install.
1. Leave most everything as is, but change
     1. In Directory 'vanilla' to 'forum' for forum.
     1. Leave the password as 'pass' and change it when you're finished setting up (it's just a lot easier).  
     1. Change the email address to the same one used to install The Bug Genie (TGB).  
1. Click install.
1. Return to the cPanel by clicking  the 'go to control panel' icon on the top menu bar.  It's the blue-postage-stamp- with-a-gear-over-it icon (the first icon reading left-to-right).
1. In the Files section click the 'File Manager' icon, and then click the popup window's 'Go' button.

#####A. Template drop-in replacement preparation
1. Download the HGTtemplate.zip template.
1. Upload the template to your web server and extract it.
1. Zip your TGB folder.  
2. Download it to a safe place on your computer as a backup.  

#####B. TGB Drop-in replacement and icon upload

1. Click into the .../HGTtemplate/TBGTemplateNitrogen/ folder.
1. Click 'Select all' from the cPanel file menubar.
1. Click 'Copy' (not move) from the cPanel top menubar.
1. Replace the two folder names /HGTtemplate/TBGTemplateNitrogen/ in the popup window with your Bug Genie's one folder name, which, if you followed my recommendation, you named /pm/ for project manager.
1. Click into your TGB folder.
1. Upload image files to replace header.png (site icon) and favicon.png to help identify your website.
1. Open a new tab in your browser.  
1. Type in your website's buggenie url: http://YOURSITE.COM/YOURTGBfolder/.
1. Click the 'Overview' button.

#####C. Configure overview page icon and titles in file _header.inc.php located in folder .../modules/publish/templates/

1. Customize your site's icon size. Keep width and height equal and upload a new icon if you need to change it's proportions. The icon shows up on other pages that you are not going to customize with equal proportions.
1. Rewrite your site's guest overview page title and welcome message on line 68.
2. Rewrite your site's logged in overview title on line 76.

#####D. Configure top, menu-bar icon and links in file headertop.inc.php located in folder .../core/templates/  

1. Experiment with icon size and padding to get best look.  Keep the height amount at or below 30px, as anything greater will shift the breadcrumb text under it over the right.
2. Change http://YOURSITE.COM/YOURforum/ to your sites forum folder location
3. Change https://github.com/YOURorganization/ to your external GitHub  OR  Google Drive  OR other collaborative document creating, editing, etc. web tool

#####D. Configure TGB name, theme, and icons

1. Click on 'You are not logged in' (upper right corner).
1. Login.
1. Click on 'System Administrator' (upper right corner).
1. Select 'Configure The Bug Genie' option.

     NOTE: If you get a magic quotes error message
     1. Click on the tab for your cPanel file manager and go to  YOURTGBfolder/thebuggenie.
     1. Click once on the php.ini.zip to select it.
     1. Click on the 'Extract' button in the cPanel's top menu bar.
     1. Click on the tab for your Bug Genie, and refresh the page.

     This may solve the problem. If not contact your hosting company's tech support people.
1. Select the 'Settings' tile (top row, middle tile on the 'Configure The Bug Genie' page).
1. Type in your Bug Genie's custom name (the name of your website, family, organizaiton, etc.).
1. Click the 'save' button (bottom right).
1. Select 'Uploads & attachments' (6th option from the left menu column).  
1. Enable file uploads.
1. Click the 'save' button (bottom right).  
1. Select 'Settings' (2nd option from the left menu column).
1. Select the 'Appearance' tab.  
1. Click on the selected theme 'oxygen' and change it to 'nitrogen' (keep oxygen as the iconset).
1. Click the blue 'Configure icons' button.  
1. Click Favicon's upload new icon radio button, and then click the 'Choose File' button.
1. Select a custom favicon.png file, and click 'Choose'.
1. Click Header icon's upload new icon radio button, and then click the 'Choose File' button.
1. Select a custom-header.png file, and click 'Choose'.
1. Click 'Close popup' button.
1. Click the 'save' button (bottom right).
1. Select the 'Users & security' tab.  
1. Scroll down to 'Gravatar user icons' and select gravatar.com service option.  
1. Scroll down to 'Gravatar user icons' and select gravatar.com service option.
1. If you are taking your time setting things up change the 'New user accounts' default to "... created by admin" until you are ready.
1. Click the 'save' button (bottom right).
1. Click on 'System Administrator' (upper right corner).
1. Select 'My account' option.
1. Change the Full Name to your full name.
1. Make sure the Gravatar email address you want is in the 'your email' address field.
1. Click the 'save' button (bottom right).
1. Click the 'General settings' tab.
1. Select 'Yes' for 'Use Gravatar avatar' option.
1. Click the 'save' button (bottom right).

     I will cover the other important TBG configuration options and setting up projects in another video.  This video is focused just on intial look-and-feel configurations.

#####E. Fix a system email issue in the file _issueupdate.html.inc.php located in folder .../modules/mailing/templates/

1 Replace YOURSITE.COM with your site's name and .com, .org, etc. and correct links to will be sent by the system informing users of activity on your bug genie.

Congratulations!  TGB's look and feel configuration is now done. You still need to set up security, permissions, etc., but let's move on for now to add the nitrogen template to your Vanilla forum.

#####F. Vanilla template drop-in replacement preparation

1. Zip your Vanilla folder.  
2. Download it to a safe place on your computer as a backup.

#####G. Vanilla Drop-in replacement

1. Click into the .../HGTtemplate/VanillaThemeNitrogen/ folder.
1. Click 'Select all' from the cPanel file menubar.
1. Click 'Copy' (not move file) from the cPanel top menubar.
1. Replace the two folder names /HGTtemplate/VanillaThemeNitrogen/ in the popup window with your Vanilla forum's folder one name, which, if you followed my recommendation, you named /forum/.
1. Click into your Vanilla /forum/ folder.
1. Open a new tab in your browser.
1. Type in your website's forum url: http://YOURSITE.COM/FORUMfolder/.

#####H. Enable Nitogen theme and selected plugins

1. Sign in.
1. Click the gear icon (right above the 'New Discussion' button) and select the 'dashboard' option from the popup menu that opens.
1. From the right Appearance menu click on Themes.
1. Scroll down the Nitrogen theme and click its 'Apply' button.
1. Scroll down looking for the Addons left menu options, and click its Plugins option.
1. Enable the following plugins:
     1. Emotify :) – There fun and can inject levity into serious discussions.
     1. EpicEditor
     1. Flagging
     1. Gravatar
     1. In This Discussion
     1. Last Edited
     1. Q&A Big Button Remix
     1. Split / Merge
     1. Tagging
     1. Vanilla Statistics
     1. WYSIWYG (CLEditor)

#####I. Copy and paste text below (required to make the Q&A Big Button appear) into file config.php located in folder .../conf/

1. Paste text below under config.php's line 1 ```<?php if (!defined('APPLICATION')) exit();```  
(do make a space or two before and after (less crowded)).

```
//Make big question button appear
$Configuration['Plugins']['QnA']['UseBigButtons'] = TRUE;

$Configuration['Modules']['Vanilla']['Panel'] = array('MeModule', 'UserBoxModule', 'GuestModule', 'NewDiscussionModule', 'NewQuestionModule','DiscussionFilterModule', 'SignedInModule', 'Ads');
```
#####J. CAUTION: Enable FirstLastName plugin if your forum is for only people you know and trust.

1. Open into your Vanilla's .../plugins/CAUTION/ folder.
1. Click 'Select all' from the cPanel file menubar.
1. Click 'Copy' (not move file) from the cPanel top menubar.
1. Delete /CAUTION/ in the popup window.  It should read: .../plugins/.
1. Click the 'Copy File(s)' button to copy FirstLastName folder to the Plugins folder.
1. Click the plugins browser tab, and then refresh it.
1. Scroll down to the FirstLastName plugin, and read the reason for keeping this plugin disabled if your forum is open to strangers.
1. Enable it if there is no security risk, and allow users to  sign posts using their full names versus a user nickname.

     If after reading the Warning, you decide it is unsafe to enable, then don't.  You do not need to put it back into the CAUTION folder.
1. Scroll to the Forum section of the left hand menu, and click on the 'FirstLastNames' option.
1. Click 'Use Display Names' to show users full names.  

#####K. Customize link to your Terms of Use wiki page.

Lawyers need our heartfelt gratitude for creating documents like Terms of Use.  This is an essential, serious document for regulating emotions and keeping everyone on your forum respectful of the feelings and thoughts of others.  Everyone who uses your forum must agree to abide by your Terms of Use.

The custom link will point people to one Terms of Use document for both your Forum and Bug Genie, located where it is easiest to modify, in your Bug Genie's wiki.  

1. Click on your File Manager tab.
1. Go to the Vanilla folder .../plugins/FirstLastNames/views/
1. Open the registerapproval.php file.
1. Replace /YOURSITE.COM/YOURTBGfolder/ with requested information (your site's name and .com, .org, etc. and your Vanilla folder's name: example – /forum/).
1. Save and close file.
1. Repeat the above three steps for the rest of these files:
     1. registerbasic.php
     1. registercaptcha.php
     1. registerinvitation.php
1. Go to the Vanilla folder .../themes/nitrogen/views/entry/ and repeat the above three step process on these files:
     1. registerapproval.php
     1. registerbasic.php
     1. registercaptcha.php
     1. registerinvitation.php



#####L. Configure top, menu-bar icon and links in file default.master.tpl located in folder .../themes/nitrogen/views

1. Do a find/replace of "YOURSITE.COM/YOURTBGfolder" to  customize all 8 instances of it.
     1. Click the binocluar icon to open the find/replace window.
     1. If you don't see this icon, then click the 'Use code editor' button.
2. Experiment with icon size and padding to get best look, while making sure whatever you do matches the look in TGB exactly.
3. Type in your Forum url, replacing http://YOURSITE.COM/YOURforum.
4. Type in your GitHub url, replacing http://github.com/YOURorganization

     You can also change the GitHub link name to Docs or something else, if you decided to use Google Docs instead of GitHub to colaborate with others on file creation, improvements, etc.

#####M. Restrict access to just people you want on the forum while you build up a trusted user base.

1. Click on your browser's Vanilla dashboard plugin tab.
1. Scroll to the top and click on the 'Registration' option under the left hand menu's Users section.
1. Select the 'invitation' option.
1. Scroll down and under 'Role	Invitations per month'
     1. Select 'Unlimited' for Administrator = you.
     1. Select 'None' for all other roles.
1. Click the 'save' button.

     This insures that no one can create an account without your consent while you setup the forum.

#####N. Final Step

1. If you want the 'Register Invitation' button to say something different
     1. Go to Vanilla folder /conf/ and open file local.php.
     1. Change the text in single quotes on line 15 after the equal sign.


## Open Source

This template is free, open source software.  The Bug Genie Nitrogen Template files are distributed under a Mozilla Public License Version 1.1, and the Vanilla Nitrogen Theme files are distributed under a GNU General Public License version 2 (GPLv2), which are the respective licenses of each of these amazing open source projects.  

To compare CURRENT differences between the nitrogen template remix of TBG files and the original TBG v3.2.7.1 files, please visit https://github.com/virtualdavid/thebuggenie/compare/thebuggenie:branch-32...nitrogen?expand=1 (GitHub will say 35 files have been changed as it combines both changed and added files in this count of changed files).  The Description of Nitrogen Template v1 Modifications.html that comes with each download of this template documents the EXACT CHANGES made to the files contained in this download.

To see screenshots and read a detailed explanation about the HGT Template go here http://forum.thebuggenie.com/viewtopic.php?f=9&t=1691&sid=628e6e5f3027e56f07651c066c001557.

To download a copy of this template go here https://sourceforge.net/projects/helpgivethanks/.

## Legal Stuff
Copyright &copy; 2009-2014 Vanilla Forums Inc.

Vanilla Forums is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License
as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
Vanilla Forums is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU General Public License for more details. You should have received a copy of the GNU General Public License
along with Vanilla Forums.  If not, see <http://www.gnu.org/licenses/>.
Contact Vanilla Forums Inc. at support [at] vanillaforums [dot] com
