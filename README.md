### Help Give Thanks Research Project collaborative website-configuration tutorial  (version 1.1 ALPHA, READY FOR TESTING NOT GENERAL USE)
by David Matson, Copyright 2014. [Creative Commons
Attribution 4.0 International](http://creativecommons.org/licenses/by/4.0/)

I configured the Help Give Thanks Research Project (HGT) website tools at [HelpGiveThanks.org](http://HelpGiveThanks.org) out of my needs to 1) combine the powers of a project manager, wiki, forum, and document creating/editing tools in an easy to navigate, collaborative, online environment; and 2) to freely share this online environment with others, allowing anyone to test the relationship changing, positive effects that result especially from incorporating this collaborative environment into marriage, family, friend, and student-teacher relationships.  

Keep in mind that for all their complexity, the project manager, wiki, forum, and document creating/editing tools have the same function — to store and access information — as clay tablets used thousands of years ago to help create collaborative, non-argumentative, social environments.

![alt Argue Or Account. A Remix Cartoon by David Matson, Copyright 2014, CC BY 4.0](https://raw.githubusercontent.com/HelpGiveThanks/HGTconfiguration/master/images/ArgueOrAccount.png)

*Gavin.collins (2010). Summary account of silver for the governor written in Sumerian Cuneiform on a clay tablet. (From Shuruppak or Abu Salabikh, Iraq, circa 2,500 BCE. British Museum, London). Wikimedia Commons. Wikimedia Foundation. Copyright Public Domain. Available on 6/24/14 from https://commons.wikimedia.org/wiki/File:Sumerian_account_of_silver_for_the_govenor_(background_removed).png*

*Matson, David (2013), Remix of Man 261 [Arguing Facts] and Remix of Man 227 [Looking and Pointing]. Originals from collection by Nova Development (1997). In Art Explosion: 250,000 images : Macintosh. Calabasas, California: Nova Development. Copyright 1997 by the Publisher.  All rights reserved. Available on 8/14/13 from http://www.worldcat.org/title/art-explosion-250000-images-macintosh/oclc/39893863*

The primary difference between clay and digital information storage is shareability and collaborative freedom for all with access to computers and the web.  We no longer have to employ many highly-skilled people, strictly following numerous and complex rules to store, share, review, improve, etc. our important information as depicted in Pieter's painting below *(see [ancient bureaucracy](https://en.wikipedia.org/wiki/Beurocracy#Ancient_BureaucracyHuman) and [human computers](https://en.wikipedia.org/wiki/Human_computers) on Wikipedia.org)*.

![alt Village Lawyer by Pieter Brueghel the Younger)  ](https://upload.wikimedia.org/wikipedia/commons/a/a3/Pieter_Brueghel_the_Younger_-_Village_Lawyer_-_WGA3633.jpg)

[Village Lawyer (1621) by Flemish painter Pieter Brueghel the Younger (1564–1638)](https://commons.wikimedia.org/wiki/File:Pieter_Brueghel_the_Younger_-_Village_Lawyer_-_WGA3633.jpg)

Thanks to these digital tools, anyone including children can now (for the first time in human history!) help create, improve, and manage the information all humans need to have peaceful (drama-free), appreciative, productive, fascinating, etc. relationships.  This tutorial, the project manager and forum configuration files, and all the HGT Research Project tools constitute my current attempt (after many, many failures) to help get these kind of tools into all relationships (especially domestic ones), and bring about the peace on Earth and good will towards everyone that I know information technology makes possible. I hope you will build upon, improve, remix, and most of all use and share these tools.

### Where to contribute changes to help improve this tutorial and HGT configuration files
To encourage wide spread use of these collaboration tools in everyday interactions with family and friends, I have spent a lot of time editing and troubleshooting these instructions to insure that every setup and configuration step is spelled out completely. Of course editing my own work is never fool proof, so please help improve this file at https://github.com/HelpGiveThanks/HGTconfiguration/README.md

Use the links below to contribute improvements, and compare current changes to HGT configuration files.  

The Bug Genie (TGB) 3.2.7.1 HGT configuration https://github.com/HelpGiveThanks/thebuggenie/tree/nitrogen Compare https://github.com/HelpGiveThanks/thebuggenie/compare/thebuggenie:branch-32...nitrogen?expand=1

To see screenshots and read a detailed explanation of the TGB configuration go here http://forum.thebuggenie.com/viewtopic.php?f=9&t=1691&sid=628e6e5f3027e56f07651c066c001557.

Vanilla 2.1 HGT configuration
https://github.com/HelpGiveThanks/vanilla/tree/2.1
Compare  https://github.com/HelpGiveThanks/vanilla/compare/2.1?expand=1

Q&A Vanilla plugin HGT configuration
https://github.com/HelpGiveThanks/addons/tree/2.1/plugins/QnA
LastEdited Vanilla plugin
https://github.com/HelpGiveThanks/addons/tree/2.1/plugins/LastEdited
Compare Q&A and LastEdited https://github.com/HelpGiveThanks/addons/compare/vanilla:2.1...2.1

FirstLastNames Vanilla plugin HGT configuration
https://github.com/HelpGiveThanks/HGTconfiguration/tree/master/VanillaNitrogen/plugins/CAUTION/FirstLastNames
Compare https://github.com/HelpGiveThanks/HGTconfiguration/commit/faf18cc60007c912a048a4d636623b43783aa02d


### Setting up and configuring an online collaboration toolset part 1: From basic setup to customizing website look-and-feel

Part 2 will cover creating projects and issue types for the project manager, categories for the forum, and  configuring user permissions for both.

#####A. Create a new unconfigured project manager and forum for your family, friends, organization, etc.
1. Purchase a website hosting account that meets the following requirements: cPanel Version	11.42.+, PHP version	5.3.2+, MySQL version	5.1.7+.  I got mine here and have always received excellent tech support and customer service: http://www.umbrahosting.com/linux/shared-hosting $24/year + $10/year domain-name plans. I recommend the .org designation for non-commercial, organization websites.  You might want to also purchase the .com address, which can be easily redirected to your .org website.

  Full Discloser: I am satisfied customer of umbrahosting.com, and have not been paid, given any gifts, or special treatment for recommending them.  I provide my recommendation to give you an idea of total cost, and, perhaps, save you time searching for a reliable hosting company with excellent tech support.

  NOTE: If you want all user interactions with your website encrypted (not necessary) for $40/year you can purchase an SSL certificate:
http://www.umbrahosting.com/ssl-certificates.

     Learn more about SSL Certificates here http://en.wikipedia.org/wiki/SSL_certificate

     SAVE MONEY! You can host several small family website project-managers and forums on one hosting plan, each with its own password for entry and various privacy levels for projects, forum topics, etc. Privacy examples: allow just parents access, or only immediate family members, or all family and friends but no strangers, etc.  You have full and easy control over privacy!
1. After purchasing your website hosting account, log into your cPanel using the link emailed to you by your hosting company: http://YOURWEBSITE.ORG/cpanel.
1. Scroll down to the Software/Services sections and click on the Softaculous icon.
1. Enter 'The Bug' in the top right search box, and click on 'The Bug Genie' in the search results popup window.
1. Click the blue 'install' button.
1. Leave most everything as is, but change
     1. The 'In Directory' textbox information from 'buggenie' to 'pm' for project manager.

     If you plan on hosting several family, friend, etc. collaborative websites, then type in a folder name for each followed by pm = myfamily/pm.  The forward slash = new folder, so myfamily will be a folder containing a family's project manager (pm) folder.
     1. Leave the password as 'pass' and change it when you're finished setting up (it's just a lot easier).  
     1. Change the email address to an email address associated with a Gravatar icon.  Get yours for free at https://en.gravatar.com.
1. Click the grey 'install' button.
1. Next, scroll up and type 'vanilla' in the top right search box.
1. Click on 'Vanilla' in the search results popup window.
1. Click the blue 'install' button.
1. Leave most everything as is, but change
     1. The 'In Directory' textbox information from 'vanilla' to 'forum'.

     If you plan on hosting several family, friend, etc. collaborative websites, then type the family's folder name followed by forum = myfamily/forum.
     1. Leave the password as 'pass' and change it when you're finished setting up.  
     1. Change the email address to the same one used to install The Bug Genie (TGB).  
1. Click the grey 'install' button.
1. If you would like visitors to see a false front at YOURWEBSITE.COM while you set up your project manager and forum
     1. Scroll up and type 'Word Search' in the top right search box.
     1. Click on 'Word Search Puzzle' in the search results popup window.

        This game does not require a database and just works right away.
     1. Click the blue 'install' button.
     1. Click the grey 'Install' button.
1. Scroll up and return to the cPanel by clicking  the 'go to control panel' icon on the top menubar.  It's the blue-postage-stamp-with-a-gear-over-it icon (the first icon reading left-to-right).
1. In the cPanel files section click the 'File Manager' icon.
1. **IMPORTANT!** In the popup window that opens click the option to 'Show Hidden Files'.
1. Click the popup window's 'Go' button.
1. If you added the word-search puzzle game for your website's false front
     1. Click on the 'New File' button in the top menubar (far left).
     1. In the popup window that opens, type  'index.html' in the 'New File Name' text box, and don't forget to put the period between 'index' and 'html'.
     1. Click the 'Create New File' button.
     1. Click on your new index.html file to select it.
     1. Click the 'Edit' button in the top menubar to open it.
     1. In the popup window that opens, click the 'Edit' button.
     1. Copy the text below and paste it into the index.html file: ```<meta http-equiv="refresh" content="0; url=http://YOURWEBSITE.COM/wsp/" />```
     1. In this index.html file, replace 'YOURWEBSITE.COM' with your website's url = name and .com, .org, etc.
     1. Click the 'Save Changes' button.
     1. Check out your website's new false front by opening a new browser tab, and typing in your website's url: YOURWEBSITE.COM.

#####B. Configuration files drop-in replacement preparation

1. Download the HGTconfiguration.zip from http://sourceforge.net/projects/helpgivethanks/files/HGTconfiguration/.

     NOTE: If you are  using Apple's Safari browser, it will unzip this zip file and trash the zip if you have the *'Open "save" files after downloading'* preference checked in Safari's General Preferences. If this happens
     1. Retrieve the zip from the trash.

     DO NOT re-compress/zip the HGTconfiguration folder,  as the Mac will have added a bunch of files to help it find stuff in this folder, and you do not want these files cluttering your cPanel's File Manager folders.
1. Click your browser's cPanel File Manager tab.
1. Click the 'Upload' button in the File Manager's top menubar.
1. In the File  Upload window that opens next, Click the 'Browse' button.
1. Find and click on the HGTconfiguration.zip that you just downloaded.
1. Click the 'Open' button.
1. When the bottom-right, grey, progress bar says the upload is complete, close the upload window.
1. Click the 'Reload' button (second menubar) if you do not see the HGTconfiguration.zip.
1. Click on HGTconfiguration.zip to select it.
1. Click the 'Extract' button from the top menubar to unzip it.
1. Click the grey 'Extract File(s)' button in the popup window that opens, and then the 'close' button.
1. You can now delete the zip file to reduce clutter in your File Manager.
1. Backup The Bug Genie (TGB) folder before applying the HGT file changes.
1. Select your pm (buggenie) folder by clicking on it.
1. Create a compressed copy of it by clicking the 'Compress' button and then the 'Compress File(s)' button in the popup window that opens.
1. Click the 'close' button.

#####C. TGB configuration files drop-in replacement

1. Click into the .../HGTconfiguration/TBGNitrogen/ folder by first double clicking on the HGTconfiguration folder, which reveals the TBGNitrogen folder, that you then double-click on to open it.
1. Click the 'Select all' button from the second menubar (right above the file window, and right below the top menubar).
1. Click the 'Copy' (not move) button from the top menubar.
1. In the popup window that opens, replace the two folders /HGTconfiguration/TBGNitrogen/ with your Bug Genie's one folder name, which, if you followed my recommendation = pm for project manager
OR = familyfolder/pm.

     It should now read something like /public_html/pm OR /public_html/familyfolder/pm.
1. Click the grey 'Copy File(s)' button.

#####D. Custom website ID icon upload

These next steps depend up on your selection of a custom icon to help distinguish your website from other identical looking Bug Genie websites = other families', friends', etc. Bug Genies.  You can find lots of free images to use and modify for this purpose.

HERE http://commons.wikimedia.org/wiki/Category:Initials

Example: Cuculcan's 2008 InicialM. Copyright CC BY-SA 3.0  http://commons.wikimedia.org/wiki/File:InicialM.svg

![alt letter icon](http://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/InicialM.svg/200px-InicialM.svg.png)

AND ALSO HERE
https://openclipart.org

Example: ruthirsty's 2014 Green googly-eye bird. Public Domain (not copyrighted, free to use, etc.) https://openclipart.org/detail/190894/green-bird-by-ruthirsty-190894

![alt picture icon](https://openclipart.org/people/ruthirsty/green_bird.svg)

Think of these images as icons, not logos.  They do not have to be unique, just distinctive from the icons of other websites that your users frequent.

I would recommend something very simple as these icons need to be identifiable when very, very small. They also need to be visible against a dark blue background and a white background.  You could use just one icon, or two light and dark versions of the same icon, or three versions of the same icon colored solid white, grey, and black.

1. If you downloaded one icon, or two version of the same icon, to do the identification job
   1. Duplicate it twice so that you have three copies of it, and then name these copies:
         1. favicon.png (dark version)
         2. header.png (light version)
         3. Header icon.png (dark version)
1. If you got ambitious and modified or created your website's icon, save three copies with the following properties:
     1. 24px x 24px dark or solid black icon named favicon.png
     1. 50px x 50px light or solid white icon named header.png
     1. 100px x 100px light or grey (hex #666666 or RGB	102	102	102) icon named Header icon.png

  Once you have your three icon files stored on your computer
1. Click into your browser's File Manager pm folder by clicking the 'Up One Level' button twice, and then double clicking on your TGB folder = pm.

     I'll refer to this main TBG folder from now on with three dots '...' = pm.
1. Next, click into your thebuggenie folder.
1. Click the 'Upload' button in the File Manager's top menubar.
1. Click the 'Choose File' button in the window that opens.
1. Find and click on the favicon.png image file.
1. Click the 'Choose' button.
1. Click the 'Yes' button in the next popup window that opens to replace the current favicon.png file.
1. Click the 'Choose File' button again.
1. Find and click on the header.png file NOT the Header icon.png file.
1. Click the 'Choose' button.
1. Click the 'Yes' button in the next popup window that opens to replace the current header.png file.
1. When the bottom right grey progress bar says that these uploads are complete, close the upload window.
1. Open a new tab in your browser.
1. Type in your website's buggenie url: http://YOURSITE.COM/pm/ OR http://YOURSITE.COM/yourfamily/pm/.

#####E. Configure TGB name, theme, and icons

1. Click on 'You are not logged in' (upper right corner).
1. Login.  U = admin, P = pass.
1. Click on 'System Administrator' (upper right corner).
1. Select the 'Configure The Bug Genie' option.

     NOTE: If you get a magic quotes error message
     1. Click on the tab for your cPanel File Manager, which should still be showing your thebuggenie folder.
     1. Click once on the php.ini.zip to select it.
     1. Click on the 'Extract' button in the cPanel's top menubar.
     1. Click the 'Extract file(s)' button in the popup window that opens and then click the 'Close' button.
     1. Click on the tab for your Bug Genie, and refresh the page.

     This may solve the problem. If it does not, contact your hosting company's tech support people.
1. Select the 'Uploads & attachments' tile (second row, far right tile on the 'Configure The Bug Genie' page).  
1. Click 'Yes' for 'Enable uploads', which is the first option.
1. Click the 'save' button (bottom right).
1. Select 'Settings' (2nd option from the left menu column).
1. Type in your Bug Genie's custom name (the name of your website, family, organization, etc.).
1. Scroll down (if necessary) and click the 'save' button (bottom right).  
1. Scroll up  (if necessary) and select the 'Appearance' tab.  
1. Click on the currently selected theme 'oxygen' and change it to 'nitrogen'.  Keep 'oxygen' as the selected iconset.
1. Click the 'save' button (bottom right).
1. Click the blue 'Configure icons' button.  
1. Click Favicon's 'Upload new icon' radio button, and then click the 'Choose File' button.
1. Select favicon.png file in the popup window that opens, and then click 'Choose'.
1. Click the Header icon's 'Upload new icon' radio button, and then click the 'Choose File' button.
1. Select the 'Header icon.png' NOT 'header.png' file, and click the 'Choose' button.
1. Click the green 'Update icons' button.
1. Select the 'Users & security' tab.
1. Scroll down to 'New user accounts' and click on 'Users can register new accounts' and change it to 'All new user accounts will be created by an admin'.  This will keep strangers from setting up accounts on your website until you are ready, if ever, to allow strangers to create accounts.
1. Click the 'Save' button (bottom right).
1. Select 'Email communication' (left menu column, 2nd item from the bottom).

     The main reason to set this up now is to insure that if you forget your password TBG will be able to send you a new one via its forgot password button, which is only enabled if you configure this email module.
1. Change the 'Enable outgoing email notifications' option from 'No' to 'Yes'.
1. In the 'Email "from"-name' text box replace 'The Bug Genie' with your website's name followed by the word 'Automailer' (to identify, automated system-sent emails).
1. In the 'Email "from"-address' text box type in  'Do_Not_Reply@YOURWEBSITE.COM' (as you do not want people replying to automated emails.  NOTE: Each user can control whether or not to receive automated emails).
1. Click the 'Save' button (bottom right).
1. Scroll up, and click on 'System Administrator' (upper right corner).
1. Select the 'My account' option.
1. In the 'Full name' text field type your full name.
1. Make sure the email address linked to your Gravatar icon is in the 'Email address' field.
1. Click the 'save' button (bottom right).
1. If your Gravatar icon is not showing, click the 'General settings' tab.
1. Select 'Yes' for the 'Use Gravatar avatar' option.
1. Click the 'save' button (bottom right).

     I will cover the other important TBG configuration options, setting up projects, etc. in a follow-on tutorial.  This one is focused on configuring the initial look-and-feel.  Onward!

#####F. Configure top, menubar icon and links in the  headertop.inc.php file located in the .../core/templates/ folder

To open cPanel files like the above – headertop.inc.php – that you now need to open
1. Go to your browser's File Manager tab.
1. Go to the folder specified  – .../core/templates/ –  by clicking the 'Up One Level' button as many times as necessary to get the main folder = ... = pm.
1. Then click on each subfolder in turn, which in this case is /core/ and then /templates/.  
1. Once you've opened the last folder specified, click on the file you need to open to select it –  headertop.inc.php.  
1. Finally, click the 'Code Editor' button in the top menubar, and then the 'Edit' button in the popup window that opens, to open the file.  

If the code in the edit window does not display properly, then click the 'Use text editor' (upper right) button, which opens a more boring, but a more stable cPanel file editor.

NOTE: I put a long string of numbers like this 111111111111111111111111111111111 above each section of code that you need to modify: 1 for the first change, 2 for the second, and so on.  In some files, you may need to scroll almost to the bottom to find the first change needed.  There are very few changes needed in any file, and all are very easy to make.  

Now make the first change to the headertop.inc.php file.

1. Experiment with icon size (if needed) in the headertop.inc.php file to get the icon looking its best. Click on your TBG browser tab to see how it looks after each saved change. Don't forget to refresh the view in your TGB browser window to see the saved changes.

    Keep the height amount at or below 30px, as anything greater will shift the breadcrumb text under the icon to the right.
2. Change this url http://YOURSITE.COM/YOURforum/ to your site's forum-folder url.
3. Change this url https://github.com/YOURorganization/ to your external
   1. GitHub account url = $7/month for 5 private repositories (free for unlimited public repositories). So 5 groups – families, friends, etc. – could share the cost of one private GitHub account.  [Learn more.](https://github.com/pricing)
   1. Google Drive account = free private folders, but fewer, and much less powerful collaboration tools compared with GitHub's offering. [Learn more](http://www.google.com/docs/about/)
   1. Other collaborative document creating, editing, etc. web-tool account.
1. Click the 'Save Changes' button.
1. Test both the Forum and GitHub links in your  TGB browser tab (after you refresh your TGB browser window).
1. Return to the headertop.inc.php tab when everything is working, and click its 'Close' button (upper right corner).
1. Return to the TGB browser tab and click your name, and then select the 'Logout' option.
1. Click your TGB's  'Overview' button.

#####G. Configure overview page icon and titles in the _header.inc.php file located in the .../modules/publish/templates/ folder

1. Customize your the icon size above the Overview page's title (scroll down until you see the 111111111111111111111111111111111's to find this size-control section of the _header.inc.php file code).

     Keep width and height equal as you change the icon's size.   Upload a new icon if you need to change its proportions. Example: If the icon looks better wider than it is taller
     1. Download and open the icon file in your favorite image editor.  
     1. Squish it down so there is space above it, but no space on the sides.
     1. Resave it as perfect square with empty space at the top.
     1. Upload it – Header icon.png – to replace the equally tall-and-wide version of itself.

  The Header icon.png is used by TBG on other pages that you are not customizing, and so it is important that its proportions be changed once at the icon-file level, and not in every TGB file in which it appears.
1. Rewrite your site's guest overview page title and welcome message below the 222222's.  

   Note: If you're upgrading and already wrote this, then go to your pmOLD folder and open this file to copy out your text and paste it here.
2. Rewrite your site's logged-in overview title below the 3333333's.
1. Click the 'Save Changes' button after each change.
1. Test the look of your icon and readability of your titles in your TGB browser's overview tab.
1. Return to the _header.inc.php file tab when everything is right, and click its 'Close' button (upper right corner).

#####H. Fix a system email issue in the _issueupdate.html.inc.php file located in the .../modules/mailing/templates/ folder

1. Replace YOURSITE.COM on line 16 with your site's url.
2. Replace YOURSITE.COM on line 24 with your site's url.
3. Save and close the file.

     This fix insures that emails sent by the system, informing users of changes made on your TBG, include correct links to those changes.

#####I. Create a strong password for your TGB admin account.

1. Click on your browser's TGB tab.
1. Click on 'You are not logged in' (upper right corner).
1. Login.  U = admin, P = pass.
1. Click on your name (upper right corner).
1. Select the 'My account' option.
1. Click the 'Change my password' button, which is in the first row of buttons.
1. Enter your current password = pass.
1. Now, wherever you keep your passwords, type out a new one including at least two symbols, two numbers, two lower-case, and two upper-case letters in random order = e#T89Gc& (but not, of course, exactly like this example).

     Always create a unique password for each website login, as no site or web server is impossible to hack, and if your password is stolen, at least it can't be used anywhere else.  

     NOTE: If you need to get into your TGB and don't have access to your password, not to worry, The Bug Genie can email you a new password by clicking the 'Forgot Password' button under the 'login' button.
1. Copy and paste your newly saved password into the new-password fields.  
1. Click the 'Change password' button.
1. Click the 'Save' button (just for good measure).

Congratulations!  TGB's look-and-feel configuration is now done. You still need to set up projects, issue types, permissions, etc., which I will cover in a follow-on tutorial.  Now  apply the nitrogen configuration to your Vanilla forum to make its look-and-feel work with your TGB.

#####J. Vanilla configuration files drop-in replacement preparation

1. Click your browser's cPanel File Manager tab.
1. Click the 'Up One Level' button 4 times, until you are in your website's root folder: public_html.
1. Click on your Vanilla Forum folder = forum.
1. Create a compressed copy of it by clicking the 'Compress' button and then the 'Compress File(s)' button in the popup window that opens.
1. Click the 'close' button.  

#####K. Vanilla Drop-in replacement

1. Click into the HGTconfiguration/VanillaNitrogen/ folder.
1. Click the 'Select all' button from the  menubar right above the file window and right below the top menubar.
1. Click the 'Copy' (not move) button from the top menubar.
1. In the popup window that opens, replace the two folder names /HGTconfiguration/VanillaNitrogen/ with your Vanilla forum's folder name, which, if you followed my recommendation = forum OR familyfolder/forum.

   It should now read something like /public_html/forum OR /public_html/familyfolder/forum.
1. Click the grey 'Copy File(s)' button.
1. Now open your Vanilla forum folder by clicking the 'Up One Level' button twice, and then double clicking on your forum folder.
1. Click on your browser's TGB tab.  If you don't have a tab open for your TGB then
   1. Open a new tab in your browser.
   1. Type in your website's forum url = http://YOURSITE.COM/forum/.
1. Click the TGB's 'Forum' button (left edge, top menubar button).

#####L. Enable Nitrogen theme and selected plugins

1. Click your forum's grey 'Sign In' button and sign in: U = admin, P = pass.
1. Click the gear icon (right above the 'New Discussion' button) and click on the 'dashboard' option from the popup menu that opens.
1. In the left-menu column's 'Appearance' section, click on the 'Themes' button.
1. Scroll down to the Nitrogen theme and click its light blue 'Apply' button.
1. Scroll down again looking for the left-menu column's 'Addons' section, and click its 'Plugins' option.
1. Enable the following plugins (which you can read about as you enable them):
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

#####M. Finish enabling the Q&A Big Button Remix plugin

NOTE: Now these three dots '...' refer to your Vanilla forum's root folder = forum.
1. Click on your browser's cPanel File Manager tab.
1. Open the config.php file located in folder .../conf.
1. Select and then copy ALL the code below from ```//Make``` to ```'Ads');```  (required to make a big 'Ask a Question' button appear just below the 'New Discussion' button):

 ```
 //Make big question button appear
$Configuration['Plugins']['QnA']['UseBigButtons'] = TRUE;

  $Configuration['Modules']['Vanilla']['Panel'] = array('MeModule', 'UserBoxModule', 'GuestModule', 'NewDiscussionModule', 'NewQuestionModule','DiscussionFilterModule', 'SignedInModule', 'Ads');
 ```
1. Paste this copied code into the config.php file right below line 1 = ```<?php if (!defined('APPLICATION')) exit();```  
(do make a space or two before and after the pasted code (less crowded)).
1. Click the 'Save Changes' button.
1. Open a new browser tab and type in your forum url to see if a question button has been added.  If not, closely check to make sure that you copied and pasted all the required code, and then saved the config.php file.
1. Return to the cPanel's File Manager tab, and click the file's 'Close' button.

#####N. CAUTION: Enable the FirstLastName plugin if your forum is only for people that you know and trust.

1. In your cPanel File Manager, open your Vanilla's .../plugins/CAUTION/ folder.
1. Click on the FirstLastNames folder to select it.
1. Click 'Copy' (not move file) from the cPanel top menubar.
1. Delete /CAUTION/ from the list of folders in the popup text box, so that /plugins/ is the last folder in this list.
1. Click the 'Copy File(s)' button to copy the FirstLastName folder to the Plugins folder.
1. Click your browser's Forum Dashboard tab.
1. Refresh it to show the FirstLastName plugin.
1. Scroll down to the FirstLastName plugin, and read the WARNING for keeping this plugin disabled if your forum is open to strangers.
1. Enable it if there is no security risk (no strangers allowed), and allow users – family, friends, co-workers, etc. – to  sign posts using their real names versus a user nickname.  

     If after reading the warning, you decide it is unsafe to enable, then don't enable it.  
1. If you enable it, scroll to the left-hand menu's 'Forum' section, and click on the 'FirstLastNames' option.
1. Click the light blue 'Use Display Names' button in the screen that opens to show users' full names.  

#####O. Customize links to your Terms of Use wiki page.

Lawyers need our heartfelt gratitude for creating documents like Terms of Use (no kidding).  This is an essential, serious document for regulating TBG and Vanilla Forum participants' emotions.  It lays out the requirements for respecting the feelings and thoughts of others, and the consequences for failing to do so.  Everyone who uses your forum must agree to abide by the Terms of Use agreement.  If your forum is only for family, friends, etc., spend some time, especially with kids, editing this document so that it make sense to everyone, and is something that everyone can live with and abide by.  

You are welcome to copy the Help Give Thanks Terms of Use document at https://github.com/HelpGiveThanks/Drafts/blob/master/Website/English/TermsOfUseAgreement.md and modify it to your needs as long as you don't delete the required copyright references, and, if necessary, seek out professional legal help to determine if it is right for you, or even legally valid (as I am not a legal professional, in case there was any doubt).

The Terms of Use link in your Vanilla Forum will point people to a single document for both your forum and TGB, located where it is easiest to modify, in your TGB's wiki. To create this custom link

1. Click on your cPanel File Manager tab.
1. Go to the Vanilla folder .../plugins/FirstLastNames/views/

   NOT .../plugins/CAUTION/FirstLastNames/views/
1. Open the  registerapproval.php file with a cPanel file editor.
1. Replace the url /YOURSITE.COM/YOURTBGfolder/ with your site's  url and your TGB's folder name = /YOURSITE.COM/pm/.
1. Save and close the file.
1. Repeat the above three steps for the rest of these files:
     1. registerbasic.php
     1. registercaptcha.php
     1. registerinvitation.php
1. Go to the Vanilla folder .../themes/nitrogen/views/entry/ and repeat the above three-step process for these files:
     1. registerapproval.php
     1. registerbasic.php
     1. registercaptcha.php
     1. registerinvitation.php
1. Test this link by going to your browser's forum discussion tab, not dashboard tab.
1. Click the 'Sign Out' button in the second row of buttons.
1. Click the grey 'Register Invitation' button.
1. Click on the 'terms of use' link just above the grey 'Sign Up' button on the popup form that opens. Your browser should open a new tab for your not-yet-created Terms of Use wiki page (unless you made a typo when you entered the url in the above files).

   I'll show you in the follow-on tutorial how to easily create this Term's of Use wiki page.  
1. Click on your browser's cPanel File Manager tab.

#####P. Configure top menubar icon and links, and footer links in the default.master.tpl file located in the .../themes/nitrogen/views folder

1. Perform a find-and-replace of "YOURSITE.COM/YOUR**TBG**folder"

   NOT /YOUR**forum**folder

   to  customize all 9 instances of this TGB link.
     1. Click the binoculars icon to open the find-and-replace popup window.
     1. If you don't see this icon, then click the 'Use code editor' (upper right) button.
2. Next, experiment with icon size and padding (5px 5px 5px 5px = TOP RIGHT BOTTOM LEFT) to match the icon in TGB exactly.  NOTE: If you increase the icon's height, you will need to decrease the bottom padding = 5px 5px **0px** 5px.

     Click the 'Save Changes' button to try each new size change out in your browser's Vanilla Forum tab (click the 'Discussions' (upper left) button to get back to the main forum page, if you are not already viewing your changes on this page). Remember to refresh the view in your Vanilla Forum window to see the changes.  
3. Type in your Forum url to replace this url http://YOURSITE.COM/YOURforum.
4. Type in your GitHub url to replace this url http://github.com/YOURorganization

     You can also change the GitHub link name to Docs or something else, if you decided to use Google Docs instead of GitHub to collaborate with others on file creation, improvements, etc.  Just make sure that the link name is the same as the one you used in your TGB.
1. Save and close this file.

#####Q. Restrict access to just people you want on the forum while you build up a trusted user base.

1. Click on your browser's Vanilla forum.
1. Sign back in.
1. Click the 'dashboard' button (left most button in the second row of buttons).
1. Go to the left-menu column's 'Users' section, and click its 'Registration' option.
1. Select the 'Invitation' option in the 'Method' column.
1. Scroll down and under the column 'Role'
     1. Change the Administrator = You from 'None' to 'Unlimited'.
     1. Leave the other roles with 'None' for their amount of invitations.

     This insures that no one can create an account while you setup the forum.
1. Scroll down and click the blue 'Save' button.

#####R. Create a strong password for your Vanilla admin account

1. Click on 'admin' in the upper right corner of your forum.
1. Click the 'Edit Profile' button below the search text box.
1. If you enabled the FirstLastNames plugin, then enter your first and last name, and click the grey 'Save' button.
1. From the right menu column, click the 'Change My Password' button.
1. Enter your current password = pass.
1. Now, wherever you keep your passwords, type out a new one including at least two symbols, two numbers, two lower-case, and two upper-case letters in random order = e#T89Gc& (but not, of course, exactly like this example).
1. Copy and paste the new, strong and saved password into the provided new-password fields.
1. Click the 'Change Password' button.

#####S. Optional Final Step

1. If you want the 'Register Invitation' button (seen when you are logged out) to say something different
     1. Go to the cPanel File Manager folder .../conf/ and open the local.php file.
     1. Change the text on line 15 in single quotes after the equal sign = 'Register Invitation'.  
     1. Save and close this file.

Congratulations!  Your forum's look-and-feel is now identical to your TGB project manager, and navigation between the two should be seamless.  


### Setting up and configuring an online collaboration toolset part 2: Configuring user permission, creating project manager projects and issue types, and forum categories

#####A. Configure project manager permissions

1. Login to your project manager (TGB).
1. Click on your name (upright corner), and click on the 'Configure The Bug Genie' option.
1. Click on the 'Permissions' tile (first row, far right tile).
1.


http://issues.thebuggenie.com/wiki/WorkflowSteps
http://issues.thebuggenie.com/wiki/WorkflowTransition


![alt TBG configuration order screenshot](https://raw.githubusercontent.com/HelpGiveThanks/HGTconfiguration/master/images/TBG%20Configuration%20Order.png)


## Open Source License and Warranty Information
The Help Give Thanks Research Project website configuration files are free for you to redistribute and modify under the terms of the Mozilla Public License for The Bug Genie files, and the General Public License for all Vanilla files and plugins.
These files are distributed in the hope that they will be useful, but WITHOUT ANY WARRANTY;
without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the open source licenses for more information.

Mozilla Public License, version 1.1 http://opensource.org/licenses/mozilla1.1.php


General Public License, version 2 http://www.gnu.org/licenses/gpl-2.0.html
