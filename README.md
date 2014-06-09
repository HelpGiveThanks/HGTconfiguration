## Help Give Thanks Research Project Template

This template was created out of a need for an integrated website solution combining the powers of The Bug Genie (TBG) and Vanilla.   This template is aimed to be easy to install by relatively novice users to encourage wide spread use of these tools in everyday interactions with family and friends.  Read more about the Help Give Thanks Research Project here: http://HelpGiveThanks.org.

NOTE: The repository at https://github.com/HelpGiveThanks/HGTtemplate was created to make it easy to keep track of all files needed to accomplish this template in two different applications, but it is not a fork off of those applications, and so cannot be compared to them.  The actual fork off of TGB for the TGB template can found here https://github.com/virtualdavid/thebuggenie/tree/template.  The Vanilla theme files consists of a modified copy of its default theme version 2.1.  


Q&A and LastEdited https://github.com/HelpGiveThanks/addons/compare/vanilla:2.1...2.1

TGB https://github.com/HelpGiveThanks/thebuggenie/compare/thebuggenie:branch-32...nitrogen?expand=1

FirstLastNames https://github.com/HelpGiveThanks/HGTtemplate/commit/2c29e05638a8f23cfb253e546866562d52e2f38f

Vanilla https://github.com/HelpGiveThanks/vanilla/compare/2.1?expand=1
## Installation

This template is built to make installation easy.

#####A. Template drop-in replacement preparation
1. Download the HGTtemplate.zip template.
1. Upload the template to your web server and extract it.
1. Zip your TGB folder.  
2. Download it to a safe place on your computer as a backup.  

#####B. TGB Drop-in replacement and icon upload

1. Click into the .../HGTtemplate/TBGTemplateNitrogen/ folder.
1. Click 'Select all' from the cPanel file menubar.
1. Click 'Move' from the cPanel top menubar.
1. Change folder name /TBGTemplateNitrogen/ in the popup window to your Bug Genie's folder name, which, if you followed my recommendation, you named /pm/ for project manager.
1. Click into your TGB folder.
1. Upload image files to replace header.png (site icon) and favicon.png to help identify your website.
1. Open a new tab in browser.  
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

Configure TGP name, theme, icons, and your custom icon

1. login  
1. go to configure bug genie
1. if getting magic quotes error message, go to the YOURTGBfolder/thebuggenie and extract the php.ini.zip.  This may solve the problem. If not contact your hosting company help desk.
1. Change type in your Bug Genie's custom name.
1. go the main YOURTGBfolder  
1. enable file uploads  
1. go to Settings  
1. select the Appearance tab  
1. select theme nitrogen  
1. click save  
1. click Configure icons  
1. upload Favicon and Upload new icon option and then Header icon Upload new icon option and click Update icons  
1. go to 'My account' settings 'General settings' tab and enable Gravatar avatar to show personal icon by click 'Yes' and then 'Save'.
1. log out




_issueupdate.html.inc.php

1 Replace YOURSITE.COM with your site's url.












Vanilla
default.master.tpl
1 You can do a find/replace to deal with all 8 instances of "YOURSITE.COM/YOURTBGfolder".  This will leave just your

2 Experiment with icon size and padding to get best look, while making sure whatever you do matches the look in TGB exactly.

3 Forum http://YOURSITE.COM/YOURforum

4 GitHub http://github.com/YOURorganization








Change locale.php "register invitation if you want"


YOURSITE.COM/YOURTBGfolder for registerapproval.php














## Open Source

This template is free, open source software.  The Bug Genie Nitrogen Template files are distributed under a Mozilla Public License Version 1.1, and the Vanilla Nitrogen Theme files are distributed under a GNU General Public License version 2 (GPLv2), which are the respective licenses of each of these amazing open source projects.  

To compare CURRENT differences between the nitrogen template remix of TBG files and the original TBG v3.2.7.1 files, please visit https://github.com/virtualdavid/thebuggenie/compare/thebuggenie:branch-32...nitrogen?expand=1 (GitHub will say 35 files have been changed as it combines both changed and added files in this count of changed files).  The Description of Nitrogen Template v1 Modifications.html that comes with each download of this template documents the EXACT CHANGES made to the files contained in this download.

To see screenshots and read a detailed explanation about the HGT Template go here http://forum.thebuggenie.com/viewtopic.php?f=9&t=1691&sid=628e6e5f3027e56f07651c066c001557.

To download a copy of this template go here https://sourceforge.net/projects/helpgivethanks/.


## Upgrading

Follow these steps to upgrade Vanilla when a new stable release is announced.


* Backup your database and `conf/config.php` file somewhere safe.
* Upload the new release's files so they overwrite the old ones.
* Go to `yourforum.com/index.php?p=/utility/update` to force any updates needed.
* If it fails, try it a second times by refreshing the page.

To upgrade to **2.1 from 2.0.18**, add this step:

* Delete the file [`/themes/mobile/views/discussions/helper_functions.php`](https://github.com/vanillaforums/Garden/blob/2.0/themes/mobile/views/discussions/helper_functions.php)

To upgrade from Vanilla **1.0**, you must export your data using the Vanilla Porter as if it were a migration. Your theme and any customizations will need to be recreated. Backup your Vanilla 1 data and files completely, then delete them from your server before attempting to install Vanilla 2.

## Migrating to Vanilla

* Get [Vanilla Porter](http://vanillaforums.org/addon/porter-core) and verify it supports your platform.
* Read the Advanced Uses notes on that page.
* Upload it to your current server.
* Navigate to the file in your web browser & run it.
* Take the file it produces and import it to Vanilla.

## Getting Help

* [Troubleshooting upgrades & installs](http://codex.vanillaforums.com/developers/troubleshooting/)
* [Official documentation](http://docs.vanillaforums.com)
* [Vanilla community forums](http://vanillaforums.org/discussions)
* [Official cloud hosting with professional support & migration services](http://vanillaforums.com/plans)

## Contributing

* Troubleshoot issues you run into on the community forum so everyone can help & reference it later.
* Got an idea or suggestion? Use the forum to discuss it.
* File detailed issues on GitHub (version number, what you did, and actual vs expected outcomes).
* Sign the Contributors' Agreement to send us code.
* Use pull requests against the correct release.

## Version Control Strategy

We've adopted the [git flow branching model](http://nvie.com/posts/a-successful-git-branching-model) in our projects.
The creators of git flow released a [short intro video](http://vimeo.com/16018419) to explain the model.

The `master` branch is production-ready for a our cloud product but is not yet vetted for open source release.
Only small patches and `hotfix/x` branches land against `master`, and it always has a stable version number.
The `develop` and `stage` branches are pre-production and are where we land `feature/x` branches for integration testing.

Our open source release branches are named by version number, e.g. `2.0` and `2.1`.
We begin release branches with a beta (b1) designation and progress them thru release candidate to stable.
All open source releases (included pre-releases) are tagged.

After `2.1`, we will be leap-frogging version numbers between `master` and releases.
Releases will receive the next odd-point number and `master` will then jump to the next even-point number.
Therefore, the next open source release after 2.1 will be 2.3. When the 2.3 beta begins, `master` will move to 2.4.

## Legal Stuff
Copyright &copy; 2009-2014 Vanilla Forums Inc.

Vanilla Forums is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License
as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
Vanilla Forums is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU General Public License for more details. You should have received a copy of the GNU General Public License
along with Vanilla Forums.  If not, see <http://www.gnu.org/licenses/>.
Contact Vanilla Forums Inc. at support [at] vanillaforums [dot] com

## Bonk!

Just kidding, everything's awesome. ![dance](http://cdn.vanillaforums.com/dance.gif)
