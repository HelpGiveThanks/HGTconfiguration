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
1. Click the blue 'install' button.
1. Leave most everything as is, but change
     1. In Directory 'buggenie' to 'pm' for project manager.
     1. Leave the password as 'pass' and change it when you're finished setting up (it's just a lot easier).  
     1. Change the email address to an email address associated with a Gravatar icon.
1. Click the grey 'install' button.
1. Next type 'vanilla' in the top right search box, and click on Vanilla.
1. Click the blue 'install' button.
1. Leave most everything as is, but change
     1. In Directory 'vanilla' to 'forum' for forum.
     1. Leave the password as 'pass' and change it when you're finished setting up (it's just a lot easier).  
     1. Change the email address to the same one used to install The Bug Genie (TGB).  
1. Click the grey 'install' button.
1. Return to the cPanel by clicking  the 'go to control panel' icon on the top menu bar.  It's the blue-postage-stamp- with-a-gear-over-it icon (the first icon reading left-to-right).
1. In the Files section click the 'File Manager' icon, and then click the popup window's 'Go' button.

#####B. Template drop-in replacement preparation
1. Download the HGTtemplate.zip template.
1. Click the 'Upload' icon (File Manager's top menu bar).
1. Click the 'Choose File' button in the window that opens and choose the HGTtemplate.zip to upload it.
1. Close the upload window.
1. Click the 'Reload' button (second menu bar) if you do not see the HGTtemplate.zip.
1. Click on HGTtemplate.zip to select it.
1. Click the 'Extract' button to unzip it.
1. You can now delete the zip file to reduce clutter in your File Manager.
1. Select your pm folder and compress it (click the 'Compress' button and then the 'Compress File(s)' button).  
2. Download the resulting zip file to a safe place on your computer as a backup (select the file and click the 'Download' button).  

#####C. TGB Drop-in replacement and icon upload

1. Click into the .../HGTtemplate/TBGTemplateNitrogen/ folder (by first double clicking on the HGTtemplate folder, which reveals the TBGTemplateNitrogen folder, which you then double-click on to click into it).
1. Click 'Select all' from the cPanel file menubar.
1. Click 'Copy' (not move) from the cPanel top menubar.
1. In the popup window that opens, replace the two folder names /HGTtemplate/TBGTemplateNitrogen/ with your Bug Genie's one folder name, which, if you followed my recommendation, you named /pm/ for project manager.
1. Click into your /TGB folder/ folder (by clicking the 'Up One Level' button twice, and then double clicking on your TGB folder).

     I'll refer this folder from now on with three dots '...'
1. Click into your .../thebuggenie/ folder.
1. Upload image files with the same names to replace header.png (this is the white or very light version of your icon) and favicon.png (a dark, tiny version of your icon) to help distinguish your TGB from other TGBs (see instructions above for how to upload files).
1. Open a new tab in your browser.
1. Type in your website's buggenie url: http://YOURSITE.COM/YOURTGBfolder/.

#####D. Configure TGB name, theme, and icons

1. Click on 'You are not logged in' (upper right corner).
1. Login.
1. Click on 'System Administrator' (upper right corner).
1. Select 'Configure The Bug Genie' option.

     NOTE: If you get a magic quotes error message
     1. Click on the tab for your cPanel file manager and go to  .../thebuggenie.
     1. Click once on the php.ini.zip to select it.
     1. Click on the 'Extract' button in the cPanel's top menu bar.
     1. Click on the tab for your Bug Genie, and refresh the page.

     This may solve the problem. If does not, contact your hosting company's tech support people.
1. Select the 'Settings' tile (top row, middle tile on the 'Configure The Bug Genie' page).
1. Type in your Bug Genie's custom name (the name of your website, family, organizaiton, etc.).
1. Click the 'save' button (bottom right).
1. Select 'Uploads & attachments' (6th option from the left menu column).  
1. Enable file uploads.
1. Click the 'save' button (bottom right).  
1. Select 'Settings' (2nd option from the left menu column).
1. Select the 'Appearance' tab.  
1. Click on the selected theme 'oxygen' and change it to 'nitrogen' (keep oxygen as the iconset).
1. Click the 'save' button (bottom right).
1. Click the blue 'Configure icons' button.  
1. Click Favicon's upload new icon radio button, and then click the 'Choose File' button.
1. Select favicon.png file (this is the tiny high-contrast version of your icon), and click 'Choose'.
1. Click Header icon's upload new icon radio button, and then click the 'Choose File' button.
1. Select Header icon.png file (This is the 75+px dark version of your icon), and click 'Choose File'.
1. Click the green 'Update icons' button.
1. Select the 'Users & security' tab.  
1. Scroll down to 'Gravatar user icons' and select gravatar.com service option.  
1. Scroll down to 'New user accounts' and select 'All new user accounts will be created by an admin' option, until you are ready, if ever, to allow strangers to create accounts.
1. Click the 'save' button (bottom right).
1. Scroll up, and click on 'System Administrator' (upper right corner).
1. Select 'My account' option.
1. Change the Full Name to your full name.
1. Make sure the Gravatar email address you want is in the 'your email' address field.
1. Click the 'save' button (bottom right).
1. If your Gravatar icon is not showing, click the 'General settings' tab.
1. Select 'Yes' for 'Use Gravatar avatar' option.
1. Click the 'save' button (bottom right).

     I will cover the other important TBG configuration options and setting up projects in another video.  This video is focused just on intial look-and-feel configurations.

#####E. Configure top, menu-bar icon and links in file headertop.inc.php located in folder .../core/templates/

To open cPanel files like headertop.inc.php, click on the file to select it, then click the'Code Editor' button in the top menu bar,  and finally click the 'Edit' button in the popup window that opens, and your file will then open.  

If the text in the edit window does not display properly, then click the 'Use text editor' button, which is a more boring, but more stable cPanel file editor.

1. Experiment with icon size and padding to get best look.  Keep the height amount at or below 30px, as anything greater will shift the breadcrumb text under it over the right.

      Click the 'Save Changes' button to try each new size change, and don't forget to refresh the view in your TGB window to see it.
2. Change http://YOURSITE.COM/YOURforum/ to your sites forum folder location
3. Change https://github.com/YOURorganization/ to your external GitHub  OR  Google Drive  OR other collaborative document creating, editing, etc. web tool.
1. Click the 'Save Changes' button and then the 'Close' button.
1. Click your name, and then select the 'Logout' option.
1. Click your TGB's  'Overview' button  to see your website guests' view.

#####F. Configure overview page icon and titles in file _header.inc.php located in folder .../modules/publish/templates/

1. Customize your the icon size above the Overview page's title. Keep width and height equal and upload a new icon if you need to change it's proportions.

     This icon shows up on other pages that you are not customizing, and it is important that its proportions be consistent on all website pages.
1. Rewrite your site's guest overview page title and welcome message on line 68.
2. Rewrite your site's logged in overview title on line 76.

#####G. Fix a system email issue in the file _issueupdate.html.inc.php located in folder .../modules/mailing/templates/

1. Replace YOURSITE.COM on line 16 and line 24 with your site's name and .com, .org, etc. and correct links to will be sent by the system informing users of activity on your bug genie.

Congratulations!  TGB's look and feel configuration is now done. You still need to set up security, permissions, etc.  

Now you can apply the nitrogen theme to your Vanilla forum so that its look-and-feel matches your TBG.

#####H. Vanilla template drop-in replacement preparation

1. Zip your Vanilla folder.  
2. Download it to a safe place on your computer as a backup.

#####I. Vanilla Drop-in replacement

1. Click into the .../HGTtemplate/VanillaThemeNitrogen/ folder.
1. Click the 'Select all' button from the cPanel file menubar.
1. Click 'Copy' (not move file) from the cPanel top menubar.
1. Replace the two folder names /HGTtemplate/VanillaThemeNitrogen/ in the popup window that opens with your Vanilla forum's folder name, which, if you followed my recommendation, you named /forum/.
1. Click into your Vanilla /forum/ folder.
1. Click on the browser tab for your TBG and click the "Forum" button (left-most top-menu-bar button).  If you don't have a tab open for your TGB then
   1. Open a new tab in your browser.
   1. Type in your website's forum url: http://YOURSITE.COM/FORUMfolder/.

#####J. Enable Nitogen theme and selected plugins

1. Click the grey 'Sign In' button and sign in.
1. Click the gear icon (right above the 'New Discussion' button) and select the 'dashboard' option from the popup menu that opens.
1. From the left menue column in the  Appearance section, click the 'Themes' button.
1. Scroll down to the Nitrogen theme and click its light blue 'Apply' button.
1. Scroll down again looking for the Addons left menu section, and click its 'Plugins' option.
1. Enable the following plugins:
     1. Emotify :)
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

#####K. Finish enabling the Q&A Big Button Remix plugin

1. Open the config.php file located in folder .../conf/ (Now these three dots '...' refer to your Vanilla forum's cPanel File Manager folder).
1. Copy the text below (required to make a big 'Ask a Question' button appear below the 'New Discussion' button):

 ```
 //Make big question button appear
$Configuration['Plugins']['QnA']['UseBigButtons'] = TRUE;

  $Configuration['Modules']['Vanilla']['Panel'] = array('MeModule', 'UserBoxModule', 'GuestModule', 'NewDiscussionModule', 'NewQuestionModule','DiscussionFilterModule', 'SignedInModule', 'Ads');
 ```
1. Paste the copied code into the config.php right below line 1 = ```<?php if (!defined('APPLICATION')) exit();```  
(do make a space or two before and after the pasted code (less crowded)).
1. Click the 'Save Changes' button and then the 'Close' button.

#####L. CAUTION: Enable FirstLastName plugin if your forum is for only people you know and trust.

1. In your cPanel File Manager, open your your Vanilla's .../plugins/CAUTION/ folder.
1. Click 'Select all' from the cPanel file menubar.
1. Click 'Copy' (not move file) from the cPanel top menubar.
1. Delete /CAUTION/ from the folder list in the popup window (not the File Manager) so that reads .../plugins/.
1. Click the 'Copy File(s)' button to copy FirstLastName folder to the Plugins folder.
1. Click on the browser tab for your forum.
1. Click the plugins browser tab, and then refresh it to show the FirstLastName plugin.
1. Scroll down to the FirstLastName plugin, and read the WARNING for keeping this plugin disabled if your forum is open to strangers.
1. Enable it if there is no security risk (no strangers allowed), and allow users (family, friends, co-workers, etc.) to  sign posts using their real names versus a user nickname.  

     If after reading the warning, you decide it is unsafe to enable, then don't enable it.  You do not need to also put it back into the CAUTION folder.
1. Scroll to the left hand menu's Forum section, and click on the 'FirstLastNames' option.
1. Click 'Use Display Names' to show users' full names.  

#####M. Customize link to your Terms of Use wiki page.

Lawyers need our heartfelt gratitude for creating documents like Terms of Use (no kidding).  This is an essential, serious document for regulating TBG and Vanilla Forum participants' emotions.  It lays out the requirements for respecting the feelings and thoughts of others, and the consequences for failing to do.  Everyone who uses your forum must agree to abide by the Terms of Use agreement.  If your forum is for family, friend, etc., spend some time, especially with kids, editing this document so that it make sense to everyone.  

You are welcome to copy the Help Give Thanks Terms of Use document at https://github.com/HelpGiveThanks/Drafts/blob/master/Website/English/TermsOfUseAgreement.md and modify it to your needs as long as you don't delete the required copyright references, and seek out professional legal help to determine if it is right for you, or even legally valid (I cut and pasted it together from a number of T.O.U. documents (all referenced), and am in no way qualified to counsel anyone about their legal needs).

The custom link in your Vanilla Forum will point people to a single Terms of Use document for both your Forum and Bug Genie, located where it is easiest to modify, in your Bug Genie's wiki. To create this custom link in your Vanilla Forum registration windows (the popup window users see when they click to join your forum)

1. Click on your cPanel File Manager tab.
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

#####N. Configure top menu-bar icon and links, and footer links (T.O.S and Privacy policy) in the file default.master.tpl located in folder .../themes/nitrogen/views

1. Do a find/replace of "YOURSITE.COM/YOURTBGfolder" to  customize all 8 instances of this link.
     1. Click the binocluar icon to open the find/replace window.
     1. If you don't see this icon, then click the 'Use code editor' button.
2. Next, experiment with icon size and padding to get best look, while making sure whatever you do matches the look in TGB exactly.

     Click the 'Save Changes' button to try each new size change, and don't forget to refresh the view in your Vanilla Forum window to see it.
3. Type in your Forum url, replacing http://YOURSITE.COM/YOURforum.
4. Type in your GitHub url, replacing http://github.com/YOURorganization

     You can also change the GitHub link name to Docs or something else, if you decided to use Google Docs instead of GitHub to colaborate with others on file creation, improvements, etc.

#####O. Restrict access to just people you want on the forum while you build up a trusted user base.

1. Click on your browser's Vanilla dashboard plugin tab.
1. Scroll to the top and click on the left hand menu's Users section 'Registration' option.
1. Select the 'invitation' option.
1. Scroll down and under the column 'Role' (to the left of the column 'Invitations per month')
     1. Select 'Unlimited' for Administrator = You.
     1. Select 'None' (which is the default) for all other roles.
1. Click the 'save' button.

     This insures that no one can create an account without your consent while you setup the forum.

#####P. Final Step

1. If you want the 'Register Invitation' button (seen when you are logged out) to say something different
     1. Go to the cPanel File Manager folder .../conf/ and open the file local.php.
     1. Change the text on line 15 in single quotes after the equal sign = 'Register Invitation'.

Congratualtions!  Your forum's look-and-feel is now identical to your project manager TGB and navigation between the two should be seamless.  

Your next step is to create some categories for the forum and projects for the project manager, and setup user permissions for both.

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
