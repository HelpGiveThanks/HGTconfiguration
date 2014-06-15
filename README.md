## Help Give Thanks Research Project Template

This template was created out of a need for an integrated website solution combining the powers of The Bug Genie (TBG) and Vanilla.   This template is aimed to be easy to install by relatively novice users to encourage wide spread use of these tools in everyday interactions with family and friends.  Read more about the Help Give Thanks Research Project here: http://HelpGiveThanks.org.

NOTE: The repository at https://github.com/HelpGiveThanks/HGTtemplate was created to make it easy to keep track of all files needed to accomplish this template in two different applications, but it is not a fork off of those applications, and so cannot be compared to them.  The actual fork off of TGB for the TGB template can found here https://github.com/virtualdavid/thebuggenie/tree/template.  The Vanilla theme files consists of a modified copy of its default theme version 2.1.  


Q&A and LastEdited https://github.com/HelpGiveThanks/addons/compare/vanilla:2.1...2.1

TGB https://github.com/HelpGiveThanks/thebuggenie/compare/thebuggenie:branch-32...nitrogen?expand=1

FirstLastNames https://github.com/HelpGiveThanks/HGTtemplate/commit/2c29e05638a8f23cfb253e546866562d52e2f38f

Vanilla https://github.com/HelpGiveThanks/vanilla/compare/2.1?expand=1
## HGT Template Setup

This is part 1 of a 2 part tutorial on one way to set up a collaboration website using The Bug Genie progect manager coupled with a Vanilla forum.

#####A. Create a new project manager and forum for your family, roomates, friends, organization, business, etc.
1. Purchase a website hosting account that comes with a cPanel Version	11.42.+, PHP version	5.3.2+, MySQL version	5.1.7+.  I got mine here and am very satified with their service and tech support: http://www.umbrahosting.com/linux/shared-hosting $24/year + $10/year domain-name plan.  (Perfect for a small website.)

     NOTE: If you want all user interactions with your website encyrpted (not necessary in my opinion) for $40/year you can purchase an SSL certificate:
http://www.umbrahosting.com/ssl-certificates.

     Learn more about SSL Certificates here http://en.wikipedia.org/wiki/SSL_certificate
1. Log into your cPanel: http://YOURWEBSITE.ORG/cpanel.
1. Scroll down to Software/Services sections and click on Softaculous icon.
1. Enter 'The Bug' in the top right search box, and click on The Bug Genie.
1. Click the blue 'install' button.
1. Leave most everything as is, but change
     1. In Directory 'buggenie' to 'pm' for project manager.
     1. Leave the password as 'pass' and change it when you're finished setting up (it's just a lot easier).  
     1. Change the email address to an email address associated with a Gravatar icon: https://en.gravatar.com
1. Click the grey 'install' button.
1. Next, scroll up and type 'vanilla' in the top right search box.
1. Click on Vanilla.
1. Click the blue 'install' button.
1. Leave most everything as is, but change
     1. In Directory 'vanilla' to 'forum' for forum.
     1. Leave the password as 'pass' and change it when you're finished setting up (it's just a lot easier).  
     1. Change the email address to the same one used to install The Bug Genie (TGB).  
1. Click the grey 'install' button.
1. If you would like visitors to see a false front while you set up your website
     1. Scroll up and type 'Word Search' in the top right search box.
     1. Click on Word Search Puzzle.

        This game does not require a database and just works right away.
     1. Click the blue 'install' button.
1. Scroll up and return to the cPanel by clicking  the 'go to control panel' icon on the top menu bar.  It's the blue-postage-stamp- with-a-gear-over-it icon (the first icon reading left-to-right).
1. In the cPanel Files section click the 'File Manager' icon.
1. !IMPORTANT! In the popup window that opens click the option to 'Show Hidden Files (dotfiles).'
1. Click the popup window's 'Go' button.
1. If you added the word search puzzle game for your website's false front
     1. Click on the 'New File' button in the top menu bar.
     1. In the popup window that opens, type in 'index.html' in the 'New File Name' text box.
     1. Click the 'Create New File' button.
     1. Click on your new index.html file to select it.
     1. Click the 'Edit' button in the top menu bar to open it.
     1. In the popup window that opens, click the 'Edit' button.
     1. Copy the text below and paste it into the file: ```<meta http-equiv="refresh" content="0; url=http://YOURWEBSITE.COM/wsp/" />```
     1. Replace 'YOURWEBSITE.COM' with your website's name and .com, .org, etc.
     1. Click the 'Save' button, and the 'Close' button.
     1. Check out your website's new false front by opening a new tab and typing in your website's url: YOURWEBSITE.COM.

#####B. Template drop-in replacement preparation

1. Download the HGTtemplate.zip from http://sourceforge.net/projects/helpgivethanks/files/HGTtemplate/.

     NOTE: If you are  using Apple's Safari browser, it will unzip this zip file and trash the zip if you have the 'Open "save" files after downloading' preference checked in Safari's General Preferences. If this happens
     1. Retrive the zip from the trash.

     DO NOT re-compress/zip the HGTtemplate folder,  as the Mac will have added a bunch of files to help it find stuff in this folder, and you do not want these added files cluttering your cPanel File Manager folders.
1. Click your browser's cPanel File Manager tab.
1. Click the 'Upload' button in the File Manager's top menu bar.
1. Click the 'Choose File' button in the window that opens.
1. Find and click on  the HGTtemplate.zip.
1. Click the 'Choose' button.
1. When the bottom right grey progress bar says the upload is complete, close the upload window.
1. Click the 'Reload' button (second menu bar) if you do not see the HGTtemplate.zip.
1. Click on HGTtemplate.zip to select it.
1. Click the 'Extract' button from the top menu bar to unzip it.
1. Click the grey 'Extract File(s)' button in the popup window that opens, and then 'close' button.
1. You can now delete the zip file to reduce clutter in your File Manager.
1. Now backup The Bug Genie (TGB) you just installed before applying this uploaded template.
1. Select your /pm/ (buggenie) folder by clicking on it.
1. Create a compressed copy of it by clicking the 'Compress' button and then the 'Compress File(s)' button in the popup window that opens, and then the 'close' button.  
2. Click on the resulting pm.zip file to select it, and then download it to a safe place on your computer as a backup by clicking the 'Download' button in the top menu bar.  

#####C. TGB Drop-in replacement

1. Click into the .../HGTtemplate/TBGTemplateNitrogen/ folder by first double clicking on the HGTtemplate folder, which reveals the TBGTemplateNitrogen folder, which you then double-click on to open it.
1. Click the 'Select all' button from the  menubar right above the file window and right below the top menu bar.
1. Click the 'Copy' (not move) button from the top menubar.
1. In the popup window that opens, replace the two folder names /HGTtemplate/TBGTemplateNitrogen/ with your Bug Genie's one folder name, which, if you followed my recommendation = pm for project manager.

     It should now read something like /public_html/pm.
1. Click the grey 'Copy File(s)' button.

#####D. Custom website ID icon upload

These next steps depend up on your selection of a custom icon to help distinguish your website from other identical looking Bug Genie websites.  You can find lots of free images to use and modify for this purpose at wikipedia.org (provided you reference their creators and provide a link to the original wikipedia image page).  I would recomend something very simple, and all one color, as these icons need to be identifiable when very, very small.  You can also use an image of a capital letter or two or three (your sites initials, for example).  

Think of these images as icons, not logos.  They do not have to be unique, just distinctive from the icons of other websites that your users could confuse with your website.

1. After you have created three version of your website's icon
     1. 24px x 24px dark or solid black icon named favicon.png
     1. 50px x 50px light or solid white icon named header.png
     1. 100px x 100px light or grey (hex #666666 or RGB	102	102	102) icon named Header icon.png
     and saved them ...
1. Click into your /pm/ folder by clicking the 'Up One Level' button twice, and then double clicking on your buggenie folder = pm.

     I'll refer this main Bug Genie folder from now on with three dots '...' in case you named it something different.
1. Next, click into your .../thebuggenie/ folder.
1. Click the 'Upload' button in the File Manager's top menu bar.
1. Click the 'Choose File' button in the window that opens.
1. Find and click on the favicon.png image file.
1. Click the 'Choose' button.
1. Click the 'Yes' button the next popup window to replace the current favicon.png file.
1. Click the 'Choose File' button again.
1. Find and click on the header.png image file.
1. Click the 'Choose' button.
1. Click the 'Yes' button the next popup window to replace the current header.png file.
1. When the bottom right grey progress bar says that this upload is complete, close the upload window.
1. Open a new tab in your browser.
1. Type in your website's buggenie url: http://YOURSITE.COM/pm/.

#####E. Configure TGB name, theme, and icons

1. Click on 'You are not logged in' (upper right corner).
1. Login.  U = admin, P = pass.
1. Click on 'System Administrator' (upper right corner).
1. Select 'Configure The Bug Genie' option.

     NOTE: If you get a magic quotes error message
     1. Click on the tab for your cPanel File Manager, which should still be showing your  .../thebuggenie folder.
     1. Click once on the php.ini.zip to select it.
     1. Click on the 'Extract' button in the cPanel's top menu bar.
     1. Click the 'Extract file(s)' button in the popup window that opens and then click the 'Close' button.
     1. Click on the tab for your Bug Genie, and refresh the page.

     This may solve the problem. If does not, contact your hosting company's tech support people.
1. Select 'Uploads & attachments' tile (second row, far right tile on the 'Configure The Bug Genie' page).  
1. Click 'Yes' for 'Enable uploads' which is the first option.
1. Click the 'save' button (bottom right).
1. Select 'Settings' (2nd option from the left menu column).
1. Type in your Bug Genie's custom name (the name of your website, family, organization, etc.).
1. Click the 'save' button (bottom right).  
1. Select the 'Appearance' tab.  
1. Click on the currently selected theme 'oxygen' and change it to the 'nitrogen' theme.  Do keep oxygen as the selected iconset.
1. Click the 'save' button (bottom right).
1. Click the blue 'Configure icons' button.  
1. Click Favicon's 'Upload new icon' radio button, and then click the 'Choose File' button.
1. Select favicon.png file in the popup window that opens, and then click 'Choose'.
1. Click the Header icon's 'Upload new icon' radio button, and then click the 'Choose File' button.
1. Select the 'Header icon.png' NOT 'header.png' file, and click 'Choose' button.
1. Click the green 'Update icons' button.
1. Select the 'Users & security' tab.
1. Scroll down to 'New user accounts' and select 'All new user accounts will be created by an admin' option.  This will keep strangers from setting up accounts on your website until you are ready, if ever, to allow strangers to create accounts.
1. Click the 'save' button (bottom right).
1. Select 'Email communication' (2nd from the bottom, left menu column).

     The main reason to set this up now is to insure that if you forget your password TBG will be able to send you a new one via its forgot password button, which is only enabled if you configure this email module.
1. Change the 'Enable outgoing email notifications' option from 'No' to 'Yes'.
1. In the 'Email "from"-name' text box replace 'The Bug Genie' with your website's name followed by the word 'Automailer' (to identify system sent emails are automated).
1. In the 'Email "from"-address' text box type in  'Do_Not_Reply@YOURWEBSITE.COM' (as you do not want people replying to automated emails.  Each user can control whether or not to receive automated emails).
1. Click the 'save' button (bottom right).
1. Scroll up, and click on 'System Administrator' (upper right corner).
1. Select 'My account' option.
1. Change the Full Name to your full name.
1. Make sure the Gravatar email address you want is in the 'your email' address field.
1. Click the 'save' button (bottom right).
1. If your Gravatar icon is not showing, click the 'General settings' tab.
1. Select 'Yes' for 'Use Gravatar avatar' option.
1. Click the 'save' button (bottom right).

     I will cover the other important TBG configuration options, setting up projects, etc. in a follow on tutorial.  This one is focused on configuring the initial  look-and-feel.  Onward!

#####E. Configure top, menu-bar icon and links in file  headertop.inc.php located in folder .../core/templates/

To open cPanel files like the above headertop.inc.php that you do need to open now, go your browser's File Manager tab, go the folder specified (.../core/templates/), and then click on the file to select it.  Next, click the'Code Editor' button in the top menu bar,  and finally click the 'Edit' button in the popup window that opens, and your file will open.  

If the text in the edit window does not display properly, then click the 'Use text editor' button, which is a more boring, but a more stable cPanel file editor.

A long string of numbers like this 111111111111111111111111111111111 will appear above each change you need to make in file.  1 for the first change, 2 for the second, and so on.  In some files, you may need to scroll to near the bottom of file to find the first change that you need to make.

1. Experiment with icon size and padding in the headertop.inc.php file to get the best look.  Keep the height amount at or below 30px, as anything greater will shift the breadcrumb text under it over to the right.

      Click the 'Save Changes' button to try each new size change, and don't forget to refresh the view in your TGB window to see it.
2. Change http://YOURSITE.COM/YOURforum/ to your sites forum folder location
3. Change https://github.com/YOURorganization/ to your external GitHub  OR  Google Drive  OR other collaborative document creating, editing, etc. web tool.
1. Click the 'Save Changes' button.
1. Test both the Forum and GitHub links in your  TGB browser tab.
1. Return the headertop.inc.php tab when everything is working, and click its 'Close' button (upper right corner).
1. Return to the TGB browser tab and click your name, and then select the 'Logout' option.
1. Click your TGB's  'Overview' button to see your website guests' view.

#####F. Configure overview page icon and titles in file _header.inc.php located in folder .../modules/publish/templates/

1. Customize your the icon size above the Overview page's title (scroll down until you see  111111111111111111111111111111111 to find this size control section of the _header.inc.php file).

     Keep width and height equal and upload a new icon if you need to change it's proportions.

     This icon shows up on other pages that you are not customizing, and it is important that its proportions be consistent on all website pages.
1. Rewrite your site's guest overview page title and welcome message on line 68 (line numbers only show up when using the code editor).
2. Rewrite your site's logged in overview title on line 76.
1. Click the 'Save Changes' button after each change.
1. Test the look of your icon and titles in your  TGB browser tab.
1. Return the _header.inc.php tab when everything is right, and click its 'Close' button (upper right corner).

#####G. Fix a system email issue in the file _issueupdate.html.inc.php located in folder .../modules/mailing/templates/

1. Replace YOURSITE.COM on line 16 and line 24 with your site's name and .com, .org, etc. and correct links to will be sent by the system informing users of activity on your bug genie.

#####H. Create a strong password for your TGB admin account.

1. Click on your browser's TGB tab.
1. Click on 'You are not logged in' (upper right corner).
1. Login.  U = admin, P = pass.
1. Click on your name (upper right corner).
1. Select 'My account' option.
1. Click the 'Change my password' button, which is in the first row of buttons.
1. Enter your current password = pass.
1. Now, wherever you keep your passwords, type out a new one including at least two symbols, two numbers, two lower-case, and two upper-case letters = e#T89Gc& (but not, of course, exactly like this example)

     Always create a unique password for each website login, as no site is impossible to hack, and if your password is stolen, at least it can't be used anywhere else.  

     If you don't have to access to your stored passwords and need to get into your TGB, not to worry, The Bug Genie can email you password reset automatically.
1. Copy and paste this saved password (from wherever you store them) into the two new password fields.  
1. Click the 'Change password' button.
1. Click the 'Save' button (just for good measure).

Congratulations!  TGB's look and feel configuration is now done. You still need to set up security, permissions, etc., but for now apply the nitrogen theme to your Vanilla forum so that its look-and-feel matches your TBG.

#####H. Vanilla template drop-in replacement preparation

1. Click your browser's cPanel File Manager tab.
1. Click the 'Up One Level' button 4 times, until you are in your website's root folder: public_html.
1. Click on your Vanilla Forum folder = forum.
1. Create a compressed copy of it by clicking the 'Compress' button and then the 'Compress File(s)' button in the popup window that opens, and then the 'close' button.  
2. Click on the resulting forum.zip file to select it, and then download it to a safe place on your computer as a backup by clicking the 'Download' button in the top menu bar.

#####I. Vanilla Drop-in replacement

1. Click into the .../HGTtemplate/VanillaThemeNitrogen/ folder.
1. Click the 'Select all' button from the  menubar right above the file window and right below the top menu bar.
1. Click the 'Copy' (not move) button from the top menubar.
1. In the popup window that opens, replace the two folder names /HGTtemplate/VanillaThemeNitrogen/ with your Vanilla forum's folder name, which, if you followed my recommendation = forum.
1. Click the grey 'Copy File(s)' button.
1. Now open your Vanilla /forum/ folder by click the 'Up One Level' button twice, and then your /forum/ folder once.
1. Click on the browser tab for your TGB and then click the TGB's 'Forum' button (left-most top-menu-bar button).  If you don't have a tab open for your TGB then
   1. Open a new tab in your browser.
   1. Type in your website's forum url = http://YOURSITE.COM/FORUMfolder/.

#####J. Enable Nitogen theme and selected plugins

1. Click your forum's grey 'Sign In' button and sign in: U = admin, P = pass.
1. Click the gear icon (right above the 'New Discussion' button) and click on the 'dashboard' option from the popup menu that opens.
1. In the Appearance section of left menu column, click on the 'Themes' button.
1. Scroll down to the Nitrogen theme and click its light blue 'Apply' button.
1. Scroll down again looking for the Addons left menu section, and click its 'Plugins' option.
1. Enable the following plugins (which you can read about as you apply them):
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

1. Click on your browsers cPanel File Manager tab.
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
1. Delete /CAUTION/ from the list of folders in the popup text box, so that no /plugins/ is the last folder in this list.
1. Click the 'Copy File(s)' button to copy FirstLastName folder to the Plugins folder.
1. Click your browser's tab for your forum dashboard.
1. Refresh it to show the FirstLastName plugin.
1. Scroll down to the FirstLastName plugin, and read the WARNING for keeping this plugin disabled if your forum is open to strangers.
1. Enable it if there is no security risk (no strangers allowed), and allow users (family, friends, co-workers, etc.) to  sign posts using their real names versus a user nickname.  

     If after reading the warning, you decide it is unsafe to enable, then don't enable it.  
1. If you enable it, scroll to the left hand menu's Forum section, and click on the 'FirstLastNames' option.
1. Click the light blue 'Use Display Names' button to show users' full names.  

#####M. Customize link to your Terms of Use wiki page.

Lawyers need our heartfelt gratitude for creating documents like Terms of Use (no kidding).  This is an essential, serious document for regulating TBG and Vanilla Forum participants' emotions.  It lays out the requirements for respecting the feelings and thoughts of others, and the consequences for failing to do so.  Everyone who uses your forum must agree to abide by the Terms of Use agreement.  If your forum is only for family, friends, etc., spend some time, especially with kids, editing this document so that it make sense to everyone.  

You are welcome to copy the Help Give Thanks Terms of Use document at https://github.com/HelpGiveThanks/Drafts/blob/master/Website/English/TermsOfUseAgreement.md and modify it to your needs as long as you don't delete the required copyright references, and if necessary seek out professional legal help to determine if it is right for you, or even legally valid.

The custom link in your Vanilla Forum will point people to a single Terms of Use document for both your Forum and Bug Genie, located where it is easiest to modify, in your Bug Genie's wiki. To create this custom link in your Vanilla Forum registration windows

1. Click on your cPanel File Manager tab.
1. Go to the Vanilla folder .../plugins/FirstLastNames/views/
1. Open the registerapproval.php file.
1. Replace /YOURSITE.COM/YOURTBGfolder/ with your site's name at .com, .org, etc. and your Bug Genie folder's name = /YOURSITE.COM/pm/).
1. Save and close the file.
1. Repeat the above three steps for the rest of these files:
     1. registerbasic.php
     1. registercaptcha.php
     1. registerinvitation.php
1. Go to the Vanilla folder .../themes/nitrogen/views/entry/ and repeat the above three step process on these files:
     1. registerapproval.php
     1. registerbasic.php
     1. registercaptcha.php
     1. registerinvitation.php

#####N. Configure top menu-bar icon and links, and footer links in the file default.master.tpl located in folder .../themes/nitrogen/views

1. Do a find/replace of "YOURSITE.COM/YOURTBGfolder" (NOT /YOURforumfolder) to  customize all 9 instances of this TGB link.
     1. Click the binoculars icon to open the find/replace window.
     1. If you don't see this icon, then click the 'Use code editor' button.
2. Next, experiment with icon size and padding to get best look, while making sure whatever you do matches the look in TGB exactly.

     Click the 'Save Changes' button to try each new size change, and don't forget to refresh the view in your Vanilla Forum window to see it.
3. Type in your Forum url, replacing http://YOURSITE.COM/YOURforum.
4. Type in your GitHub url, replacing http://github.com/YOURorganization

     You can also change the GitHub link name to Docs or something else, if you decided to use Google Docs instead of GitHub to collaborate with others on file creation, improvements, etc.
1. Save and close this file.

#####O. Restrict access to just people you want on the forum while you build up a trusted user base.

1. Click on your browser's Vanilla forum.
1. Click the 'dashboard' button (left most button in the second row of buttons).
1. Scroll to the top and click on the left hand menu's Users section 'Registration' option.
1. Select the 'invitation' option in the 'Method' column.
1. Scroll down and under the column 'Role' (to the left of the column 'Invitations per month')
     1. Change the Administrator = You from 'None' to 'Unlimited' from the pulldown menu that opens.
     1. Leave the other roles with 'None' as their amount of invitations.

     This insures that no one can create an account without your consent while you setup the forum.
1. Scroll down and click the 'save' button.

#####H. Create a strong password for your Vanilla admin account

1. Click on 'admin' in the upper right corner of your forum.
1. Click the 'Edit Profile' button below the search text box.  
1. From the right menu column, click the 'Change My Password' button.
1. Click the 'Change my password' button, which is in the first row of buttons.
1. Enter your current password = pass.
1. Now, wherever you keep your passwords, type out a new one including at least two symbols, two numbers, two lower-case, and two upper-case letters = e#T89Gc& (but not, of course, exactly like this example)

#####P. Final Step

1. If you want the 'Register Invitation' button (seen when you are logged out) to say something different
     1. Go to the cPanel File Manager folder .../conf/ and open the file local.php.
     1. Change the text on line 15 in single quotes after the equal sign = 'Register Invitation'.

Congratualtions!  Your forum's look-and-feel is now identical to your TGB project manager, and navigation between the two should be seamless.  

Your next step is to create some categories for the forum, projects for the project manager, and setup user permissions for both.  This will be covered in part 2 of this 2 part tutorial.

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
